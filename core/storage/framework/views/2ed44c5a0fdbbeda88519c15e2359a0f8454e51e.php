<?php
    $productPageSlug = \App\Page::select('slug')
        ->where('id', get_static_option('product_page'))
        ->first();
?>

<!-- All Product area Starts -->
<section class="allProduct_area padding-top-50 padding-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left">
                    <h2 class="title"><?php echo e($section_title); ?></h2>
                    <a href="<?php echo e(route('frontend.dynamic.page', $productPageSlug->slug)); ?>"
                        class="browseAl"><?php echo e(__('Browse All')); ?></a>
                </div>
            </div>
        </div>
        <div class="row g-4 row-cols-xl-6 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-vxxs-2 row-cols-1 mt-4">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $campaign_product = $product->campaign_product ?? null;
                    $campaignProductEndDate = $product->campaign->end_date ?? ($product->campaign->end_date->end_date ?? '');
                    $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $product->sale_price;
                    $deleted_price = !is_null($campaign_product) ? $product->sale_price : $product->price;
                    $campaign_percentage = !is_null($campaign_product) ? getPercentage($product->sale_price, $sale_price) : false;
                    $campaignSoldCount = $product?->campaign_sold_product;
                    $stock_count = $campaign_product ? $campaign_product->units_for_sale - optional($campaignSoldCount)->sold_count ?? 0 : optional($product->inventory)->stock_count;
                    $stock_count = $stock_count > 0 ? $stock_count : 0;
                    $rating_width = round(($product->ratings_avg_rating ?? 0) * 20);
                    $campaign_percentage = round($campaign_percentage, 0);
                ?>
                <div class="col wow fadeInUp" data-wow-delay=".<?php echo e($loop->iteration); ?>s">
                    <div class="product_card">
                        <div class="product_card__thumb">
                            <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>"
                                class="product_card__thumb__bgImg"
                                style="<?php echo e(render_image($product->image, render_type: 'bg')); ?>">
                            </a>
                            <?php if($campaign_percentage > 0): ?>
                                <div class="product_card__thumb__percent">
                                    <span class="percent-box">-<?php echo e($campaign_percentage); ?>%</span>
                                </div>
                            <?php endif; ?>
                            <ul class="product_card__thumb__icons hover-color-one">
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
                        <div class="product_card__contents">
                            <h5 class="product_card__title">
                                <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>">
                                    <?php echo e($product->name); ?>

                                </a>
                            </h5>
                            <h4 class="product_card__price mt-2">
                                <?php echo e(float_amount_with_currency_symbol(calculatePrice($sale_price, $product))); ?>

                                <s><?php echo e(float_amount_with_currency_symbol(calculatePrice($deleted_price, $product))); ?></s>
                            </h4>

                            <div class="rating-wrap mt-2">
                                <div class="rating-wrap">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'product::components.frontend.common.rating-markup','data' => ['ratingCount' => $product->ratings_count,'avgRattings' => $product->ratings_avg_rating ?? 0]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product::frontend.common.rating-markup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rating-count' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->ratings_count),'avg-rattings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->ratings_avg_rating ?? 0)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- All Product area end -->
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/product/product-style-five.blade.php ENDPATH**/ ?>