<a tabindex="0" class="btn btn-success btn-xs mb-2 me-1 swal_change_approve_payment_button">
    <i class="ti-check"></i>
</a>
<form method='post' action='<?php echo e($url); ?>' class="d-none">
    <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
    <br>
    <button type="submit" class="swal_form_submit_btn d-none"></button>
</form>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\payment-accept.blade.php ENDPATH**/ ?>