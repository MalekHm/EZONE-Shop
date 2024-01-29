$('.icp-dd').iconpicker();
$('.icp-dd').on('iconpickerSelected', function (e) {
    var selectedIcon = e.iconpickerValue;
    $(this).parent().parent().children('input').val(selectedIcon);
});<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\icon-picker.blade.php ENDPATH**/ ?>