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
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        body {
            background-color: #eeeeee;
            font-family: 'Open Sans', serif
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.10rem
        }

        .card-header:first-child {
            border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1)
        }

        .track {
            position: relative;
            background-color: unset;
            height: 5px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 50px;
            height: auto;
        }

        .track .step {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            width: 25%;
            margin-top: -13px;
            text-align: center;
            position: relative
        }

        .track .step.active:before {
            background: #FF5722
        }

        .track .step::before {
            height: 5px;
            position: absolute;
            content: "";
            width: 100%;
            left: 0;
            top: 13px;
            background-color: #ddd;
        }

        .track .step.active .icon {
            background: #ee5435;
            color: #fff
        }

        .track .icon {
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            position: relative;
            border-radius: 100%;
            background: #ddd
        }

        .track .step.active .text {
            font-weight: 400;
            color: #000
        }

        .track .text {
            display: block;
            margin-top: 7px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .itemside .aside {
            position: relative;
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .img-sm {
            width: 80px;
            height: 80px;
            padding: 7px
        }

        ul.row,
        ul.row-sm {
            list-style: none;
            padding: 0
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .itemside .title {
            display: block;
            margin-bottom: 5px;
            color: #212529
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .btn-warning {
            color: #ffffff;
            background-color: #ee5435;
            border-color: #ee5435;
            border-radius: 1px
        }

        .btn-warning:hover {
            color: #ffffff;
            background-color: #ff2b00;
            border-color: #ff2b00;
            border-radius: 1px
        }

        .stepDetails {
            /*display: none;*/
            visibility: hidden;
            opacity: 0;
            transition: all .3s;
            height: 0;
        }

        .stepDetails.show {
            /*display: block;*/
            visibility: visible;
            opacity: 1;
            height: auto;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php
    $order = $request->order;
?>

<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Request View')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
    <div class="dashboard__card">
        <div class="dashboard__card__header">
            <h3 class="dashboard__card__title"><?php echo e(__('Request Details')); ?></h3>
        </div>
        <div class="dashboard__card__body mt-4">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="dashboard__card card__two">
                        <div class="dashboard__card__header">
                            <h4 class="dashboard__card__title"><?php echo e(__('Orders Details')); ?></h4>
                        </div>
                        <div class="dashboard__card__body">
                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Order ID')); ?></span>
                                <p class="orderRequest__item__right">#<?php echo e($order->id); ?></p>
                            </div>
                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Transaction ID')); ?></span>
                                <p class="orderRequest__item__right"><?php echo e($order->transaction_id); ?></p>
                            </div>
                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Payment Gateway')); ?></span>
                                <p class="orderRequest__item__right">
                                    <?php echo e(ucwords(str_replace(['_', '-'], ' ', $order->payment_gateway))); ?></p>
                            </div>
                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Payment Status')); ?></span>
                                <p class="orderRequest__item__right"><?php echo e(str($order->order_status)->ucfirst()); ?></p>
                            </div>
                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Total Product')); ?></span>
                                <p class="orderRequest__item__right"><?php echo e($order->order_items_count); ?></p>
                            </div>
                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Items Total')); ?></span>
                                <p class="orderRequest__item__right">
                                    <?php echo e(float_amount_with_currency_symbol($order?->paymentMeta?->sub_total)); ?></p>
                            </div>
                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Discount Amount')); ?></span>
                                <p class="orderRequest__item__right">
                                    <?php echo e(float_amount_with_currency_symbol($order?->paymentMeta?->coupon_amount)); ?></p>
                            </div>
                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Shipping Cost')); ?></span>
                                <p class="orderRequest__item__right">
                                    <?php echo e(float_amount_with_currency_symbol($order?->paymentMeta?->shipping_cost)); ?></p>
                            </div>
                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Tax Amount')); ?></span>
                                <p class="orderRequest__item__right">
                                    <?php echo e(float_amount_with_currency_symbol($order?->paymentMeta?->tax_amount)); ?></p>
                            </div>
                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Total Amount')); ?></span>
                                <p class="orderRequest__item__right">
                                    <?php echo e(float_amount_with_currency_symbol($order?->paymentMeta?->total_amount)); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="dashboard__card card__two">
                        <div class="dashboard__card__header">
                            <h4 class="dashboard__card__title"><?php echo e(__('Refund Request Information')); ?></h4>
                        </div>
                        <div class="dashboard__card__body">
                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Request Id')); ?></span>
                                <p class="orderRequest__item__right"><?php echo e($request?->id); ?></p>
                            </div>

                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Additional info')); ?>: </span>
                                <p class="orderRequest__item__right"><?php echo e($request->additional_information); ?></p>
                            </div>

                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Preferred Option')); ?></span>
                                <p class="orderRequest__item__right"><?php echo e($request?->preferredOption?->name); ?></p>
                            </div>

                            <div class="orderRequest__item">
                                <span class="orderRequest__item__left"><?php echo e(__('Total Product')); ?></span>
                                <p class="orderRequest__item__right"><?php echo e($request->order?->order_items_count); ?></p>
                            </div>

                            <?php if(json_decode($request->preferred_option_fields)): ?>
                                <div class="orderRequest__item">
                                    <span class="orderRequest__item__left"><?php echo e($request?->preferredOption?->name); ?>: </span>
                                    <p class="orderRequest__item__right">
                                        <?php $__currentLoopData = json_decode($request->preferred_option_fields) ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span><?php echo e($key); ?>: </span><b><?php echo e($value); ?></b>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <div class="dashboard__card">
                        <div class="dashboard__card__header">
                            <h4 class="dashboard__card__title">
                                <?php echo e($request->order?->order_items_count > 1 ? __('Refund request Items') : __('Refund request Item')); ?>

                            </h4>
                        </div>
                        <div class="dashboard__card__body mt-4">
                            <div class="table-wrapper dashboard-table table-wrap">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('SL NO:')); ?></th>
                                            <th style="width: 60px"><?php echo e(__('Image')); ?></th>
                                            <th><?php echo e(__('Info')); ?></th>
                                            <th><?php echo e(__('QTY')); ?></th>
                                            <th><?php echo e(__('Price')); ?></th>
                                            <th><?php echo e(__('Total')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $request->requestProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $product = $request->products->find($item->product_id);
                                                $variant = $request->productVariant->find($item->variant_id);
                                            ?>

                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo render_image($product->image, class: 'w-100 h-100'); ?></td>
                                                <td>
                                                    <h6><?php echo e($product->name); ?></h6>
                                                    <?php if($variant): ?>
                                                        <p>
                                                            <?php if($variant->productColor): ?>
                                                                <?php echo e($variant->productColor->name); ?>,
                                                            <?php endif; ?>
                                                            <?php if($variant->productSize): ?>
                                                                <?php echo e($variant->productSize->name); ?>

                                                            <?php endif; ?>

                                                            <?php $__currentLoopData = $variant->attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                , <?php echo e($attr->attribute_name); ?>:
                                                                <?php echo e($attr->attribute_value); ?>

                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </p>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php echo e($item->quantity); ?>

                                                </td>
                                                <td><?php echo e(float_amount_with_currency_symbol($item->amount)); ?></td>
                                                <td><?php echo e(float_amount_with_currency_symbol($item->amount * $item->quantity)); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <div class="dashboard__card">
                        <div class="dashboard__card__header">
                            <h3 class="dashboard__card__title"><?php echo e(__('Request Track view')); ?></h3>
                        </div>
                        <div class="dashboard__card__body">
                            <div class="track">
                                <?php $__currentLoopData = $request->requestTrack; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $track): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $trackCondition = $track->reason->count() > 0 || $track->deductedAmount->count() > 0;
                                    ?>
                                    <div class="step active">
                                        <span class="icon">
                                            <i class="las la-check "></i>
                                        </span>
                                        <small class="text" style="<?php echo e($trackCondition ? 'font-weight: bold' : ''); ?>">
                                            <?php echo e(ucwords(str_replace(['-', '_'], ' ', $track->name))); ?>

                                            <?php if($trackCondition): ?>
                                                <i class="las la-question-circle <?php echo e($trackCondition ? 'stepText' : ''); ?>"
                                                    data-type="<?php echo e($trackCondition ? ($track->deductedAmount->count() > 0 ? 'deductedAmount' : 'reason') : ''); ?>"
                                                    data-collection="<?php echo e($trackCondition ? json_encode($track->deductedAmount?->count() > 0 ? $track->deductedAmount?->toArray() : $track->reason?->toArray()) : ''); ?>"
                                                    data-refund_fee="<?php echo e($request->refund_fee); ?>"></i>
                                            <?php endif; ?>
                                        </small>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="stepDetails">
                            </div>
                        </div>
                    </div>
                </div>
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

                $(document).on("click", ".stepText", function() {
                    let requestTrackJson = JSON.parse($(this).attr("data-collection"));
                    let requestTrackType = $(this).attr("data-type");
                    let refundFee = $(this).attr("data-refund_fee");
                    let requestTrackHTML = ``;
                    if (requestTrackType === 'deductedAmount') {
                        requestTrackHTML =
                            `<table class='table table-responsive'><thead><tr><th><?php echo e(__('Cause')); ?></th><th><?php echo e(__('Amount')); ?></th></tr></thead><tbody>`
                    }

                    Object.keys(requestTrackJson).forEach(function(key) {
                        let item = requestTrackJson[key] ?? [];

                        // hare need to check request track type
                        if (requestTrackType == 'reason') {
                            requestTrackHTML += `<p>${item.reason}</p>`;
                        } else if (requestTrackType == 'deductedAmount') {
                            requestTrackHTML += `
                        <tr>
                            <td>${item.reason}</td>
                            <td>${item.amount}</td>
                        </tr>
                    `;
                        }
                    });


                    if (requestTrackType === 'deductedAmount') {
                        requestTrackHTML += `
                        <tr>
                            <td><?php echo e(__('Refund fee')); ?></td>
                            <td>${refundFee}</td>
                        </tr>
                    `;
                        requestTrackHTML += `</tbody></table>`;
                    }

                    $('.stepDetails').toggleClass('show');
                    $('.stepDetails').html(requestTrackHTML);
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

<?php echo $__env->make('frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\frontend\user\dashboard\refund\view-request.blade.php ENDPATH**/ ?>