<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Sign In')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- SignIn Area Starts -->
    <section class="signin-area padding-top-100 padding-bottom-100">
        <div class="container-three">
            <div class="signin-wrappers">
                <div class="signin-contents">
                    <h2 class="single-title"> <?php echo e(__("Sign In")); ?> </h2>
                    <form action="<?php echo e(route('user.login')); ?>" method="post" class="login-form padding-top-20 register-form"
                        id="login_form_order_page">
                        <div class="error-wrap"></div>

                        <div class="single-input mt-4">
                            <label class="label-title mb-3"> <?php echo e(__("Email Or User Name")); ?> </label>
                            <input class="form--control" type="text" id="login_username" name="username"
                                placeholder="<?php echo e(__('Username')); ?>" <?php if(request()->host() == 'safecart.bytesed.com'): ?> value="test_user" <?php endif; ?>>
                        </div>
                        <div class="single-input mt-4">
                            <label class="label-title mb-3"> <?php echo e(__("Password")); ?> </label>
                            <input class="form--control" type="password" id="login_password" name="password"
                                placeholder="<?php echo e(__('Password')); ?>" <?php if(request()->host() == 'safecart.bytesed.com'): ?> value="12345678" <?php endif; ?>>
                        </div>
                        <button class="btn-submit w-100" type="submit" id="login_btn"> <?php echo e(__("Sign In")); ?> </button>
                    </form>
                    <div class="single-checbox mt-3">
                        <div class="checkbox-inlines">
                            <input class="check-input" type="checkbox" id="login_remember" name="remember">
                            <label class="checkbox-label" for="login_remember"> <?php echo e(__("Remember Me")); ?> </label>
                        </div>
                        <div class="forgot-password">
                            <a href="<?php echo e(route('user.forget.password')); ?>" class="forgot-btn color-one"> <?php echo e(__("Forgot Password")); ?> </a>
                        </div>
                    </div>
                    <div class="signin-bottom-contents">
                        <div class="or-contents mb-3">
                            <span class="or-para"> <?php echo e(__("Or")); ?> </span>
                        </div>
                        <div class="signin-others">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <?php if(get_static_option('enable_google_login')): ?>
                                        <a href="<?php echo e(route('login.google.redirect')); ?>" class="special-account">
                                            <img src="<?php echo e(asset('assets/frontend/img/icon/google-icon.svg')); ?>" alt="icon">
                                            <p class="special-account-para"><?php echo e(__("Login With Google")); ?></p>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <?php if(get_static_option('enable_facebook_login')): ?>
                                        <a href="<?php echo e(route('login.facebook.redirect')); ?>" class="special-account">
                                            <img src="<?php echo e(asset('assets/frontend/img/icon/Facebook-icon.svg')); ?>" alt="icon">
                                            <p class="special-account-para"><?php echo e(__("Login With Facebook")); ?></p>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SignIn Area end -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('frontend.partials.google-captcha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.partials.gdpr-cookie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.partials.inline-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.partials.twakto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sweet-alert-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sweet-alert-msg'); ?>
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
    <script src="<?php echo e(asset('assets/common/js/toastr.min.js')); ?>"></script>
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $(document).on('click', '#login_btn', function(e) {
                    e.preventDefault();
                    let formContainer = $('#login_form_order_page');
                    let el = $(this);
                    let username = $('#login_form_order_page #login_username').val();
                    let password = $('#login_form_order_page #login_password').val();
                    let remember = $('#login_form_order_page #login_remember').val();

                    el.text('<?php echo e(__('Please Wait')); ?>');

                    $.ajax({
                        type: 'post',
                        url: "<?php echo e(route('user.ajax.login')); ?>",
                        data: {
                            _token: "<?php echo e(csrf_token()); ?>",
                            username: username,
                            password: password,
                            remember: remember,
                        },
                        success: function(data) {
                            if (data.status === 'invalid') {
                                el.text('<?php echo e(__('Login')); ?>');
                                formContainer.find('.error-wrap').html(
                                    '<div class="alert alert-danger">' + data.msg +
                                    '</div>');
                            } else {
                                formContainer.find('.error-wrap').html('');
                                el.text('<?php echo e(__('Login Success.. Redirecting ..')); ?>');
                                setTimeout(function() {
                                    location.reload();
                                }, 500);
                            }
                        },
                        error: function(data) {
                            let response = data['responseJSON']['errors'];

                            formContainer.find('.error-wrap').html(
                                '<ul class="alert alert-danger"></ul>');
                            $.each(response, function(value, index) {
                                formContainer.find('.error-wrap ul').append('<li>' +
                                    capitalizeFirstLetter(index[0]) + '</li>');
                            });
                            el.text('<?php echo e(__('Login')); ?>');
                        }
                    });
                });

                $('.nav-item .nav-link').on('click', function() {
                    $('#forgot-password').removeClass('active');
                });
            });
        })(jQuery)

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\frontend\user\login.blade.php ENDPATH**/ ?>