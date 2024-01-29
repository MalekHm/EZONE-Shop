<div class="form-group">
    <label for="icon" class="d-block"><?php echo e(__('Icon')); ?></label>
    <div class="btn-group ">
        <button type="button" class="btn btn-primary iconpicker-component">
            <i class="fas fa-exclamation-triangle"></i>
        </button>
        <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                data-selected="fas fa-exclamation-triangle" data-bs-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only"><?php echo e(__('Toggle Dropdown')); ?></span>
        </button>
        <div class="dropdown-menu"></div>
    </div>
    <input type="hidden" class="form-control" id="icon" value="fas fa-exclamation-triangle"
           name="icon">
</div><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\backend\icon-picker.blade.php ENDPATH**/ ?>