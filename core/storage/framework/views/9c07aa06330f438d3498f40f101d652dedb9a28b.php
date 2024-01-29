<!-- Promo area Starts -->
<section class="promo-area padding-bottom-50 padding-top-25">
    <div class="row">
        <?php $__currentLoopData = $deliveryOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deliveryOption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xxl-12 col-xl-4 col-md-6 mt-4">
                <div class="single-promo sidebar-promo single-border radius-10">
                    <div class="promo-inner">
                        <div class="icon color-two">
                            <i class="<?php echo e($deliveryOption->icon ?? ""); ?>"></i>
                        </div>
                        <div class="promo-inner-contents">
                            <h4 class="promo-inner-title hover-color-two"> <a href="#1"> <?php echo e($deliveryOption->title ?? ""); ?> </a> </h4>
                            <p class="promo-inner-para"> <?php echo e($deliveryOption->sub_title); ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<!-- Promo area end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/delivery-option/style-01.blade.php ENDPATH**/ ?>