<script>
    $('.icp-dd').iconpicker();
    $('.icp-dd').on('iconpickerSelected', function(e) {
        var selectedIcon = e.iconpickerValue;
        $(this).parent().parent().children('input').val(selectedIcon);
    });

    $('.icp-dd').iconpicker();
    $('body').on('iconpickerSelected', '.icp-dd', function(e) {
        var selectedIcon = e.iconpickerValue;
        $(this).parent().parent().children('input').val(selectedIcon);
        $('body .dropdown-menu.iconpicker-container').removeClass('show');
    });
</script><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\backend\icon-picker-js.blade.php ENDPATH**/ ?>