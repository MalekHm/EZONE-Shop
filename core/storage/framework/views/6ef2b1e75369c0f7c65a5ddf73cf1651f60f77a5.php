<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/colorpicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/dropzone.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/media-uploader.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Color Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-12">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('Color Settings')); ?></h4>
                    </div>
                    <div class="dashboard__card__body custom__form mt-4">
                        <form action="<?php echo e(route('admin.general.color.settings')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="tab-content margin-top-30" id="nav-tabContent"></div>
                            <div class="row g-4">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_color"><?php echo e(__('Site Main Color Settings')); ?></label>
                                        <input type="text" name="site_color"
                                            style="background-color: <?php echo e(get_static_option('site_color')); ?>;color: #fff;"
                                            class="form-control" value="<?php echo e(get_static_option('site_color')); ?>"
                                            id="site_color">
                                        <small><?php echo e(__('you change site main color from here, it will replace website main color')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_secondary_color"><?php echo e(__('Site Secondary Color Settings')); ?></label>
                                        <input type="text" name="site_secondary_color"
                                            style="background-color: <?php echo e(get_static_option('site_secondary_color')); ?>;color: #fff;"
                                            class="form-control" value="<?php echo e(get_static_option('site_secondary_color')); ?>"
                                            id="site_secondary_color">
                                        <small><?php echo e(__('you change site secondary color from here, it will replace website secondary color')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_heading_color"><?php echo e(__('Site Heading Color')); ?></label>
                                        <input type="text" name="site_heading_color"
                                            style="background-color: <?php echo e(get_static_option('site_heading_color')); ?>;color: #fff;"
                                            class="form-control" value="<?php echo e(get_static_option('site_heading_color')); ?>"
                                            id="site_heading_color">
                                        <small><?php echo e(__('you can change site heading color from there , when you chnage this color it will reflect the color in all the heading like (h1,h2,h3,h4.h5.h6)')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_special_color"><?php echo e(__('Customer profile Color Settings')); ?></label>
                                        <input type="text" name="site_special_color"
                                            style="background-color: <?php echo e(get_static_option('site_special_color')); ?>;color: #fff;"
                                            class="form-control" value="<?php echo e(get_static_option('site_special_color')); ?>"
                                            id="site_special_color">
                                        <small><?php echo e(__('You change customer profile Color Settings color from here, it will replace website special color')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_paragraph_color"><?php echo e(__('Site Paragraph Color')); ?></label>
                                        <input type="text" name="site_paragraph_color"
                                            style="background-color: <?php echo e(get_static_option('site_paragraph_color')); ?>;color: #fff;"
                                            class="form-control" value="<?php echo e(get_static_option('site_paragraph_color')); ?>"
                                            id="site_paragraph_color">
                                        <small><?php echo e(__('you can change site paragraph color from there')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_form_bg_color"><?php echo e(__('Site Form Background Color')); ?></label>
                                        <input type="text" name="site_form_bg_color"
                                            style="background-color: <?php echo e(get_static_option('site_form_bg_color')); ?>;color: #fff;"
                                            class="form-control" value="<?php echo e(get_static_option('site_form_bg_color')); ?>"
                                            id="site_form_bg_color">
                                        <small><?php echo e(__('you can change site form background color from there')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_footer_bg_color"><?php echo e(__('Site Footer Background Color')); ?></label>
                                        <input type="text" name="site_footer_bg_color"
                                            style="background-color: <?php echo e(get_static_option('site_footer_bg_color')); ?>;color: #fff;"
                                            class="form-control" value="<?php echo e(get_static_option('site_footer_bg_color')); ?>"
                                            id="site_footer_bg_color">
                                        <small><?php echo e(__('you can change site paragraph color from there')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit"
                                        class="cmn_btn btn_bg_profile"><?php echo e(__('Update Changes')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.markup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.markup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/colorpicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/dropzone.js')); ?>"></script>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {

                initColorPicker('#site_color');
                initColorPicker('#site_secondary_color');
                initColorPicker('#site_main_color_two');
                initColorPicker('#site_heading_color');
                initColorPicker('#site_paragraph_color');
                initColorPicker('input[name="portfolio_home_color"');
                initColorPicker('input[name="logistics_home_color"');

                function initColorPicker(selector) {
                    $(selector).ColorPicker({
                        color: '#852aff',
                        onShow: function(colpkr) {
                            $(colpkr).fadeIn(500);
                            return false;
                        },
                        onHide: function(colpkr) {
                            $(colpkr).fadeOut(500);
                            return false;
                        },
                        onChange: function(hsb, hex, rgb) {
                            $(selector).css('background-color', '#' + hex);
                            $(selector).val('#' + hex);
                        }
                    });
                }
            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\general-settings\color-settings.blade.php ENDPATH**/ ?>