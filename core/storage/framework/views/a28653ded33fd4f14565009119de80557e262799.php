<!-- Menu area Starts -->
<nav class="navbar navbar-area index-02 white-nav nav-color-two navbar-expand-lg">
    <div class="container-one nav-container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="top-menu-category style-02">
                    <div class="top-menu-toggle">
                        <a href="#1" class="single-category-flex bg-color-two radius-5">
                            <h6 class="category-title text-white"> <?php echo e(__('Browse Category')); ?> </h6>
                            <span class="icon-bar text-white fs-22"> <i class="las la-bars"></i> </span>
                        </a>
                    </div>
                    <div class="navbar-area-side">
                        <div class="nav-container-side">
                            <div class="navbar-collapse">
                                <ul class="navbar-nav-side">
                                    <?php echo render_frontend_menu(get_static_option('megamenu'), 'category_menu'); ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="navbar-inner-all">
                    <div class="responsive-mobile-menu d-lg-none d-block">
                        <div class="logo-wrapper">
                            <a href="<?php echo e(route('homepage')); ?>">
                                <?php if(!empty(filter_static_option_value('site_logo', $global_static_field_data))): ?>
                                    <?php echo render_image_markup_by_attachment_id(filter_static_option_value('site_logo', $global_static_field_data)); ?>

                                <?php else: ?>
                                    <h2 class="site-title">
                                        <?php echo e(filter_static_option_value('site_title', $global_static_field_data)); ?></h2>
                                <?php endif; ?>
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mares_main_menu">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="mares_main_menu">
                        <ul class="navbar-nav">
                            <?php echo render_frontend_menu($primary_menu); ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Menu area end -->
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\frontend\partials\navbar-menu.blade.php ENDPATH**/ ?>