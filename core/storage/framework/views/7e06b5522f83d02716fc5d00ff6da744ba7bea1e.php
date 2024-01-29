<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Navbar Category Dropdown Settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.niceselect.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('niceselect.css'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('general-settings-navbar-category-dropdown')): ?>
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
                            <h4 class="dashboard__card__title mb-4"><?php echo e(__('Navbar Category Dropdown Settings')); ?></h4>
                        </div>
                        <div class="dashboard__card__body custom__form mt-4">
                            <form action="<?php echo e(route('admin.general.navbar.category.dropdown')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="product_id"><?php echo e(__('Select Categories')); ?></label>
                                            <select id="product_id" name="navbar_categories[]" class="form-control wide"
                                                multiple>
                                                <?php $selected_category_ids = array_keys($navbar_categories); ?>
                                                <?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($category->id); ?>"
                                                        <?php if(in_array($category->id, $selected_category_ids)): ?> selected <?php endif; ?>>
                                                        <?php echo e($category->title); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <br>
                                            <span
                                                class="d-block"><?php echo e(__('Save settings after selecting category to find more setting options')); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if($navbar_categories): ?>
                                            <h5 class="mb-4"><?php echo e(__('Selected category options')); ?></h5>
                                            <div id="accordion">
                                                <?php $__currentLoopData = $navbar_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category_id => $navbar_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="card">
                                                        <div class="card-header" id="heading_<?php echo e($category_id); ?>">
                                                            <h5 class="mb-0">
                                                                <button type="button" class="btn btn-link"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse_<?php echo e($category_id); ?>"
                                                                    aria-expanded="<?php if($loop->first): ?> true <?php endif; ?>"
                                                                    aria-controls="collapse_<?php echo e($category_id); ?>">
                                                                    <?php echo e($all_categories->where('id', $category_id)->first()->title ?? ''); ?>

                                                                </button>
                                                            </h5>
                                                        </div>

                                                        <div id="collapse_<?php echo e($category_id); ?>"
                                                            class="collapse <?php if($loop->first): ?> show <?php endif; ?>"
                                                            aria-labelledby="heading_<?php echo e($category_id); ?>"
                                                            data-parent="#accordion">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="navbar_sub_categories_<?php echo e($category_id); ?>"><?php echo e(__('Select Subcategory')); ?></label>
                                                                            <?php
                                                                                $subcategories = $all_sub_categories->where('category_id', $category_id);
                                                                                $selected_sub_category_arr = !empty($navbar_category['subcategories']) ? $navbar_category['subcategories'] : [];
                                                                            ?>
                                                                            <select class="form-control wide"
                                                                                name="navbar_sub_categories[<?php echo e($category_id); ?>][]"
                                                                                id="navbar_sub_categories_<?php echo e($category_id); ?>"
                                                                                multiple>
                                                                                <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="<?php echo e($subcategory->id); ?>"
                                                                                        <?php if(in_array($subcategory->id, $selected_sub_category_arr)): ?> selected <?php endif; ?>>
                                                                                        <?php echo e($subcategory->title); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="navbar_sub_category_styles_<?php echo e($category_id); ?>"><?php echo e(__('Select Dropdown Style')); ?></label>
                                                                            <select class="form-control"
                                                                                name="navbar_sub_category_styles[<?php echo e($category_id); ?>]"
                                                                                id="navbar_sub_category_styles_<?php echo e($category_id); ?>">
                                                                                <?php $selected_style = !empty($navbar_category['style']) ? $navbar_category['style'] : ''; ?>
                                                                                <option value="list"
                                                                                    <?php if('list' == $selected_style): ?> selected <?php endif; ?>>
                                                                                    <?php echo e(__('List')); ?></option>
                                                                                <option value="thumbnail"
                                                                                    <?php if('thumbnail' == $selected_style): ?> selected <?php endif; ?>>
                                                                                    <?php echo e(__('Thumbnail')); ?></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <button type="submit" id="update"
                                    class="cmn_btn btn_bg_profile"><?php echo e(__('Update Changes')); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.niceselect.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('niceselect.js'); ?>
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
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $(document).on('click', '#update', function() {
                    $(this).addClass("disabled")
                    $(this).html('<i class="fas fa-spinner fa-spin mr-1"></i> <?php echo e(__('Updating')); ?>');
                });

                if ($('.nice-select').length > 0) {
                    $('.nice-select').niceSelect();
                }
            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\general-settings\navbar-category-dropdown.blade.php ENDPATH**/ ?>