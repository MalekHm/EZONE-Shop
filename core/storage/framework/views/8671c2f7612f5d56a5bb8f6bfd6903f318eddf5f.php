<!-- Popular slider area starts -->
<div class="popular-slider-area">
    <div class="row">
        <?php
            $category_one = $categories->where("id",$category_one)->first();
            $category_two = $categories->where("id",$category_two)->first();
            $category_three = $categories->where("id",$category_three)->first();
        ?>

        <?php $__currentLoopData = [$category_one,$category_two,$category_three]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4">
                <div class="popular-sale-area padding-top-50 padding-bottom-50">
                    <div class="section-title text-left section-border-bottom">
                        <div class="title-left">
                            <h2 class="title"> <?php echo e($category->name ?? ''); ?> </h2>
                        </div>
                    </div>
                    <div class="popular-vertical-slider mt-5">
                        <div class="global-slick-init recent-slider nav-style-one nav-color-two slider-inner-margin" data-infinite="true" data-verticalSwiping="true" data-vertical="true" data-arrows="true" data-dots="false" data-slidesToShow="3" data-autoplay="true" data-autoplaySpeed="2000"
                             data-prevArrow='<div class="prev-icon"><i class="las la-arrow-left"></i></div>' data-nextArrow='<div class="next-icon"><i class="las la-arrow-right"></i></div>' data-responsive='[{"breakpoint": 1800,"settings": {"slidesToShow": 3}},{"breakpoint": 1400,"settings": {"slidesToShow": 3}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 768, "settings": {"slidesToShow": 3} }]'>
                            <?php $__currentLoopData = $category?->product?->take($item_count) ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'product::components.frontend.list-style-02','data' => ['loop' => $loop,'product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product::frontend.list-style-02'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['loop' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loop),'product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- Popular slider area end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/product/right-style-04.blade.php ENDPATH**/ ?>