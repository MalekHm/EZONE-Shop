<!-- Updated area Starts -->
<section class="updated-area padding-top-50 padding-bottom-50">
    <div class="container container-one">
        <div class="row mt-4 pt-1">
            <?php for($i = 0; $i < count($banners['subtitle_'] ?? []); $i++): ?>
                <div class="col-xxl-3 col-lg-6 col-md-6 mt-4">
                    <div class="single-updated column-four radius-10">
                        <div class="updated-image-contents">
                            <div class="updated-flex-contents">
                                <div class="updated-contents mt-3 mt-lg-0">
                                    <span class="updated-top color-heading"><?php echo e($banners['subtitle_'][$i]); ?></span>
                                    <h2 class="updated-title">
                                        <a href="<?php echo e($banners['btn_url_'][$i] ?? '#1'); ?>">
                                            <?php echo e($banners['subtitle_'][$i]); ?>

                                        </a>
                                    </h2>
                                    <a href="<?php echo e($banners['btn_url_'][$i] ?? '#1'); ?>"
                                        class="btn-buy icon btn-color-two"><?php echo e($banners['btn_text_'][$i] ?? ''); ?></a>
                                </div>
                                <div class="updated-img">
                                    <?php echo render_image_markup_by_attachment_id($banners['image_'][$i]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<!-- Updated area end -->
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/banners/style-01.blade.php ENDPATH**/ ?>