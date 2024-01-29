<style>
    .alert-success {
        border-color: #f2f2f2;
        border-left: 5px solid #319a31;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-danger {
        border-color: #f2f2f2;
        border-left: 5px solid #c69500;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
</style>

<?php if($status === 0): ?>
    <span class="alert alert-danger" ><?php echo e(__('Inactive')); ?></span>
<?php elseif($status === 1): ?>
    <span class="alert alert-success" ><?php echo e(__('Active')); ?></span>
<?php elseif($status === 'complete'): ?>
    <span class="alert alert-success" ><?php echo e(__('Complete')); ?></span>
<?php elseif($status === 'close'): ?>
    <span class="alert alert-danger" ><?php echo e(__('Close')); ?></span>
<?php elseif($status === 'draft'): ?>
    <span class="alert alert-danger" ><?php echo e(__('Draft')); ?></span>
<?php elseif($status === 'in_progress'): ?>
    <span class="alert alert-info" ><?php echo e(__('In Progress')); ?></span>
<?php elseif($status === 'archive'): ?>
    <span class="alert alert-info" ><?php echo e(__('Archive')); ?></span>
<?php elseif($status === 'schedule'): ?>
    <span class="alert alert-warning" ><?php echo e(__('Schedule')); ?></span>
<?php elseif($status === 'publish'): ?>
    <span class="alert alert-success" ><?php echo e(__('Publish')); ?></span>
<?php elseif($status === 'confirm'): ?>
    <span class="alert alert-success" ><?php echo e(__('Confirm')); ?></span>
<?php elseif($status === 'yes'): ?>
    <span class="alert alert-success" ><?php echo e(__('Yes')); ?></span>
<?php elseif($status === 'no'): ?>
    <span class="alert alert-danger" ><?php echo e(__('No')); ?></span>
<?php elseif($status === 'cancel'): ?>
    <span class="alert alert-danger" ><?php echo e(__('Cancel')); ?></span>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views/components/status/table/active-inactive.blade.php ENDPATH**/ ?>