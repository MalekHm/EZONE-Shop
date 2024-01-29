<!-- Banner area Starts -->
<div class="banner-area banner-two">
    <div class="container container-one">
        <div class="row justify-content-center">
            <div class="col-lg-3 d-none d-lg-block">
            </div>
            <div class="col-lg-9">
                <div class="banner-middle-content bg-item-two radius-10">
                    <div class="global-slick-init dot-style-one banner-dots dot-color-two dot-absolute"
                        data-infinite="true" data-arrows="true" data-dots="true" data-autoplaySpeed="3000"
                        data-autoplay="true">
                        <?php for($i = 0; $i < count($sliders['subtitle_'] ?? []); $i++): ?>
                            <div class="banner-middle-image">
                                <div class="banner-single-thumb">
                                    <?php echo render_image($sliders['image_'][$i] ?? 0); ?>

                                </div>
                                <div class="middle-content">
                                    <span
                                        class="middle-span fw-500 color-heading"><?php echo e($sliders['subtitle_'][$i] ?? ''); ?></span>
                                    <h2 class="banner-middle-title fw-700 mt-3">
                                        <a href="<?php echo e($sliders['btn_url_'][$i] ?? '#'); ?>"><?php echo str_replace(['[cl]', '[/cl]'], ["<span class='color-two'>", '</span>'], $sliders['title_'][$i] ?? ''); ?></a>
                                    </h2>
                                    <div class="btn-wrapper">
                                        <a href="<?php echo e($sliders['btn_url_'][$i] ?? '#'); ?>" class="cmn-btn btn-bg-2 mt-4">
                                            <?php echo e($sliders['btn_text_'][$i] ?? ''); ?> </a>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner area end -->
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/sliders/header/style-01.blade.php ENDPATH**/ ?>