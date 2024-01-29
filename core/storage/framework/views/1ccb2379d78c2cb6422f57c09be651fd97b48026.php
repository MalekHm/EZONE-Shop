<?php
    $attributes = \Modules\Product\Entities\ProductInventoryDetails::where("product_id",$product->id)->count();

    $campaign_product = getCampaignProductById($product->id);
    $sale_price = $campaign_product ? $campaign_product->campaign_price : $product->sale_price;
    $deleted_price = $campaign_product ? $product->sale_price : $product->price;
    $campaign_percentage = $campaign_product ? getPercentage($product->sale_price, $sale_price) : false;
    $campaignProductEndDate = $product->campaign->end_date ?? $product->campaign->end_date->end_date ?? '';

    $campaignSoldCount = \Modules\Campaign\Entities\CampaignSoldProduct::where("product_id",$product->id)->first();
    $stock_count = $campaign_product ? $campaign_product->units_for_sale - optional($campaignSoldCount)->sold_count ?? 0 : optional($product->inventory)->stock_count;
    $stock_count = $stock_count > 0 ? $stock_count : 0;
    $quick_view_data = getQuickViewDataMarkup($product);

    if(isset($attributes) && $attributes > 0){
        $quick_view_markup = '<a class="product-quick-view-ajax" href="#1" data-action-route="'. route('frontend.products.single-quick-view', $product->slug) .'">
                                <i class="lar la-eye icon"></i>
                            </a>';
    }else{
        $quick_view_markup = '<a href="#1" id="quickview" class="quick-view" '.$quick_view_data.'}><i class="lar la-eye icon"></i></a>';
    }
?>

<div class="single-product-view-grid-style-03">
    <div class="product-thumb">
        <a href="#1" class="img-link">
            <?php echo render_image_markup_by_attachment_id($product->image); ?>

        </a>
        <div class="other-content">
            <?php if(!empty($product->badge)): ?>
                <span class="badge-tag"><?php echo e($product->badge); ?></span>
            <?php endif; ?>
            <?php if(!empty($campaign_percentage)): ?>
                <span class="discount-tag"><?php echo e(round($campaign_percentage,0)); ?>%</span>
            <?php endif; ?>
        </div>
        <div class="hover-content">
            <ul class="hover-element-list">
                <li>
                    <?php if(isset($attributes) && $attributes > 0): ?>
                        <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>">
                            <i class="las la-shopping-cart icon"></i>
                        </a>
                    <?php else: ?>
                        <a href="#1" data-attributes="<?php echo e($product->attributes); ?>" data-id="<?php echo e($product->id); ?>"
                           class="add_to_cart_ajax">
                            <i class="las la-shopping-cart icon"></i>
                        </a>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if(isset($attributes) && $attributes > 0): ?>
                        <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>">
                            <i class="lar la-heart icon"></i>
                        </a>
                    <?php else: ?>
                        <a href="#1" data-attributes="<?php echo e($product->attributes); ?>" data-id="<?php echo e($product->id); ?>"
                           class="add_to_wishlist_ajax">
                            <i class="lar la-heart icon"></i></a>
                        </a>
                    <?php endif; ?>
                </li>
                <li>
                    <a href="#1" data-id="<?php echo e($product->id); ?>" class="add_to_compare_ajax"> <i class="las la-retweet icon"></i></a>
                </li>
                <li>

                </li>
            </ul>
        </div>
    </div>
    <div class="product-content">
        <div class="main-content">
            <div class="ratings">



            </div>
            <h4 class="product-title">
                <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>"><?php echo e(html_entity_decode($product->title)); ?></a>
            </h4>
            <div class="product-meta-and-pricing">
                <span class="product-meta"><?php echo e($product->uom?->quantity); ?> <?php echo e($product->uom?->unit?->name); ?></span>
                <div class="product-pricing">
                    <del><?php echo e(float_amount_with_currency_symbol(round($deleted_price,2))); ?></del>
                    <span class="price"><?php echo e(float_amount_with_currency_symbol(round($sale_price,2))); ?></span>
                </div>
            </div>

            <div class="btn-wrapper">
                <?php if(isset($attributes) && $attributes > 0): ?>
                    <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>" class="add-cart-style-02">
                        <?php echo e(__("View Option")); ?>

                    </a>
                <?php else: ?>
                    <a href="#1" data-attributes="<?php echo e($product->attributes); ?>" data-id="<?php echo e($product->id); ?>"
                       class="add_to_cart_ajax add-cart-style-02">
                        <?php echo e(__("Add to Bag")); ?>

                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\frontend\product\product-card-05.blade.php ENDPATH**/ ?>