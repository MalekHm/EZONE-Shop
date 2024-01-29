<?php
    //    $page_details , $navbar_type those two variable are come from header.blade.php file
    $page_container = $navbar_type == 1 ? 'custom-container-1318' : 'custom-container-1720';
?>

<!-- Topbar area Starts -->
<div class="topbar-area hover-color-two topbar-bg-1">
    <div class="container container-one">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="topbar-left-contents">
                    <div class="topbar-left-flex">
                        <ul class="topbar-social">
                            <?php if(!empty($all_social_item) && $all_social_item->count()): ?>
                                <?php $__currentLoopData = $all_social_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="link-item">
                                        <a href="<?php echo e($social_item->url); ?>">
                                            <i class="<?php echo e($social_item->icon); ?> icon"></i>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="topbar-right-contents">
                    <div class="topbar-right-flex">
                        <ul class="list">
                            <?php echo render_frontend_menu(get_static_option('topbar_menu')); ?>


                            <li class="ml-2"><a
                                    href="<?php echo e(route('frontend.products.track.order')); ?>"><?php echo e(__('Tracking order')); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar area Ends -->
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views/frontend/partials/topbar.blade.php ENDPATH**/ ?>