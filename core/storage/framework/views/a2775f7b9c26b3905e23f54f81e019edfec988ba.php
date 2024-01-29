<!-- Flash Sale Starts -->
<section class="flashSale__area padding-top-50 padding-bottom-50">
    <div class="container container_1608">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-left section_borderBottom">
                    <h2 class="title"><?php echo e($campaign->title ?? ''); ?></h2>
                    <div class="global__countdown">
                        <div class="flashCountdown" data-date="<?php echo e($campaign?->end_date ? $campaign->end_date->format('Y-m-d') ?? '' : ''); ?>">
                            <div class="global__countdown__item">
                                <span class="counter-days global__countdown__count radius-5"></span>
                                <span class="global__countdown__name"><?php echo e(__("D")); ?></span>
                            </div>
                            <div class="global__countdown__item">
                                <span class="counter-hours global__countdown__count radius-5"></span>
                                <span class="global__countdown__name"><?php echo e(__("H")); ?></span>
                            </div>
                            <div class="global__countdown__item">
                                <span class="counter-minutes global__countdown__count radius-5"></span>
                                <span class="global__countdown__name"><?php echo e(__("M")); ?></span>
                            </div>
                            <div class="global__countdown__item">
                                <span class="counter-seconds global__countdown__count radius-5"></span>
                                <span class="global__countdown__name"><?php echo e(__("S")); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-5 mt-1">
            <?php $__currentLoopData = $campaign->product ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'product::components.frontend.grid-style-05','data' => ['product' => $product,'class' => 'btn__black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product::frontend.grid-style-05'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product),'class' => 'btn__black']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- Flash Sale end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/campaign/campaign-style-two.blade.php ENDPATH**/ ?>