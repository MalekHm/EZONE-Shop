<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Blog Page Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row g-4">
            <div class="col-lg-12">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend.partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('Blog Page Settings')); ?></h4>
                    </div>
                    <div class="dashboard__card__body custom__form mt-4">
                        <form action="<?php echo e(route('admin.blog.page.settings')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row g-4">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="blog_page_read_more_btn_text"><?php echo e(__('Blog Read More Text')); ?></label>
                                        <input type="text" class="form-control" id="blog_page_read_more_btn_text"
                                            name="blog_page_read_more_btn_text"
                                            value="<?php echo e(get_static_option('blog_page_read_more_btn_text')); ?>"
                                            placeholder="<?php echo e(__('Blog Read More Text')); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="blog_page_item"><?php echo e(__('Post Items')); ?></label>
                                        <input type="text" class="form-control" id="blog_page_item"
                                            value="<?php echo e(get_static_option('blog_page_item')); ?>" name="blog_page_item"
                                            placeholder="<?php echo e(__('Post Items')); ?>">
                                        <small
                                            class="text-danger"><?php echo e(__('Enter how many post you want to show in blog page')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button id="update" type="submit"
                                        class="cmn_btn btn_bg_profile"><?php echo e(__('Update Blog Page Settings')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                <
                x - btn.update / >
            });
        })(jQuery)
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\blog\page-settings\blog.blade.php ENDPATH**/ ?>