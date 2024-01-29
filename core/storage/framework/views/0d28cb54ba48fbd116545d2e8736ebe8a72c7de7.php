<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Update Script')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-12">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('Update Script')); ?></h4>
                    </div>
                    <div class="dashboard__card__body mt-4">
                        <p class="info-text">
                            <?php echo e(__('you can check script update from here and able update the script from here.')); ?></p>
                        <div class="progress-msg-show"></div>
                        <button type="submit" class="cmn_btn btn_bg_profile"
                            id="check_update_status"><?php echo e(__('Check Update')); ?></button>
                        <button type="submit" class="cmn_btn btn_bg_profile"
                            id="run_the_update_now"><?php echo e(__('Run Update')); ?></button>

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
                //check update status

                $(document).on('click', '#check_update_status', function(e) {
                    e.preventDefault();
                    alert('update checking');
                });

                $(document).on('click', '#run_the_update_now', function(e) {
                    e.preventDefault();
                    alert('run the update now');
                });
            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\general-settings\update-script.blade.php ENDPATH**/ ?>