<div class="about-area-wrapper padding-top-100 padding-bottom-50">
    <div class="container">
        <div class="row g-4 sec custom-reverse <?php if($image_position == 'left'): ?> flex-row-reverse <?php endif; ?>">
            <div class="col-lg-6">
                <div class="content-box">
                    <h4 class="title"><?php echo e(html_entity_decode($title)); ?></h4>
                    <p class="info mt"><?php echo str_replace(["<script", "</script>"], ["<span>", "</span>"],$description); ?></p>
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
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/about/about_style_one.blade.php ENDPATH**/ ?>