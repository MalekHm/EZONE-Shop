<table class="table table-responsive">
    <thead>
    <tr>
        <th><?php echo e(__('SN')); ?></th>
        <th><?php echo e(__('Title')); ?></th>
        <th><?php echo e(__('Action')); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($route["permission"] ?? false): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($route["permission"])): ?>
                <tr>
                    <td><strong><?php echo e($loop->iteration); ?></strong></td>
                    <td>
                        <?php echo e($route["title"]); ?>

                        <p><small class="text-info"><?php echo e($route["description"]); ?></small></p>
                    </td>
                    <td><a href="<?php echo e($route["route"]); ?>" class="btn-profile btn-bg-1"> <?php echo e(__('Edit Template')); ?></a></td>
                </tr>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\Modules/EmailTemplate\Resources/views/components/tamplates/tamplate-table.blade.php ENDPATH**/ ?>