<div class="table-wrap table-responsive all-user-campaign-table">
    <div class="order-history-inner text-center">
        <table class="table">
            <thead>
            <tr>
                <th>
                    <?php echo e(__('Order')); ?>

                </th>
                <th>
                    <?php echo e(__('Date')); ?>

                </th>
                <th>
                    <?php echo e(__('Status')); ?>

                </th>
                <th>
                    <?php echo e(__('Amount')); ?>

                </th>
                <th>
                    <?php echo e(__('Action')); ?>

                </th>
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $allOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="completed">
                        <td class="order-numb">
                            #<?php echo e($order->id); ?>

                        </td>
                        <td class="date">
                            <?php echo e($order->created_at->format('F d, Y')); ?>

                        </td>
                        <td class="status">
                            <?php if($order->order_status == 'complete'): ?>
                                <span class="badge bg-success px-2 py-1"><?php echo e(__('Complete')); ?></span>
                            <?php elseif($order->order_status == 'pending'): ?>
                                <span class="badge bg-warning px-2 py-1"><?php echo e(__('Pending')); ?></span>
                            <?php elseif($order->order_status == 'canceled'): ?>
                                <span class="badge bg-danger px-2 py-1"><?php echo e(__('Canceled')); ?></span>
                            <?php endif; ?>
                        </td>
                        <td class="amount">
                            <?php echo e(float_amount_with_currency_symbol($order->paymentMeta?->total_amount)); ?>

                        </td>
                        <td class="table-btn">
                            <div class="btn-wrapper">
                                <?php if($order->is_delivered_count > 0): ?>
                                    <a href="<?php echo e(route('user.product.order.refund', $order->id)); ?>"
                                       class="btn btn-danger btn-sm rounded-btn">
                                        <?php echo e(__('Request refund')); ?></a>
                                <?php endif; ?>

                                <a href="<?php echo e(route('user.product.order.details', $order->id)); ?>"
                                   class="btn btn-secondary btn-sm rounded-btn"> <?php echo e(__('view details')); ?></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\user-orders-table.blade.php ENDPATH**/ ?>