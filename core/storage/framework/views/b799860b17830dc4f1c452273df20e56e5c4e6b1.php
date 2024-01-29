<?php
   $selector = $selector ?? '.social_links .social_link .add';
?>
<script>
(function (){
    "use strict";

    $(document).ready(function () {
        $(document).on('click', '<?php echo e($selector); ?>', function () {
            $(this).closest('.social_links').append(
                `<div class="social_link row">
                    <div class="col-sm-1 col-xl-1">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.iconpicker.input','data' => ['id' => 'social_icon','name' => 'social_icon[]','label' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('iconpicker.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('social_icon'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('social_icon[]'),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-sm-8 col-xl-8 form-group ml-6">
                        <input type="text" class="form-control" id="social_link"  name="social_link[]" placeholder="<?php echo e(__('Link')); ?>">
                    </div>
                    <div class="col-sm-3 col-xl-3">
                        <button type="button" class="btn btn-sm btn-success add">+</button>
                        <button type="button" class="btn btn-sm btn-danger remove">-</button>
                    </div>
                </div>`
            );
        });

        $(document).on('click', '.social_links .social_link .remove', function () {
            $(this).closest('.social_link').remove();
        });
    });
})(jQuery);
</script>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\iconpicker\repeater\js.blade.php ENDPATH**/ ?>