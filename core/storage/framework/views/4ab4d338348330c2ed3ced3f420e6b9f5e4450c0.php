<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/summernote-bs4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Email Template')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-12">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('Email Template')); ?></h4>
                    </div>
                    <div class="dashboard__card__body custom__form mt-4">
                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger"><?php echo e($error); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <form action="<?php echo e(route('admin.general.email.template')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row g-4">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_global_email"><?php echo e(__('Global Email')); ?></label>
                                        <input type="text" name="site_global_email" class="form-control"
                                            value="<?php echo e(get_static_option('site_global_email')); ?>" id="site_global_email">
                                        <small class="form-text text-muted">use your web mail here</small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_global_email_template"><?php echo e(__('Email Template')); ?></label>
                                        <input type="hidden" name="site_global_email_template" class="form-control"
                                            value="<?php echo e(get_static_option('site_global_email_template')); ?>"
                                            id="site_global_email_template">
                                        <div class="summernote"
                                            data-content='<?php echo e(get_static_option('site_global_email_template')); ?>'></div>
                                        <small class="form-text text-muted">@username
                                            <?php echo e(__('Will replace by username of user and')); ?> @company
                                            <?php echo e(__('will be replaced by site title also')); ?> @message
                                            <?php echo e(__('will be replaced by dynamically with message.')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit"
                                        class="cmn_btn btn_bg_profile"><?php echo e(__('Update Changes')); ?></button>
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
    <script src="<?php echo e(asset('assets/backend/js/summernote-bs4.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 150, //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                },
                callbacks: {
                    onChange: function(contents, $editable) {
                        $(this).prev('input').val(contents);
                    },
                    onPaste: function (e) {
                        let bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('text/plain');
                        e.preventDefault();
                        document.execCommand('insertText', false, bufferText);
                    }
                }
            });
            if ($('.summernote').length) {
                $('.summernote').each(function(index, value) {
                    $(this).summernote('code', $(this).data('content'));
                });
            }
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\general-settings\email-template.blade.php ENDPATH**/ ?>