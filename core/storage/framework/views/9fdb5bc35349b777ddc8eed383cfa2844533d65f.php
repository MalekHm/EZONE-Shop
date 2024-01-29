<div class="testimonial-area-wrapper padding-top-50 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrapper">
                    <h2 class="section-title"><?php echo e($title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row padding-top-60">
            <div class="col-lg-12">
                <div class="testimonial-slider-inst">
                    <?php $__currentLoopData = $testimonials['review_']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="testimonial-slider-item">
                            <div class="single-testimonial-item">
                                <div class="top-box">
                                    <p class="info"><?php echo e($review); ?></p>
                                </div>
                                <div class="bottom-box">
                                    <div class="img-box">
                                        <?php echo render_image_markup_by_attachment_id($testimonials['image_'][$loop->index]); ?>

                                    </div>
                                    <h4 class="name"><?php echo e($testimonials['name_'][$loop->index]); ?></h4>
                                    <p class="post"><?php echo e($testimonials['position_'][$loop->index]); ?>,
                                        <?php echo e($testimonials['institution_'][$loop->index]); ?></p>
                                    <div class="icon-wrap">
                                        <?php echo ratingMarkup($testimonials['rating_'][$loop->index], '', false); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/about/testimonial_style_one.blade.php ENDPATH**/ ?>