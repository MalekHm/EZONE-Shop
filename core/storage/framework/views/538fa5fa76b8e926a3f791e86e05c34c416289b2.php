<a tabindex="0" class="btn btn-success btn-xs mr-1 swal_status_change">

    <i class="las la-sync"></i>
</a>
<form method='post' action='<?php echo e($url); ?>' class="d-none">
    <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
    <br>
    <button type="submit" class="swal_form_submit_btn d-none"></button>
</form>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\status-change.blade.php ENDPATH**/ ?>