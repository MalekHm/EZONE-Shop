<?php

namespace App\PageBuilder\Addons\products;

use App\AdminShopManage;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\NiceSelect;
use App\PageBuilder\Fields\Number;
use App\PageBuilder\Fields\Select;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\Helpers\RepeaterField;
use App\PageBuilder\PageBuilderBase;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Translation\Translator;
use Modules\Attributes\Entities\Category;
use Modules\Product\Entities\Product;

class ProductStyleFive extends PageBuilderBase
{
    public function preview_image(): string
    {
        return 'product/product-style-five.png';
    }

    public function admin_render(): string
    {
        $output = $this->admin_form_before();
        $output .= $this->admin_form_start();
        $output .= $this->default_fields();
        $widget_saved_values = $this->get_settings();

        $products = Product::select("id","name")->pluck("name", "id")->toArray();

        $output .= Text::get([
            'name' => 'section_title',
            'label' => __('Section Title'),
            'value' => $widget_saved_values['section_title'] ?? null,
        ]);

        $output .= NiceSelect::get([
            'name' => 'products',
            'multiple' => true,
            'label' => __('Select Products'),
            'placeholder' =>  __('Select Products'),
            'options' => $products,
            'value' => $widget_saved_values['products'] ?? null
        ]);

        $output .= Number::get([
            'name' => 'item_count',
            'label' => __('Product Limit'),
            'value' => $widget_saved_values['item_count'] ?? null,
        ]);

        $output .= $this->admin_form_submit_button();
        $output .= $this->admin_form_end();
        $output .= $this->admin_form_after();

        return $output;
    }

    public function frontend_render(): string
    {
        $all_settings = $this->get_settings();
        $section_title = SanitizeInput::esc_html($all_settings['section_title']);
        $selected_product = $all_settings['products'] ?? [];
        $item_count = SanitizeInput::esc_html($all_settings['item_count']);

        $products = addonProductInstance();

        $products = $products->when(!empty($selected_product), function ($query) use ($selected_product){
            $query->whereIn("id", $selected_product);
        })->when(empty($selected_product), function ($query) {
            $query->orderBy("ratings_count", "DESC");
        })->take(!empty($item_count) ? $item_count : 6)->get()
        ->transform(function ($item) {
            if(!empty($item->vendor_id) && get_static_option("calculate_tax_based_on") == 'vendor_shop_address') {
                $vendorAddress = $item->vendorAddress;
                $item = tax_options_sum_rate($item, $vendorAddress->country_id, $vendorAddress->state_id, $vendorAddress->city_id);
            }elseif(empty($item->vendor_id) && get_static_option("calculate_tax_based_on") == 'vendor_shop_address'){
                $vendorAddress = AdminShopManage::select("id","country_id", "state_id","city as city_id")->first();
                $item = tax_options_sum_rate($item, $vendorAddress->country_id, $vendorAddress->state_id, $vendorAddress->city_id);
            }
            return $item;
        });

        return $this->renderBlade("product/product-style-five", compact("section_title","products"));
    }

    public function addon_title(): array|string|Translator|Application|null
    {
        return __("Product Style Five: 05");
    }
}