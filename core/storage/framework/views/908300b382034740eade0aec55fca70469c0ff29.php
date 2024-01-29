
<!-- Best Selling area Starts -->
<section class="bestSelling_area padding-top-50 padding-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left">
                    <h2 class="title"><?php echo e($section_title); ?></h2>

                    <div class="btn-wrapper">
                        <a href="<?php echo e(route("frontend.vendors")); ?>" class="cmn-btn btn-outline-5 btn-small color-five radius-0"><?php echo e(__("Explore More")); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 row-cols-xl-6 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-vxxs-2 row-cols-1 mt-4">
            <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col wow fadeInUp" data-wow-delay=".<?php echo e($loop->iteration); ?>s">
                    <div class="bestSelling_shop">
                        <div class="bestSelling_shop__thumb">
                            <a href="<?php echo e(route("frontend.vendors.single", $vendor->username)); ?>" class="bestSelling_shop__thumb__bgImg" style="<?php echo e(render_image($vendor->cover_photo, render_type: 'bg')); ?>">
                            </a>
                        </div>
                        <div class="bestSelling_shop__contents">
                            <div class="bestSelling_shop__brand">
                                <a href="<?php echo e(route("frontend.vendors.single", $vendor->username)); ?>">
                                    <?php echo render_image($vendor->logo); ?>

                                </a>
                            </div>
                            <h5 class="bestSelling_shop__title mt-1"> <a href="<?php echo e(route("frontend.vendors.single", $vendor->username)); ?>"><?php echo e($vendor->business_name); ?></a> </h5>
                            <div class="rating-wrap mt-2">
                                <div class="rating-wrap">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'product::components.frontend.common.rating-markup','data' => ['avgRattings' => $vendor->vendor_product_rating_avg_rating,'ratingCount' => $vendor->vendor_product_rating_count]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product::frontend.common.rating-markup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['avg-rattings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vendor->vendor_product_rating_avg_rating),'rating-count' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vendor->vendor_product_rating_count)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <div class="btn-wrapper mt-2">
                                <a href="<?php echo e(route("frontend.vendors.single", $vendor->username)); ?>" class="bestSelling_shop__btn"><?php echo e(__("Visit Store")); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- Best Selling area end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/shop/best-selling-shop.blade.php ENDPATH**/ ?>