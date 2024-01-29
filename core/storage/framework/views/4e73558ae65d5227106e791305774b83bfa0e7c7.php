

<?php
    $name = $socialIconsName . '[]';
    $link = $socialIconsLink . '[]';
    $id = $id ?? $name;
    $label = $label ?? ''; // <label> text. If truthy, label will be shown.
?>

<div class="social_links">
    <div class="social_link row">
        <div class="col-sm-1 col-xl-1">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.iconpicker.input','data' => ['id' => $id,'name' => $name,'label' => $label]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('iconpicker.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
        <div class="col-sm-8 col-xl-8 form-group ml-6">
            <input type="text" class="form-control" id="$id"  name="$socialIconsLink" placeholder="<?php echo e(__('Link')); ?>">
        </div>
        <div class="col-sm-3 col-xl-3">
            <button type="button" class="btn btn-sm btn-success add">+</button>
            <button type="button" class="btn btn-sm btn-danger remove">-</button>
        </div>
    </div>
</div>


<?php if (! $__env->hasRenderedOnce('f6453dbd-41e6-42cd-9a53-782f7724fed6')): $__env->markAsRenderedOnce('f6453dbd-41e6-42cd-9a53-782f7724fed6'); ?>
    <?php $__env->startPush('custom_style'); ?>
<style>
.social_link.row .ml-6 {padding-left: 4rem !important;}
</style>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\iconpicker\repeater\markup.blade.php ENDPATH**/ ?>