<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type') ? session('type') : 'success'); ?>">
        <?php echo Purifier::clean(session('msg')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views/components/msg/success.blade.php ENDPATH**/ ?>