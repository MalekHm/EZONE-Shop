<div class="single-input mb-3">
    <label class="label-title"><?php echo e($title ?? ''); ?></label>
    <input type="<?php echo e($type ?? ''); ?>" name="<?php echo e($name ?? ''); ?>" id="<?php echo e($id ?? ''); ?>" class="<?php echo e($class ?? 'form-control'); ?>" placeholder="<?php echo e($placeholder ?? ''); ?>">
    <div class="toggle-password">
        <span class="show-icon"><i class="fa-solid fa-eye-slash"></i></span>
        <span class="hide-icon"><i class="fa-solid fa-eye"></i></span>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\form\password.blade.php ENDPATH**/ ?>