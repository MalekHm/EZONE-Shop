
<?php if(Session::has('success')): ?>
  Swal.fire({
  icon: 'success',
  title: 'Great!',
  text: '<?php echo e(Session::get("success")); ?>'
})
<?php endif; ?>
<?php if(Session::has('success')): ?>
<script>
    $.toast({
        heading: 'Success',
        text: '<?php echo e(session("success")); ?>',
        position: 'top-right',
        loaderBg:'#ff5050',
        bgColor: '#0abf53',
        icon: 'success',
        hideAfter: 5000,
        stack: 6
    });
</script>
<?php endif; ?>
<?php if(Session::has('error')): ?>
<script>
    $.toast({
        heading: 'Error',
        text: '<?php echo e(session("error")); ?>',
        position: 'top-right',
        loaderBg:'#ff5050',
        bgColor: '#e6294b',
        icon: 'error',
        hideAfter: 6000,
        stack: 6
    });
</script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\toastr-msg.blade.php ENDPATH**/ ?>