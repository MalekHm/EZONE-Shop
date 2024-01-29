<script>
    $(document).on("click", "#top-bar-notification-icon", function (){
        send_ajax_request("GET",null,"<?php echo e(route("update-notification")); ?>", () => {}, (data) => {
            $("#top-bar-notification-count").text(0);
        }, (errors) => {
            prepare_errors(errors)
        })
    });
</script><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\notification\js.blade.php ENDPATH**/ ?>