<?php $__env->startSection('content'); ?>

    <section class="breadcrumb-area breadcrumb-bg "
       <?php echo render_background_image_markup_by_attachment_id(get_static_option('site_breadcrumb_bg')); ?>

    >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title"><?php echo $__env->yieldContent('page-title'); ?></h1>
                        <ul class="page-list">
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
                            <li><?php echo $__env->yieldContent('page-title'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\pages\user\login.blade.php ENDPATH**/ ?>