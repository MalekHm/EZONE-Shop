<div class="single-news-update">
    <div class="news-flex-content">
        <div class="news-update-thumb radius-10">
            <a href="<?php echo e(route('frontend.blog.single', $blog->slug)); ?>">
                <?php echo render_image($blog->blogImage); ?>

            </a>
        </div>
        <div class="news-update-contents">
            <h5 class="common-title-three hover-color-two">
                <a href="<?php echo e(route('frontend.blog.single', $blog->slug)); ?>">
                    <?php echo e($blog->title); ?>

                </a>
            </h5>
            <span class="dates d-block mt-2"> <?php echo e($blog->created_at->format("Y F d")); ?> </span>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\frontend\blog\lsit-style-01.blade.php ENDPATH**/ ?>