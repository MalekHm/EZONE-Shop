<!-- Header area Starts -->
<header class="header-style-01">
    <!-- Topbar area Starts -->
    <div class="topbar-area topbar-four topbar-bg-4">
        <div class="container <?php echo e($containerClass ?? ""); ?>">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="topbar-left-contents">
                        <ul class="topbar-social">
                            <?php if(!empty($all_social_item) && $all_social_item->count()): ?>
                                <?php $__currentLoopData = $all_social_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="link-item">
                                        <a href="<?php echo e($social_item->url); ?>">
                                            <i class="<?php echo e($social_item->icon); ?> icon"></i>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-6">
                    <div class="topbar-right-contents">
                        <div class="topbar-right-flex align-items-center">
                            <div class="topbar-right-offer">

                            </div>
                            <div class="topbar-right-offer">
                                <ul class="list">
                                    <?php if(get_static_option("enable_vendor_registration") === 'on'): ?>
                                        <li class="ml-2">
                                            <a class="btn btn-sm btn-warning text-dark become-a-seller-button" href="<?php echo e(route('vendor.register')); ?>">
                                                <?php echo e(__('Become a seller')); ?>

                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="ml-2">
                                        <a href="<?php echo e(route('vendor.login')); ?>">
                                            <?php echo e(__('Seller login')); ?>

                                        </a>
                                    </li>
                                    <?php echo render_frontend_menu(get_static_option('topbar_menu')); ?>

                                    <li class="ml-2">
                                        <a href="<?php echo e(route('frontend.products.track.order')); ?>">
                                            <?php echo e(__('Tracking order')); ?>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar area Ends -->
    <!-- Topbar bottom area Starts -->
    <div class="topbar-bottom-area topbar-bottom-four">
        <div class="container <?php echo e($containerClass ?? ""); ?>">
            <div class="row align-items-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="topbar-logo">
                        <a href="<?php echo e(route('homepage')); ?>">
                            <?php if(!empty(filter_static_option_value('site_logo', $global_static_field_data))): ?>
                                <?php echo render_image_markup_by_attachment_id(filter_static_option_value('site_logo', $global_static_field_data)); ?>

                            <?php else: ?>
                                <h2 class="site-title">
                                    <?php echo e(filter_static_option_value('site_title', $global_static_field_data)); ?></h2>
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="category-searchbar">
                        <form action="#" class="single-searchbar searchbar-suggetions">
                            <input autocomplete="off" class="form--control radius-5" id="search_form_input"
                                type="text" placeholder="<?php echo e('Search For Products'); ?>">
                            <button type="submit" class="right-position-button margin-2 radius-5"> <i
                                    class="las la-search"></i> </button>
                            <div class="search-suggestions" id="search_suggestions_wrap">
                                <div class="search-inner">
                                    <div class="category-suggestion item-suggestions">
                                        <h6 class="item-title"><?php echo e(__('Category Suggestions')); ?></h6>
                                        <ul id="search_result_categories" class="category-suggestion-list mt-4">

                                        </ul>
                                    </div>
                                    <div class="product-suggestion item-suggestions">
                                        <h6 class="item-title"><?php echo e(__('Product Suggestions')); ?></h6>
                                        <ul id="search_result_products" class="product-suggestion-list mt-4">

                                        </ul>
                                    </div>

                                    <div class="product-suggestion item-suggestions" style="display:none;"
                                        id="no_product_found_div">
                                        <h6 class="item-title d-flex justify-content-between">
                                            <span>
                                                <?php echo e(__('No Product Found')); ?>

                                            </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="topbar-bottom-right-content">
                        <div class="topbar-bottom-right-flex">
                            <div class="track-icon-list">
                                <?php if(auth('web')->check()): ?>
                                    <div class="track-icon-list-item">
                                        <a href="<?php echo e(route('user.product.order.all')); ?>" class="track-icon-single">
                                            <span class="icon">
                                                <i class="las la-shopping-bag"></i>
                                            </span> <?php echo e(__('Order')); ?>

                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="track-icon-list-item">
                                    <a href="<?php echo e(route('frontend.products.track.order')); ?>" class="track-icon-single">
                                        <span class="icon">
                                            <i class="las la-map-marker-alt"></i>
                                        </span>
                                        <?php echo e(__('Order Tracking')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar bottom area Ends -->
    <!-- Menu area Starts -->
    <nav class="navbar navbar-area nav-five navbar-expand-lg">
        <div class="container nav-container  <?php echo e($containerClass ?? ""); ?>">
            <div class="navbar-inner-all">
                <div class="navbar-inner-all--left">
                    <div class="nav-category category_bars">
                        <span class="nav-category-bars"><i class="las la-bars"></i> <?php echo e(__('Categories')); ?></span>
                    </div>
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
                        <div class="show-nav-right-contents">
                            <i class="las la-ellipsis-v"></i>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="mares_main_menu">
                    <ul class="navbar-nav">
                        <?php echo render_frontend_menu($primary_menu); ?>

                    </ul>
                </div>
                <div class="navbar-right-content">
                    <div class="single-right-content">
                        <div class="track-icon-list header-card-area-content-wrapper">
                            <?php echo $__env->make('frontend.partials.header.navbar.card-and-wishlist-area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Menu area end -->

    <!-- Category nav wrapper  -->
    <div class="categoryNav_overlay"></div>
    <div class="categoryNav">
        <div class="categoryNav__close"><i class="las la-times"></i></div>
        <div class="categoryNav_sidebar">
            <h3 class="categoryNav__title"><?php echo e(__('All Category')); ?></h3>
            <div class="categoryNav__inner mt-3">
                <ul class="categoryNav__list parent_menu menu_visible">
                    <?php echo render_frontend_menu(get_static_option('megamenu'), 'category_menu'); ?>

                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header area end -->
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views/frontend/partials/header/header-variant-03.blade.php ENDPATH**/ ?>