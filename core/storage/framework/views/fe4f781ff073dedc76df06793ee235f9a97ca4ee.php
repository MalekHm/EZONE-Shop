<!-- Deal area starts -->
<section class="deal-area padding-top-50 padding-bottom-50">
    <div class="deal-area-wrapper sidebar-wrapper single-border radius-10">
        <div class="row justify-content-center">
            <div class="col-xxl-12 col-lg-6">
                <div class="deal-wrapper center-text">
                    <h3 class="sidebar-title fw-500 mb-4"> <?php echo e($section_title ?? "Deal of the Week!"); ?> </h3>
                    <div class="global-slick-init flash-store-sliders nav-style-two nav-color-two dot-style-one dot-color-two" data-infinite="true" data-arrows="true" data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500" data-prevArrow='<div class="prev-icon"><i class="las la-arrow-left"></i></div>'
                         data-nextArrow='<div class="next-icon"><i class="las la-arrow-right"></i></div>' data-responsive='[{"breakpoint": 992,"settings": {"arrows": false,"dots": true}},{"breakpoint": 768, "settings": { "arrows": false,"dots": true} }]'>
                        <?php $__currentLoopData = $campaign?->product ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'product::components.frontend.card-style-01','data' => ['product' => $product,'campaign' => $campaign]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product::frontend.card-style-01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product),'campaign' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($campaign)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="sidebar-countdown-area single-border-top center-text mt-4 pt-4 flash-countdown justify-content-center">
                        <div class="loopCounter_flash loopCounter_global m-auto" data-date="<?php echo e($campaign->end_date?->format("Y-m-d h:i:s")); ?>">
                            <div class="loopCounter_global__item"><span class="counter-days"></span> <?php echo e(__("D")); ?></div>
                            <div class="loopCounter_global__item"><span class="counter-hours"></span> <?php echo e(__("H")); ?></div>
                            <div class="loopCounter_global__item"><span class="counter-minutes"></span> <?php echo e(__("M")); ?></div>
                            <div class="loopCounter_global__item"><span class="counter-seconds"></span> <?php echo e(__("S")); ?></div>
                        </div>
                        <span class="side-offer color-light d-block mt-2"> <?php echo e(__("Remains until end of the offer")); ?> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Deal area end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/campaign/style-01.blade.php ENDPATH**/ ?>