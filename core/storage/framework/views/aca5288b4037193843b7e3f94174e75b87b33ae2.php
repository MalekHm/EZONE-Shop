<!-- Topbar bottom area Starts -->
<div class="topbar-bottom-area index-02 color-two">
    <div class="container container-one">
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
            <div class="col-lg-5">
                <div class="category-searchbar">
                    <form action="#" class="single-searchbar searchbar-suggetions">
                        <input autocomplete="off" class="form--control radius-5" id="search_form_input" type="text"
                            placeholder="<?php echo e('Search For Products'); ?>">
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

            <div class="col-lg-4">
                <div class="topbar-bottom-right-content navbar-right-flex">
                    <div class="topbar-bottom-right-flex">
                        <div class="track-icon-list header-card-area-content-wrapper">
                            <?php echo $__env->make('frontend.partials.header.navbar.card-and-wishlist-area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="login-account">
                            <?php if(auth('web')->check()): ?>
                                <a class="accounts" href="#1"> <?php echo e(auth('web')->user()->name); ?> <i
                                        class="las la-user"></i> </a>
                                <ul class="account-list-item">
                                    <li class="list"><a href="<?php echo e(route('user.home')); ?>"><?php echo e(__('Dashboard')); ?></a>
                                    </li>
                                    <li class="list"><a
                                            href="<?php echo e(route('user.home.edit.profile')); ?>"><?php echo e(__('Edit Profile')); ?></a>
                                    </li>
                                    <li class="list"><a
                                            href="<?php echo e(route('user.home.change.password')); ?>"><?php echo e(__('Change Password')); ?></a>
                                    </li>
                                    <li class="list"><a
                                            href="<?php echo e(route('user.product.order.all')); ?>"><?php echo e(__('My Orders')); ?></a>
                                    </li>
                                    <li class="list"><a
                                            href="<?php echo e(route('user.shipping.address.all')); ?>"><?php echo e(__('Shipping Address')); ?></a>
                                    </li>
                                    <li class="list"><a
                                            href="<?php echo e(route('user.home.support.tickets')); ?>"><?php echo e(__('Support Ticket')); ?></a>
                                    </li>
                                    <li class="list">
                                        <a href="<?php echo e(route('user.logout')); ?>"
                                            onclick="event.preventDefault();document.getElementById('menu_logout_submit_btn').dispatchEvent(new MouseEvent('click'));">
                                            <?php echo e(__('Logout')); ?>

                                        </a>
                                        <form action="<?php echo e(route('user.logout')); ?>" method="POST"
                                            style="display: none;">
                                            <?php echo csrf_field(); ?>
                                            <button id="menu_logout_submit_btn" type="submit"></button>
                                        </form>
                                    </li>
                                </ul>
                            <?php else: ?>
                                <a class="accounts" href="#1"> <i class="las la-user"></i> </a>
                                <ul class="account-list-item">
                                    <li class="list"> <a href="<?php echo e(route('user.login')); ?>"> <?php echo e(__('Sign In')); ?> </a>
                                    </li>
                                    <li class="list"> <a href="<?php echo e(route('user.register')); ?>"> <?php echo e(__('Sign Up')); ?>

                                        </a> </li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar bottom area Ends -->
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views/frontend/partials/navbar.blade.php ENDPATH**/ ?>