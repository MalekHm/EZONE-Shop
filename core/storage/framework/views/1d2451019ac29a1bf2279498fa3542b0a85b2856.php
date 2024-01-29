<!-- Instagram area starts -->
<section class="instagram padding-top-50 padding-bottom-50">
    <div class="sidebar-wrapper single-border radius-10">
        <div class="news-wrapper">
            <h3 class="sidebar-title fw-500"> <?php echo e($section_title); ?> </h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram-flex-wrapper">
                        <?php $__currentLoopData = $gallery_images["image_"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $render_image = $images->where("id",$image)->first();
                            ?>
                            <div class="single-instagram">
                                <div class="instagram-thumb radius-10">
                                    <a href="<?php echo e($gallery_images["url_"][$loop->index] ?? "#1"); ?>">
                                        <?php echo render_image($render_image); ?>

                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram area end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/gallery-image/style-01.blade.php ENDPATH**/ ?>