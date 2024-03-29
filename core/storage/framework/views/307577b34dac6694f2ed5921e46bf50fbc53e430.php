<!-- Trending Porduct end -->
<!-- All Porduct start -->
<section class="allProduct__area padding-top-50 padding-bottom-50">
    <div class="container container_1608">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-left section_borderBottom">
                    <div class="allProduct__tab">
                        <ul class="tabs tabs_two">
                            <li data-tab-two="top_rated" class="vendor_search_tab tabs_list_two"><?php echo e(__("Top Rated")); ?></li>
                            <li data-tab-two="top_selling" class="vendor_search_tab tabs_list_two"><?php echo e(__("Top Selling")); ?></li>
                            <li data-tab-two="weekly_top" class="vendor_search_tab tabs_list_two"><?php echo e(__("Weekly Top")); ?></li>
                        </ul>
                    </div>
                    <div class="btn_wrapper">
                        <a href="<?php echo e(route('frontend.vendors')); ?>" class="viewAll_btn"><?php echo e(__("View All")); ?>

                            <i class="las la-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="" id="all_vendor_list">
            <div class="row g-4 mt-4">
                <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'vendor::components.style-one','data' => ['vendor' => $vendor]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('vendor::style-one'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['vendor' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vendor)]); ?>
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
</section>
<!-- All Porduct end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/vendor/vendor-style-one.blade.php ENDPATH**/ ?>