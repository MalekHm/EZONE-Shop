<?php $__env->startSection('style'); ?>
    <style>
        .customMarkup__tab ul {
            display: flex;
            align-items: center;
            gap: 12px 0;
            flex-wrap: wrap;
        }
        .customMarkup__tab ul li {
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            background-color: #d9d9d9;
            padding: 8px 15px;
            color: var(--heading-color);
            transition: all .2s;
        }
        .customMarkup__tab ul li.active {
            background-color: var(--customer-profile);
            color: #fff;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('site-title', __('All Templates')); ?>

<?php
    $routes = [
        [
            "route" => route("admin.email-template.refund.request-send"),
            "title" => "request Send",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-send'
        ],
        [
            "route" => route("admin.email-template.refund.request-approved"),
            "title" => "refund Request Approved",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-approve'
        ],
        [
            "route" => route("admin.email-template.refund.request-declined"),
            "title" => "refund Request Declined",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-declined'
        ],
        [
            "route" => route("admin.email-template.refund.request-cancel"),
            "title" => "refund Request cancel",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-cancel'
        ],
        [
            "route" => route("admin.email-template.refund.request-ready-for-pickup"),
            "title" => "refund Request Ready For Pickup",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-ready-for-pickup'
        ],
        [
            "route" => route("admin.email-template.refund.request-picked-up"),
            "title" => "refund Request PickedUp",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-picked-up'
        ],
        [
            "route" => route("admin.email-template.refund.request-on-the-way"),
            "title" => "refund Request On The Way",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-on-the-way'
        ],
        [
            "route" => route("admin.email-template.refund.request-returned"),
            "title" => "refund Request Returned",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-returned'
        ],
        [
            "route" => route("admin.email-template.refund.refund-request-verify-product"),
            "title" => "refund Request Verify Product",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-verify-product'
        ],
        [
            "route" => route("admin.email-template.refund.refund-request-payment-processing"),
            "title" => "refund Request Payment Processing",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-payment-processing'
        ],
        [
            "route" => route("admin.email-template.refund.refund-request-payment-transferred"),
            "title" => "refund Request Payment Transferred",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-payment-transferred'
        ],
        [
            "route" => route("admin.email-template.refund.refund-request-payment-completed"),
            "title" => "refund Request Payment Completed",
            "description" => __('This email will send when a new refund request created.'),
            "permission" => 'email-template-refund-request-payment-completed'
        ],
    ];

    $deliveryManRoutes = [
        [
            "route" => route("admin.email-template.delivery-man.assign-mail"),
            "title" => "Assign delivery man mail",
            "description" => __('This email will send when a delivery man is assigned.'),
            "permission" => 'email-template-delivery-man-assign-mail'
        ],
        [
            "route" => route("admin.email-template.delivery-man.assign-mail-to-user"),
            "title" => "Assign delivery man mail",
            "description" => __('This email will send when a delivery man is assigned.'),
            "permission" => 'email-template-delivery-man-assign-mail-to-user'
        ],
    ];
?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard__card">
                <div class="dashboard__card__header">
                    <h4 class="dashboard__card__title"><?php echo e(__("All Templates")); ?></h4>
                    <div class="customMarkup__tab">
                        <ul class="tabs">
                            <li data-tab="refund_mail" class="active"><?php echo e(__("Refund Mail")); ?></li>
                            <li data-tab="delivery_man_mail"><?php echo e(__("Delivery Man Mail")); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="dashboard__card__body mt-4">
                    <!-- Tab Start -->
                    <div class="tab-content-item active" id="refund_mail">
                        <div class="dashboard__card">
                            <div class="dashboard__card__header">
                                <h4 class="dashboard__card__title"><?php echo e(__("Refund Mail List")); ?></h4>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bulk-action.bulk-action','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bulk-action.bulk-action'); ?>
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
                            </div>
                            <div class="dashboard__card__body mt-4">
                                <div class="custom_table style-04 search_result">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'emailtemplate::components.tamplates.tamplate-table','data' => ['routes' => $routes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('emailtemplate::tamplates.tamplate-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['routes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($routes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content-item" id="delivery_man_mail">
                        <div class="dashboard__card">
                            <div class="dashboard__card__header">
                                <h4 class="dashboard__card__title"><?php echo e(__("Delivery Man Mail List")); ?></h4>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bulk-action.bulk-action','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bulk-action.bulk-action'); ?>
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
                            </div>
                            <div class="dashboard__card__body mt-4">
                                <div class="custom_table style-04 search_result">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'emailtemplate::components.tamplates.tamplate-table','data' => ['routes' => $deliveryManRoutes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('emailtemplate::tamplates.tamplate-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['routes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($deliveryManRoutes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab End -->
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\Modules/EmailTemplate\Resources/views/template/all-templates.blade.php ENDPATH**/ ?>