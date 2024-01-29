<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/dropzone.css')); ?>">
    <?php echo $__env->make('backend.partials.media-upload.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Edit Profile')); ?>

<?php $__env->stopSection(); ?>

<?php
    $image = auth('admin')->user()->profile_image;
?>

<?php $__env->startSection('content'); ?>
    <div class="main-content-inner margin-top-30">
        <div class="row">
            <div class="col-lg-12">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card">
                    <div class="card-body">
                        <?php echo $__env->make('backend.partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check("profile-update")): ?>
                            <form action="<?php echo e(route('admin.profile.update')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                        <?php endif; ?>
                                <div class="form-group">
                                    <label for="username"><?php echo e(__('Username')); ?></label>
                                    <input type="text" class="form-control" readonly value="<?php echo e(auth()->user()->username); ?> ">
                                </div>
                                <div class="form-group">
                                    <label for="name"><?php echo e(__('Name')); ?></label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="<?php echo e(auth()->user()->name); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email"><?php echo e(__('Email')); ?></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           value="<?php echo e(auth('admin')->user()->email); ?> ">
                                </div>
                                <div class="form-group">
                                    <?php $image_upload_btn_label = __('Upload Image'); ?>
                                    <div class="media-upload-btn-wrapper">
                                        <div class="img-wrap">
                                            <?php
                                                $profile_img = \App\Http\Services\Media::render_image($image,render_type: 'path',size: 'thumb');
                                            ?>
                                            <?php if(!empty($profile_img)): ?>
                                                <div class="attachment-preview">
                                                    <div class="thumbnail">
                                                        <div class="centered">
                                                            <img class="avatar user-thumb" src="<?php echo e($profile_img); ?>" alt="<?php echo e(auth()->user()->name); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $image_upload_btn_label = __('Change Image'); ?>
                                            <?php endif; ?>
                                        </div>
                                        <input type="hidden" name="image" value="<?php echo e(auth()->user()->image); ?>">
                                        <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="<?php echo e(__('Select Profile Picture')); ?>" data-modaltitle="<?php echo e(__('Upload Profile Picture')); ?>" data-imgid="<?php echo e(auth()->user()->image); ?>" data-bs-toggle="modal" data-bs-target="#media_upload_modal">
                                            <?php echo e(__($image_upload_btn_label)); ?>

                                        </button>
                                    </div>
                                    <small class="info-text"><?php echo e(__('Recommended Image Size 100x100. Only Accept: jpg,png.jpeg. Size less than 2MB')); ?></small>
                                </div>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check("profile-update")): ?>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Save changes')); ?></button>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('backend.partials.media-upload.media-upload-markup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('backend.partials.media-upload.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\auth\admin\edit-profile.blade.php ENDPATH**/ ?>