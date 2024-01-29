<?php $__env->startSection('page-title'); ?>
<?php echo e(__('Change Password')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Change Password')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>

        <div class="parent my-5">
            <h2 class="title"><?php echo e(__('Change Password')); ?></h2>
            <form action="<?php echo e(route('tenant.user.password.change')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="old_password"><?php echo e(__('Old Password')); ?></label>
                    <input type="password" class="form-control" id="old_password" name="old_password"
                           placeholder="<?php echo e(__('Old Password')); ?>">
                </div>
                <div class="form-group">
                    <label for="password"><?php echo e(__('New Password')); ?></label>
                    <input type="password" class="form-control" id="password" name="password"
                           placeholder="<?php echo e(__('New Password')); ?>">
                </div>
                <div class="form-group">
                    <label for="password_confirmation"><?php echo e(__('Confirm Password')); ?></label>
                    <input type="password" class="form-control" id="password_confirmation"
                           name="password_confirmation" placeholder="<?php echo e(__('Confirm Password')); ?>">
                </div>
                <div class="btn-wrapper">
                    <button id="save" type="submit" class="btn-default boxed-btn"><?php echo e(__('Save changes')); ?></button>
                </div>
            </form>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.save','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.save'); ?>
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
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenant.frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\frontend\user-dashboard\dashboard\change-password.blade.php ENDPATH**/ ?>