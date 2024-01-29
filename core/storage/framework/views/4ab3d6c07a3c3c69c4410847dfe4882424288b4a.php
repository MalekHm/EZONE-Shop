<span class="checkout-title fs-18 fw-500 color-light"> <i class="las la-exclamation-circle"></i>
    <?php echo filter_static_option_value('returning_customer_text', $setting_text, __('Returning customer?')); ?>

    <a class="color-one fw-400 click-open-form" href="#1">
        <?php echo filter_static_option_value('toggle_login_text', $setting_text, __('Click here to login')); ?>

    </a>
</span>

<div class="checkout-form-open">
    <div class="signin-contents">
        <h4 class="contact-title"> <?php echo e(__('Sign In')); ?> </h4>
        <form class="login-form" id="login_form_order_page">
            <div class="single-input mt-4">
                <label class="label-title mb-2"> <?php echo e(__('Email Or User Name')); ?> </label>
                <input class="form--control" type="text" name="username"
                    placeholder="<?php echo e(filter_static_option_value('checkout_username', $setting_text, __('Username'))); ?>">
            </div>
            <div class="single-input mt-4">
                <label class="label-title mb-2"> <?php echo e(__('Password')); ?> </label>
                <input class="form--control" type="password" name="password"
                    placeholder="<?php echo e(filter_static_option_value('checkout_password', $setting_text, __('Password'))); ?>">
            </div>
            <button class="btn-submit w-100 mt-4" id="login_btn" type="submit">
                <?php echo filter_static_option_value('checkout_login_btn_text', $setting_text, __('Sign in')); ?>

            </button>
        </form>
        <div class="single-checbox mt-3">
            <div class="checkbox-inlines">
                <input class="check-input" name="remember" type="checkbox" id="check15">
                <label class="checkbox-label" for="check15"> <?php echo filter_static_option_value('checkout_remember_text', $setting_text, __('Remember me')); ?> </label>
            </div>
            <div class="forgot-password">
                <a href="forgot_password.html" class="forgot-btn color-one">
                    <?php echo e(filter_static_option_value('checkout_forgot_password', $setting_text, __('Forgot Password'))); ?>

                </a>
            </div>
        </div>
        <div class="signin-bottom-contents">
            <div class="or-contents mb-3">
                <span class="or-para"> Or </span>
            </div>
            <div class="signin-others">
                <?php if(get_static_option('enable_google_login')): ?>
                    <div class="single-other-signin">
                        <a href="<?php echo e(route('login.google.redirect')); ?>" class="btn-others w-100">
                            <img src="<?php echo e(asset('assets/frontend/img/icon/google-icon.svg')); ?>" alt="">
                            <span class="signin-para"> <?php echo e(__('Sign In With Google')); ?> </span>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if(get_static_option('enable_facebook_login')): ?>
                    <div class="single-other-signin">
                        <a href="<?php echo e(route('login.facebook.redirect')); ?>" class="btn-others w-100">
                            <img src="<?php echo e(asset('assets/frontend/img/icon/Facebook-icon.svg')); ?>" alt="">
                            <span class="signin-para"> <?php echo e(__('Sign In With facebook')); ?> </span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\frontend\cart\partials\login.blade.php ENDPATH**/ ?>