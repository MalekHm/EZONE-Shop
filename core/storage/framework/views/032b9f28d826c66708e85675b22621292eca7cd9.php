<?php
    $attributes = $product?->inventory_detail_count ?? null;
    $campaign_product = $product->campaign_product ?? null;
    $campaignProductEndDate = $product->campaign->end_date ?? $product->campaign->end_date->end_date ?? '';
    $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $product->sale_price;
    $deleted_price = !is_null($campaign_product) ? $product->sale_price : $product->price;
    $campaign_percentage = !is_null($campaign_product) ? getPercentage($product->sale_price, $sale_price) : false;
    $campaignSoldCount = $product?->campaign_sold_product;
    $stock_count = $campaign_product ? $campaign_product->units_for_sale - optional($campaignSoldCount)->sold_count ?? 0 : optional($product->inventory)->stock_count;
    $stock_count = $stock_count > 0 ? $stock_count : 0;
    $rating_width = round(($product->ratings_avg_rating ?? 0) * 20);
?>
<div class="slick-slider-items radius-10">
    <div class="global-card-item style-02 center-text radius-10 no-shadow">
        <div class="global-card-thumb radius-10">
            <a href="<?php echo e(route("frontend.products.single",$product->slug)); ?>">
                <?php echo render_image($product->image); ?>

            </a>

            <?php echo view('product::components.frontend.common.badge-and-discount', compact('product', 'campaign_percentage')); ?>


            <ul class="global-thumb-icons hover-color-two">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'product::components.frontend.common.link-option','data' => ['product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product::frontend.common.link-option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </ul>
        </div>
        <div class="global-card-contents">
            <h5 class="common-title hover-color-two"> <a href="<?php echo e(route("frontend.products.single",$product->slug)); ?>"> <?php echo e($product->name); ?></a> </h5>
            <div class="global-card-flex-contents">
                <div class="single-global-card <?php echo e($product->reviews_avg_rating < 1 ? "d-none" : ""); ?>">
                    <div class="global-card-right">
                        <div class="rating-wrap">
                            <div class="ratings <?php echo e($rating_width == 0 ? "d-none" : ""); ?>">
                                <span class="hide-rating"></span>
                                <span class="show-rating" style="width: <?php echo e($rating_width); ?>%!important"></span>
                            </div>
                            <p> <span class="total-ratings"><?php echo e($product->ratings_count ? "(". $product->ratings_count .")" : ""); ?></span></p>
                        </div>
                    </div>
                </div>
                <div class="single-global-card">
                    <div class="global-card-left">
                        <div class="price-update-through">
                            <span class="fs-20 fw-500 ff-rubik flash-prices color-two"> <?php echo e(float_amount_with_currency_symbol(calculatePrice($sale_price, $product))); ?> </span>
                            <span class="fs-16 flash-old-prices"> <?php echo e(float_amount_with_currency_symbol(calculatePrice($deleted_price, $product))); ?> </span>
                        </div>
                    </div>
                </div>
                <div class="global-card-left mt-2">
                    <a href="#1" class="stock-available color-stock <?php echo e($stock_count ?: "text-danger"); ?>"> <?php echo e($stock_count ? "Stock Available($stock_count)" : "Out of stock"); ?> </a>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\Modules/Product\Resources/views/components/frontend/card-style-01.blade.php ENDPATH**/ ?>