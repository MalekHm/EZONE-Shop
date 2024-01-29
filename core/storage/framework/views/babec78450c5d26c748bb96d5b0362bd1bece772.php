<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Payment Details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('Payment Details')); ?></h4>
                        <a href="<?php echo e(route('admin.payment.logs')); ?>"
                            class="cmn_btn btn_bg_profile"><?php echo e(__('All Payments Log')); ?></a>
                    </div>
                    <div class="dashboard__card__body mt-4">
                        <div class="booking-details-info">
                            <ul>
                                <li><strong><?php echo e(__('Order ID')); ?></strong> : #<?php echo e($payment_log->order_id); ?></li>
                                <li><strong><?php echo e(__('Name')); ?></strong> : <?php echo e($payment_log->name); ?></li>
                                <li><strong><?php echo e(__('Email')); ?></strong> : <?php echo e($payment_log->email); ?></li>
                                <li><strong><?php echo e(__('Package Name')); ?></strong> :
                                    <?php echo e(purify_html($payment_log->package_name)); ?></li>
                                <li><strong><?php echo e(__('Package Price')); ?></strong> : <?php echo e($payment_log->package_price); ?></li>
                                <li><strong><?php echo e(__('Payment Gateway')); ?></strong> :
                                    <?php echo e(str_replace('_', ' ', $payment_log->package_gateway)); ?></li>
                                <li><strong><?php echo e(__('Payment Status')); ?></strong> : <?php echo e($payment_log->status); ?></li>
                                <li><strong><?php echo e(__('Transaction ID')); ?></strong> : <?php echo e($payment_log->transaction_id); ?></li>
                                <li><strong><?php echo e(__('Date')); ?></strong> : <?php echo e($payment_log->status); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\payment-logs\payment-log-view.blade.php ENDPATH**/ ?>