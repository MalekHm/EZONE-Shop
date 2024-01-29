<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Shop Page Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page-settings-shop-page')): ?>
        <div class="col-lg-12 col-ml-12">
            <div class="row">
                <div class="col-lg-12">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.msg.success','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('msg.success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.msg.error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('msg.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <div class="dashboard__card">
                        <div class="dashboard__card__header">
                            <h4 class="dashboard__card__title"><?php echo e(__('Shop Page Settings')); ?></h4>
                        </div>
                        <div class="dashboard__card__body custom__form mt-4">
                            <form action="<?php echo e(route('admin.page.settings.shop.page')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row g-4">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label
                                                for="default_item_count"><?php echo e(__('Number of Products to show by default')); ?></label>
                                            <input type="text" name="default_item_count" class="form-control"
                                                value="<?php echo e(get_static_option('default_item_count')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="shop_column_count"><?php echo e(__('Number of Columns')); ?></label>
                                            <input type="text" name="shop_column_count" class="form-control"
                                                value="<?php echo e(get_static_option('shop_column_count')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-col">
                                            <label for="sidebar_visibility"><?php echo e(__('Sidebar Visibility')); ?></label>
                                            <label class="switch">
                                                <input type="checkbox" id="sidebar_visibility" name="sidebar_visibility"
                                                    <?php if(!empty(get_static_option('sidebar_visibility'))): ?> checked <?php endif; ?>>
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="sidebar_position"><?php echo e(__('Sidebar Position')); ?></label>
                                            <?php $sidebar_position = get_static_option('sidebar_position'); ?>
                                            <select name="sidebar_position" id="sidebar_position" class="form-control">
                                                <option value="right" <?php if($sidebar_position == 'right'): ?> selected <?php endif; ?>>
                                                    <?php echo e(__('Right')); ?></option>
                                                <option value="left" <?php if($sidebar_position == 'left'): ?> selected <?php endif; ?>>
                                                    <?php echo e(__('Left')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4 mt-2">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="shop_product_search"><?php echo e(__('Search Product')); ?></label>
                                            <label class="switch">
                                                <input type="checkbox" id="shop_product_search" name="shop_product_search"
                                                    <?php if(!empty(get_static_option('shop_product_search'))): ?> checked <?php endif; ?>>
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label
                                                for="shop_filter_by_average_rating"><?php echo e(__('Filter by average rating')); ?></label>
                                            <label class="switch">
                                                <input type="checkbox" id="shop_filter_by_average_rating"
                                                    name="shop_filter_by_average_rating"
                                                    <?php if(!empty(get_static_option('shop_filter_by_average_rating'))): ?> checked <?php endif; ?>>
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="shop_filter_by_category"><?php echo e(__('Filter by category')); ?></label>
                                            <label class="switch">
                                                <input type="checkbox" id="shop_filter_by_category"
                                                    name="shop_filter_by_category"
                                                    <?php if(!empty(get_static_option('shop_filter_by_category'))): ?> checked <?php endif; ?>>
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="shop_filter_by_price"><?php echo e(__('Filter by price')); ?></label>
                                            <label class="switch">
                                                <input type="checkbox" id="shop_filter_by_price" name="shop_filter_by_price"
                                                    <?php if(!empty(get_static_option('shop_filter_by_price'))): ?> checked <?php endif; ?>>
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="shop_filter_by_tags"><?php echo e(__('Filter by tags')); ?></label>
                                            <label class="switch">
                                                <input type="checkbox" id="shop_filter_by_tags" name="shop_filter_by_tags"
                                                    <?php if(!empty(get_static_option('shop_filter_by_tags'))): ?> checked <?php endif; ?>>
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper mt-4">
                                    <button class="cmn_btn btn_bg_profile"><?php echo e(__('Save Settings')); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\settings\shopPage.blade.php ENDPATH**/ ?>