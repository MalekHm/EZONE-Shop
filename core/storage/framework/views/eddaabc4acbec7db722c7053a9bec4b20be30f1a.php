<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('About Page Section Manage')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-lg-12">
                <?php echo $__env->make('backend/partials/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend/partials/error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-lg-12">
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('About Page Section Manage')); ?></h4>
                    </div>
                    <div class="dashboard__card__body custom__form mt-4">
                        <form action="<?php echo e(route('admin.about.page.section.manage')); ?>" method="post"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <?php
                                    $section_list = ['about_us'];
                                ?>
                                <?php $__currentLoopData = $section_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="about_page_<?php echo e($section); ?>_section_status"><strong><?php echo e(ucfirst(str_replace('_', ' ', $section))); ?>

                                                    <?php echo e(__('Section Show/Hide')); ?></strong></label>
                                            <label class="switch">
                                                <input type="checkbox" name="about_page_<?php echo e($section); ?>_section_status"
                                                    <?php if(!empty(get_static_option('about_page_' . $section . '_section_status'))): ?> checked <?php endif; ?>>
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <button id="update" type="submit"
                                class="cmn_btn btn_bg_profile"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        < x - btn.update / >
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\pages\about-page\section-manage.blade.php ENDPATH**/ ?>