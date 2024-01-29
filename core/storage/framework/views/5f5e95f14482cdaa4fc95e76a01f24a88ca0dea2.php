<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Blog Single Page Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-lg-12">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend.partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-lg-12">
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('Blog Single Page Settings')); ?></h4>
                    </div>
                    <div class="dashboard__card__body custom__form mt-4">
                        <form action="<?php echo e(route('admin.blog.single.settings')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row g-4">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label
                                            for="blog_single_pag_related_post_title"><?php echo e(__('Related Post Title')); ?></label>
                                        <input type="text" class="form-control" id="blog_single_page_related_post_title"
                                            value="<?php echo e(get_static_option('blog_single_page_related_post_title')); ?>"
                                            name="blog_single_page_related_post_title"
                                            placeholder="<?php echo e(__('Related Post Title')); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="blog_single_page_tags_title"><?php echo e(__('Tags Title')); ?></label>
                                        <input type="text" class="form-control" id="blog_single_page_tags_title"
                                            value="<?php echo e(get_static_option('blog_single_page_tags_title')); ?>"
                                            name="blog_single_page_tags_title" placeholder="<?php echo e(__('Tags Title')); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="blog_single_page_share_title"><?php echo e(__('Share Title')); ?></label>
                                        <input type="text" class="form-control" id="blog_single_page_share_title"
                                            value="<?php echo e(get_static_option('blog_single_page_share_title')); ?>"
                                            name="blog_single_page_share_title" placeholder="<?php echo e(__('Share Title')); ?>">
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

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\blog\page-settings\blog-single.blade.php ENDPATH**/ ?>