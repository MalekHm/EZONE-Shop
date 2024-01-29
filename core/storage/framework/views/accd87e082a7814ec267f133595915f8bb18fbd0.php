<!-- Flash Sale area Starts -->
<section class="flashSale_area padding-top-100 padding-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left">
                    <h2 class="title"><?php echo e($section_title); ?></h2>
                    <div class="flashSale_countdown">
                        <span class="flashSale_countdown__para"><?php echo e(__("On Ending in")); ?></span>
                        <div class="loopCounter_flash loopCounter_global" data-date="<?php echo e($campaign->end_date?->format("Y-m-d h:i:s")); ?>">
                            <div class="loopCounter_global__item"><span class="counter-days"></span> <?php echo e(__("D")); ?></div>
                            <div class="loopCounter_global__item"><span class="counter-hours"></span> <?php echo e(__("H")); ?></div>
                            <div class="loopCounter_global__item"><span class="counter-minutes"></span> <?php echo e(__("M")); ?></div>
                            <div class="loopCounter_global__item"><span class="counter-seconds"></span> <?php echo e(__("S")); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 row-cols-xl-6 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-vxxs-2 row-cols-1 mt-4">
            <?php $__currentLoopData = $campaign->product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'product::components.frontend.campaign-grid-style-02','data' => ['product' => $product,'loop' => $loop]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product::frontend.campaign-grid-style-02'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product),'loop' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loop)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="row">
            <div class="col">
                <div class="btn-wrapper center-text mt-4 mt-lg-5">
                    <a href="<?php echo e(route("frontend.products.campaign", $campaign->slug)); ?>" class="cmn-btn btn-outline-5 btn-small color-five radius-0"><?php echo e(__("Explore More")); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Flash Sale area end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/campaign/campaign-style-one.blade.php ENDPATH**/ ?>