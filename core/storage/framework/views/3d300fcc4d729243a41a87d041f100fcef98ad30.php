$(document).on('click','#search',function () {
    $(this).addClass("disabled")
    $(this).html('<i class="fas fa-spinner fa-spin mr-1"></i> <?php echo e(__("Searching..")); ?>');
});<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\btn\search.blade.php ENDPATH**/ ?>