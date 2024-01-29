<?php $__env->startSection("site-title", __("Notification list page")); ?>

<?php $__env->startSection("style"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <div class="card">
        <div class="card-header">
            <h2><?php echo e(__("Notifications")); ?></h2>
        </div>
        <div class="card-body">
            <?php
                $type = $type ?? 'admin';
            ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th><?php echo e(__("SL NO:")); ?></th>
                        <th><?php echo e(__("Message")); ?></th>
                    </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                // get model namespace and make a class
                                $namespace = new $notification->model();
                                $productName = '';


                                // this line will be executed when a notification type is product
                                if ($notification->type == 'product') {
                                    $productName = $namespace->select('id', 'name')->find($notification->model_id)?->name;
                                }

                                // this method will generate
                                $href = \App\Http\Services\NotificationService::generateUrl($type, $notification);
                            ?>

                            <tr>
                                <td>
                                    <?php echo e(($notifications->perPage() * ($notifications->currentPage() - 1)) + $loop->iteration); ?>

                                </td>
                                <td class="<?php echo e($notification->type == 'stock_out' ? 'bg bg-warning' : ''); ?>">
                                    <div class="notification-list-flex">
                                        <div class="notification-icon">
                                            <i class="las la-bell"></i>
                                        </div>

                                        <div class="notification-contents">
                                            <a class="list-title" href="<?php echo e($href); ?>">
                                                <?php echo str_replace(
                                                    ['{product_name}', '{vendor_text}'],
                                                    ["<b>$productName</b>", ''],
                                                    formatNotificationText(strip_tags($notification->message)),
                                                ); ?> </a>
                                            <span class="list-sub"> <?php echo e($notification->created_at->diffForHumans()); ?> </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <div class="pagination">
                    <?php echo e($notifications->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("backend.admin-master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\notification.blade.php ENDPATH**/ ?>