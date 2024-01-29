<a tabindex="0" class="btn btn-danger btn-xs mb-2 me-1" role="button" data-bs-toggle="popover" data-trigger="focus"
    data-html="true" title=""
    data-content="
        <h6><?php echo e(__('Are you sure to delete this?')); ?></h6>
        <form method='post' action='<?php echo e($route); ?>'>
        <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
        <br>
        <input type='submit' class='btn btn-danger btn-xs' value='<?php echo e(__('Yes, Please')); ?>'>
        </form>
">
    <i class="ti-trash"></i>
</a>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\table\btn\delete.blade.php ENDPATH**/ ?>