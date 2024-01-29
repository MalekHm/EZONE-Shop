<!-- Save area starts -->
<section class="save-area padding-top-50 padding-bottom-50">
    <div class="save-inner-wrapper main-bg-two radius-10">
        <div class="row flex-lg-row flex-column-reverse">
            <div class="col-lg-4">
                <div class="save-thumbs">
                    <?php echo render_image_markup_by_attachment_id($image ?? 1); ?>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="single-save-wrapper">
                    <div class="save-flex-contents">
                        <div class="save-contents">
                            <span class="save-subtitle white-color fw-500"><?php echo e(html_entity_decode($sub_title)); ?></span>
                            <h2 class="save-title white-color mt-2"> <?php echo e(html_entity_decode($title)); ?> </h2>
                        </div>
                        <div class="save-button">
                            <div class="btn-wrapper">
                                <a href="<?php echo e($button_url ?? "#"); ?>" class="cmn-btn btn-bg-white hover-bg-two"> <?php echo e($button_text ?? ""); ?> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Save area end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/banners/style-05.blade.php ENDPATH**/ ?>