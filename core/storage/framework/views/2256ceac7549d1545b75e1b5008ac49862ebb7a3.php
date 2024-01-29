<script>
    $(document).on("click",".status-dropdown .dropdown-menu li",function (){
        let id = $(this).attr("data-id");
        let statusId = $(this).attr("data-status-id");

        let data = new FormData();
        data.append("id", id);
        data.append("status_id", statusId);
        data.append("_token", "<?php echo e(csrf_token()); ?>");

        send_ajax_request("post", data, '<?php echo e(route('admin.products.update.status')); ?>', function () {
            toastr.success("Request sent..");
        }, function (data) {
            ajax_toastr_success_message(data);
        }, function () {
            ajax_toastr_error_message(xhr);
        });
    })
</script><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\table\status-js.blade.php ENDPATH**/ ?>