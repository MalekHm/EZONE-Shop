<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Price Plan Page Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-lg-12">
                <?php echo $__env->make('backend/partials/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('Price Plan Page Settings')); ?></h4>
                    </div>
                    <div class="dashboard__card__body custom__form mt-4">
                        <form action="<?php echo e(route('admin.price.plan.page.settings')); ?>" method="post"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="nav-item nav-link <?php if($key == 0): ?> active <?php endif; ?>"
                                            data-bs-toggle="tab" href="#nav-home-<?php echo e($lang->slug); ?>" role="tab"
                                            aria-selected="true"><?php echo e($lang->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>"
                                        id="nav-home-<?php echo e($lang->slug); ?>" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="form-group">
                                            <label
                                                for="price_plan_page_<?php echo e($lang->slug); ?>_section_title"><?php echo e(__('Section Title')); ?></label>
                                            <input type="text" name="price_plan_page_<?php echo e($lang->slug); ?>_section_title"
                                                value="<?php echo e(get_static_option('price_plan_page_' . $lang->slug . '_section_title')); ?>"
                                                class="form-control"
                                                id="price_plan_page_<?php echo e($lang->slug); ?>_section_title">
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="price_plan_page_<?php echo e($lang->slug); ?>_section_description"><?php echo e(__('Section Description')); ?></label>
                                            <textarea name="price_plan_page_<?php echo e($lang->slug); ?>_section_description" class="form-control max-height-150"
                                                id="price_plan_page_<?php echo e($lang->slug); ?>_section_description" cols="30" rows="10"><?php echo e(get_static_option('price_plan_page_' . $lang->slug . '_section_description')); ?></textarea>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="form-group">
                                <label for="price_plan_page_items"><?php echo e(__('Price Plan Page Items')); ?></label>
                                <input type="text" name="price_plan_page_items"
                                    value="<?php echo e(get_static_option('price_plan_page_items')); ?>" class="form-control"
                                    id="price_plan_page_items">
                                <small><?php echo e(__('enter how many plan you want to show in the price plan page')); ?></small>
                            </div>
                            <button type="submit" class="cmn_btn btn_bg_profile"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\pages\price-plan\price-plan-page-settings.blade.php ENDPATH**/ ?>