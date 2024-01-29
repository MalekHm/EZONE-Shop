<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/colorpicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/dropzone.css')); ?>">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.css'); ?>
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
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Basic Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-12">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('Basic Settings')); ?></h4>
                    </div>
                    <div class="dashboard__card__body custom__form mt-4">
                        <form action="<?php echo e(route('admin.general.basic.settings')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row g-4">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_title"><?php echo e(__('Site Title')); ?></label>
                                        <input type="text" name="site_title" class="form-control"
                                            value="<?php echo e(get_static_option('site_title')); ?>" id="site_title">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_tag_line"><?php echo e(__('Site Tag Line')); ?></label>
                                        <input type="text" name="site_tag_line" class="form-control"
                                            value="<?php echo e(get_static_option('site_tag_line')); ?>" id="site_tag_line">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_footer_copyright"><?php echo e(__('Footer Copyright')); ?></label>
                                        <input type="text" name="site_footer_copyright" class="form-control"
                                            value="<?php echo e(get_static_option('site_footer_copyright')); ?>"
                                            id="site_footer_copyright">
                                        <small class="form-text text-muted">{copy}
                                            <?php echo e(__('Will replace by &copy; and {year} will be replaced by current year.')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media-upload','data' => ['name' => 'og_meta_image_for_site','title' => __('Og Meta Image For Site'),'oldimage' => get_static_option('og_meta_image_for_site')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'og_meta_image_for_site','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Og Meta Image For Site')),'oldimage' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(get_static_option('og_meta_image_for_site'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                        <small
                                            class="form-text text-muted"><?php echo e(__('allowed image format: jpg,jpeg,png. Recommended image size 1200x900')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label
                                            for="site_sticky_navbar_enabled"><strong><?php echo e(__('Enable buy now button on shop page')); ?></strong></label>
                                        <label class="switch">
                                            <input type="checkbox" name="enable_buy_now_button_on_shop_page"
                                                <?php if(!empty(get_static_option('enable_buy_now_button_on_shop_page'))): ?> checked <?php endif; ?>
                                                id="enable_buy_now_button_on_shop_page">
                                            <span class="slider onff"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label
                                            for="site_sticky_navbar_enabled"><strong><?php echo e(__('Sticky Navbar Enable/Disable')); ?></strong></label>
                                        <label class="switch">
                                            <input type="checkbox" name="site_sticky_navbar_enabled"
                                                <?php if(!empty(get_static_option('site_sticky_navbar_enabled'))): ?> checked <?php endif; ?>
                                                id="site_sticky_navbar_enabled">
                                            <span class="slider onff"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label
                                            for="site_maintenance_mode"><strong><?php echo e(__('Maintenance Mode')); ?></strong></label>
                                        <label class="switch yes">
                                            <input type="checkbox" name="site_maintenance_mode"
                                                <?php if(!empty(get_static_option('site_maintenance_mode'))): ?> checked <?php endif; ?> id="site_maintenance_mode">
                                            <span class="slider onff"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label
                                            for="site_admin_panel_nav_sticky"><strong><?php echo e(__('Enable/Disable Admin Panel Nav Sticky')); ?></strong></label>
                                        <label class="switch">
                                            <input type="checkbox" name="site_admin_panel_nav_sticky"
                                                <?php if(!empty(get_static_option('site_admin_panel_nav_sticky'))): ?> checked <?php endif; ?>>
                                            <span class="slider onff"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label
                                            for="site_payment_gateway"><strong><?php echo e(__('Enable/Disable Payment Gateway')); ?></strong></label>
                                        <label class="switch">
                                            <input type="checkbox" name="site_payment_gateway"
                                                <?php if(!empty(get_static_option('site_payment_gateway'))): ?> checked <?php endif; ?> id="site_payment_gateway">
                                            <span class="slider onff"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label
                                            for="disable_backend_preloader"><strong><?php echo e(__('Enable/Disable Backend Preloader')); ?></strong></label>
                                        <label class="switch">
                                            <input type="checkbox" name="disable_backend_preloader"
                                                <?php if(!empty(get_static_option('disable_backend_preloader'))): ?> checked <?php endif; ?>
                                                id="disable_backend_preloader">
                                            <span class="slider onff"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label
                                            for="site_force_ssl_redirection"><strong><?php echo e(__('Enable/Disable Force SSL Redirection')); ?></strong></label>
                                        <label class="switch">
                                            <input type="checkbox" name="site_force_ssl_redirection"
                                                <?php if(!empty(get_static_option('site_force_ssl_redirection'))): ?> checked <?php endif; ?>>
                                            <span class="slider onff"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label
                                            for="disable_user_email_verify"><strong><?php echo e(__('Disable User Email Verify')); ?></strong></label>
                                        <label class="switch">
                                            <input type="checkbox" name="disable_user_email_verify"
                                                <?php if(!empty(get_static_option('disable_user_email_verify'))): ?> checked <?php endif; ?>
                                                id="disable_user_email_verify">
                                            <span class="slider onff"></span>
                                        </label>
                                        <small
                                            class="info-text"><?php echo e(__('No, means user must have to verify their email account in order access his/her dashboard.')); ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label
                                            for="preloader_status"><strong><?php echo e(__('Enable/Disable Frontend Preloader')); ?></strong></label>
                                        <label class="switch">
                                            <input type="checkbox" name="preloader_status"
                                                <?php if(!empty(get_static_option('preloader_status'))): ?> checked <?php endif; ?>>
                                            <span class="slider onff"></span>
                                        </label>
                                        <small class="info-text"><?php echo e(__('enable disable preloader')); ?></small>
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

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\general-settings\basic.blade.php ENDPATH**/ ?>