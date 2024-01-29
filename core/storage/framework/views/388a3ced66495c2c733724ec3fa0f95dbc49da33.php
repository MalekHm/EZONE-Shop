<div class="about-area-wrapper padding-top-50 padding-bottom-50">
    <div class="container">
        <div class="row sec custom-reverse <?php if($image_position == 'left'): ?> flex-row-reverse <?php endif; ?>">
            <div class="col-lg-6">
                <div class="content-box">
                    <h4 class="title"><?php echo e(html_entity_decode($title)); ?></h4>
                    <div class="advantage-box support-area-wrapper">
                        <div class="support-item-wrap">
                            <?php $__currentLoopData = $all_features['title_']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-support-item">
                                    <div class="icon-box">
                                        <i class="<?php echo e($all_features['icon_'][$loop->index]); ?> icon"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><?php echo e($title); ?></h5>
                                        <p class="info"><?php echo e($all_features['description_'][$loop->index]); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-box">
                    <?php echo render_image($section_image); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/about/about_style_two.blade.php ENDPATH**/ ?>