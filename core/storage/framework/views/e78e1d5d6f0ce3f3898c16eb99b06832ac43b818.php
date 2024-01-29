<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.datatable.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('datatable.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('My Orders')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="dashboard__card">
        <div class="dashboard__card__header">
            <h4 class="dashboard__card__title"><?php echo e(__('My Orders')); ?></h4>
        </div>
        <div class="dashboard__card__body mt-4">
            <div class="table-wrap table-responsive all-user-campaign-table">
                <div class="order-history-inner text-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><?php echo e(__('Order')); ?></th>
                                <th><?php echo e(__('Date')); ?></th>
                                <th><?php echo e(__('Order Status')); ?></th>
                                <th><?php echo e(__('Payment Status')); ?></th>
                                <th><?php echo e(__('Amount')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $all_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="completed">
                                    <td class="order-numb">
                                        #<?php echo e($order->id); ?>

                                    </td>
                                    <td class="date">
                                        <?php echo e($order->created_at->format('F d, Y')); ?>

                                    </td>
                                    <td class="status">
                                        <?php if($order->order_status == 'complete' && $order->orderTrack?->first()->name == 'delivered'): ?>
                                            <span class="badge bg-success px-2 py-1"><?php echo e(__('Complete')); ?></span>
                                        <?php elseif($order->order_status == 'canceled'): ?>
                                            <span class="badge bg-danger px-2 py-1"><?php echo e(__('Canceled')); ?></span>
                                        <?php else: ?>
                                            <span class="badge bg-secondary px-2 py-1 text-capitalize"><?php echo e($order->orderTrack?->first()->name ?? "pending"); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="status">
                                        <?php if($order->payment_status == 'complete'): ?>
                                            <span class="badge bg-success px-2 py-1"><?php echo e(__('Complete')); ?></span>
                                        <?php elseif($order->payment_status == 'pending'): ?>
                                            <span class="badge bg-warning px-2 py-1"><?php echo e(__('Pending')); ?></span>
                                        <?php elseif($order->payment_status == 'canceled'): ?>
                                            <span class="badge bg-danger px-2 py-1"><?php echo e(__('Canceled')); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="amount">
                                        <?php echo e(float_amount_with_currency_symbol($order->paymentMeta->total_amount ?? 0)); ?>

                                    </td>
                                    <td class="table-btn">
                                        <div class="btn-wrapper d-flex flex-wrap gap-2">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders-generate-invoice')): ?>
                                                <a href="<?php echo e(route('admin.orders.generate.invoice', $order->id)); ?>"
                                                    class="btn btn-warning rounded-btn">
                                                    <i class="las la-file-invoice"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders-download-invoice')): ?>
                                                <a href="<?php echo e(route('admin.orders.download.invoice', $order->id)); ?>"
                                                    class="btn btn-warning rounded-btn">
                                                    <i class="las la-download"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders-update')): ?>
                                                <a href="<?php echo e(route('admin.orders.edit', $order->id)); ?>"
                                                    class="btn btn-primary rounded-btn">
                                                    <i class="las la-pen-nib"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders-details')): ?>
                                                <a href="<?php echo e(route('admin.orders.order.details', $order->id)); ?>"
                                                    class="btn btn-secondary rounded-btn">
                                                    <?php echo e(__('view details')); ?>

                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="pagination">
                <?php echo $all_orders->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/sweetalert2.js')); ?>"></script>

    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {

                $(document).on('click', '.bodyUser_overlay', function() {
                    $('.user-dashboard-wrapper, .bodyUser_overlay').removeClass('show');
                });
                $(document).on('click', '.mobile_nav', function() {
                    $('.user-dashboard-wrapper, .bodyUser_overlay').addClass('show');
                });

                $(document).on('click', '.swal_delete_button', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: '<?php echo e(__('Are you sure?')); ?>',
                        text: '<?php echo e(__('You would not be able to revert this item!')); ?>',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).next().find('.swal_form_submit_btn').trigger('click');
                        }
                    });
                });
            })
        })(jQuery)
    </script>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.datatable.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('datatable.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\Modules/Order\Resources/views/admin/order-list.blade.php ENDPATH**/ ?>