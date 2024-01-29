<?php $__env->startSection('site-title', __('Role list')); ?>

<?php $__env->startSection('style'); ?>
    <style>
        :root {
            --paragraph-color-one: #73777D;
            --bs-dropdown-item-padding-y: 0.25rem;
            --bs-dropdown-item-padding-x: 1rem;
            --bs-dropdown-header-color: #6c757d;
        }


        .simplePresentCart-one {
            padding: 30px 24px;
            border-radius: 16px;
        }

        .white-bg {
            background: white;
        }

        .mb-24 {
            margin-bottom: 24px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        .section-tittle-one .title {
            color: #151D26;
            font-family: "Poppins", sans-serif;
            text-transform: capitalize;
            font-size: 18px;
            font-weight: 600;
            line-height: 1.3;
            margin-bottom: 10px;
            display: inline-block;
            position: relative;
            z-index: 0;
        }

        .cmn-btn.style-3 {
            overflow: hidden;
            -webkit-transition: border-color 0.3s, background-color 0.3s;
            transition: border-color 0.3s, background-color 0.3s;
            -webkit-transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
            transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
        }

        .cmn-btn.style-7::after,
        .cmn-btn.style-5 span,
        .cmn-btn.style-5::before,
        .cmn-btn.style-5,
        .cmn-btn.style-3::after,
        .cmn-btn.style-3,
        .cmn-btn {
            padding: 7px 16px;
        }

        .cmn-btn {
            display: inline-block;
            min-width: 100px;
            margin-bottom: 10px;
            border: inherit;
            background: inherit;
            vertical-align: middle;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .border-style-solid {
            border-style: solid !important;
        }

        .border-1 {
            border-width: 1px !important;
        }

        .border-main-one {
            border-color: #696CFF !important;
            color: #696CFF;
        }

        .radius-16 {
            border-radius: 16px !important;
        }

        .btn-danger {
            background-color: #d22d3d !important;
            border-color: #d22d3d !important;
        }

        .custom-dataTable,
        .custom-dataTable * {
            font-size: 12px;
        }

        .custom-dropdown button {
            background: none;
            padding: 0;
            border: 0;
            font-size: 40px;
            color: #A1A5A8;
            line-height: 1;
        }

        .custom-dataTable,
        .custom-dataTable * {
            font-size: 12px;
        }

        .mb-10 {
            margin-bottom: 10px;
        }

        .custom-dataTable,
        .custom-dataTable * {
            font-size: 12px;
        }

        .dropdown-toggle {
            white-space: nowrap;
        }

        .custom-dataTable .custom-dropdown button>i {
            font-size: 30px !important;
            font-weight: 700;
            color: #333;
            border: 1px solid #e2e2e2e2;
            border-radius: 10px;
            line-height: 20px;
            padding: 2px 6px;
        }

        .dropdown-menu {
            border: 0;
            -webkit-box-shadow: 0 3px 12px rgba(45, 23, 191, 0.09);
            box-shadow: 0 3px 12px rgba(45, 23, 191, 0.09);
        }

        .custom-dataTable,
        .custom-dataTable * {
            font-size: 12px;
        }

        .swal_delete_button {
            cursor: pointer;
        }

        .dropdown-item {
            font-weight: 500;
            color: var(--paragraph-color-one);
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
            clear: both;
            font-weight: 400;
            color: var(--bs-dropdown-link-color);
            text-align: inherit;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }

        .dropdown-toggle::after {
            display: none;
        }


        .custom-dataTable,
        .custom-dataTable * {
            font-size: 12px;
        }

        .custom-dataTable td {
            font-size: 12px;
        }

        .table-responsive.custom-dataTable {}
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="bodyContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="dashboard__card simplePresentCart-one">
                        <!-- Title -->
                        <div class="dashboard__card__header">
                            <h3 class="dashboard__card__title"><?php echo e(__('Staff Roles')); ?></h3>
                            <a data-bs-toggle="modal" data-bs-target="#createNewRoles"
                                href="#1"class="cmn_btn btn_bg_profile" data-text="Create Role"
                                style="float:right"><span><?php echo e(__('Create Role')); ?> </span></a>
                        </div>
                        <div class="dashboard__card__body mt-4">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.error-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-msg'); ?>
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
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-msg'); ?>
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
                            <div class="table-wrap">
                                <div class="table-responsive custom-dataTable">
                                    <?php if($roles->isNotEmpty()): ?>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th><?php echo e(__('ID')); ?></th>
                                                    <th><?php echo e(__('Name')); ?></th>
                                                    <th><?php echo e(__('Action')); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td> <?php echo e($value->id); ?> </td>
                                                        <td> <?php echo e($value->name); ?> </td>
                                                        <td>
                                                            <?php if($value->name != 'Super Admin'): ?>
                                                                <div class="dropdown custom-dropdown mb-10">
                                                                    <button class="dropdown-toggle" type="button"
                                                                        id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="las la-ellipsis-h"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton1">
                                                                        <li>
                                                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.delete-popover','data' => ['type' => 'role','url' => route(
                                                                                    'admin.roles.destroy',
                                                                                    $value->id,
                                                                                )]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('delete-popover'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'role','url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route(
                                                                                    'admin.roles.destroy',
                                                                                    $value->id,
                                                                                ))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item edit_role"
                                                                                data-id="<?php echo e($value->id); ?>"
                                                                                data-name="<?php echo e($value->name); ?>"
                                                                                data-bs-toggle="modal" href="#0"
                                                                                data-action="<?php echo e(route('admin.roles.update', $value->id)); ?>"
                                                                                data-bs-target="#editRoles">
                                                                                <i class="ti-notepad"></i> Edit </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="<?php echo e(route('admin.roles.permissions', $value->id)); ?>">
                                                                                <i class="ti-lock"></i> Permissions </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            <?php else: ?>
                                                                <a href="#0" class="btn btn-xs btn-danger">Not
                                                                    Allowed</a>
                                                            <?php endif; ?>
                                                        </td>

                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>
                                    <?php else: ?>
                                        <span class="text-warning">You have no role yet.</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createNewRoles" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content custom__form">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('New Role')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo e(route('admin.roles.store')); ?>" method="post">
                    <div class="modal-body">

                        <?php echo csrf_field(); ?>
                        <div class="form-grup">
                            <label for="#"><?php echo e(__('Name')); ?></label>
                            <input type="text" name="name" class="form-control" placeholder="<?php echo e(__('Enter name')); ?>">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Save changes')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editRoles" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content custom__form">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Edit Role')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-grup">
                            <label for="#"><?php echo e(__('Name')); ?></label>
                            <input type="text" name="name" class="form-control" placeholder="<?php echo e(__('enter name')); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Save changes')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        (function($) {
            "use strict";

            $(document).on("click", ".edit_role", function(e) {
                e.preventDefault();

                let modalContainer = $("#editRoles");
                modalContainer.find("form").attr("action", $(this).data("action"));
                modalContainer.find("input[name='id']").val($(this).data("id"));
                modalContainer.find("input[name='name']").val($(this).data("name"));

            })
        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\Modules/RolePermission\Resources/views/admin-manage/roles/index.blade.php ENDPATH**/ ?>