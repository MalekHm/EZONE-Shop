<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Email Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-12">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('Email Settings')); ?></h4>
                    </div>
                    <div class="dashboard__card__body custom__form mt-4">
                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger"><?php echo e($error); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <form action="<?php echo e(route('admin.general.email.settings')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="contact_mail_success_message"><?php echo e(__('Contact Mail Success Message')); ?></label>
                                <input type="text" name="contact_mail_success_message" class="form-control"
                                    value="<?php echo e(get_static_option('contact_mail_success_message')); ?>"
                                    id="contact_mail_success_message">
                                <small
                                    class="form-text text-muted"><?php echo e(__('this message will show when any one contact you via contact page form.')); ?></small>
                            </div>
                            <div class="form-group">
                                <label
                                    for="get_in_touch_mail_success_message"><?php echo e(__('Get In Touch Form Success Message')); ?></label>
                                <input type="text" name="get_in_touch_mail_success_message" class="form-control"
                                    value="<?php echo e(get_static_option('get_in_touch_mail_success_message')); ?>"
                                    id="get_in_touch_mail_success_message">
                                <small
                                    class="form-text text-muted"><?php echo e(__('this message will show when any one contact you via get in touch form.')); ?></small>
                            </div>

                            <button type="submit" class="cmn_btn btn_bg_profile"><?php echo e(__('Update Changes')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\general-settings\email-settings.blade.php ENDPATH**/ ?>