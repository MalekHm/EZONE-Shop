<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/codemirror.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/show-hint.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Custom Js')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-12">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <div class="dashboard__card__header__left">
                            <h4 class="dashboard__card__title"><?php echo e(__('Custom Js')); ?></h4>
                            <p class="dashboard__card__para mt-2">
                                <?php echo e(__('you can only add js code here. no other code work here.')); ?></p>
                        </div>
                    </div>
                    <div class="dashboard__card__body custom__form mt-4">
                        <form action="<?php echo e(route('admin.general.custom.js')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <textarea name="custom_js_area" id="custom_js_area" cols="30" rows="10"><?php echo e($custom_js); ?></textarea>
                            </div>
                            <div class="form-group">
                                <button id="update" type="submit"
                                    class="cmn_btn btn_bg_profile"><?php echo e(__('Update Changes')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/codemirror.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/javascript.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/show-hint.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/javascript-hint.js')); ?>"></script>
    <script>
        (function($) {
            "use strict"; <
            x - btn.update / >
                var editor = CodeMirror.fromTextArea(document.getElementById("custom_js_area"), {
                    lineNumbers: true,
                    mode: "text/javascript",
                    matchBrackets: true
                });
        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\general-settings\custom-js.blade.php ENDPATH**/ ?>