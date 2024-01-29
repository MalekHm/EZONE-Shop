
<!-- Updated area Starts -->
<section class="updatedOffer_area padding-top-50 padding-bottom-50">
    <div class="container">
        <div class="row g-4">
            <?php for($i = 0; $i < $loopLength; $i++): ?>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="updatedOffer" style="background: <?php echo e($banners["background_"][$i] ?? ""); ?>">
                        <div class="updatedOffer__flex">
                            <div class="updatedOffer__contents">
                                <span class="updatedOffer__subtitle color-heading"><?php echo e($banners["sub_title_"][$i]); ?></span>
                                <h2 class="updatedOffer__title mt-2"> <?php echo e($banners["title_"][$i]); ?> </h2>
                                <p class="updatedOffer__para mt-2"><?php echo e($banners["description_"][$i]); ?></p>
                                <div class="btn-wrapper mt-3">
                                    <a href="<?php echo e($banners["btn_url_"][$i]); ?>" class="cmn-btn btn-outline-5 btn-small radius-0"><?php echo e($banners["btn_text_"][$i]); ?></a>
                                </div>
                            </div>
                            <div class="updatedOffer__thumb">
                                <?php echo render_image_markup_by_attachment_id($banners["image_"][$i]); ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<!-- Updated area end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/banners/style-07.blade.php ENDPATH**/ ?>