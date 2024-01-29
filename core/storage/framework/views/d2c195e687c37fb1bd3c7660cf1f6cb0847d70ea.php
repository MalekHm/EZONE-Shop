<div class="form-group">
    <?php
        $value = $value ?? get_static_option($name);
    ?>
    <label class="d-block"><?php echo e($title); ?></label>
    <div class="btn-group ">
        <button type="button" class="btn btn-primary iconpicker-component">
            <i class="<?php echo e($value); ?>"></i>
        </button>
        <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                data-selected="<?php echo e($value); ?>" data-bs-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only"><?php echo e(__("Toggle Dropdown")); ?></span>
        </button>
        <div class="dropdown-menu"></div>
    </div>
    <input type="hidden" class="form-control" value="<?php echo e($value); ?>" name="<?php echo e($name); ?>">
</div><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\fields\icon-picker.blade.php ENDPATH**/ ?>