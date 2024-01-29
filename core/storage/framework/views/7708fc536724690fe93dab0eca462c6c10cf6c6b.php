$(document).on('click','#custom',function () {
    $(this).addClass("disabled")
    $(this).html('<i class="fas fa-spinner fa-spin mr-1"></i> <?php echo e($title); ?>');
});<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\bnt\custom.blade.php ENDPATH**/ ?>