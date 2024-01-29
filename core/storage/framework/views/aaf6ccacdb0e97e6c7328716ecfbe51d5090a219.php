
<!-- Best Seller area Starts -->
<section class="app_area padding-top-50 padding-bottom-50">
    <div class="container">
        <div class="row gy-5 align-items-center justify-content-center">
            <div class="col-xl-4 col-lg-5">
                <div class="mobileApp">
                    <div class="mobileApp__thumb mobileApp__bgShape">
                        <?php echo render_image_markup_by_attachment_id($image); ?>

                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-6 col-lg-6">
                <div class="mobileApp__contents">
                    <h3 class="mobileApp__title"><?php echo e($title); ?></h3>
                    <p class="mobileApp__para">
                        <?php echo e($description); ?>

                    </p>
                    <div class="btn-wrapper btn_flex mt-4">
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e($icons["url_"][$loop->index]); ?>" class="googleplay">
                                <?php echo render_image($image,size: 'full'); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Best Seller area end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/banners/style-08.blade.php ENDPATH**/ ?>