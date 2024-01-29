<!-- Category Starts -->
<section class="category_area section-bg-2 padding-top-50 padding-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left">
                    <h2 class="title"><?php echo e($section_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="category_wrapper">
                <div class="category_wrapper__flex">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="category_wrapper__item">
                            <div class="signle_category center-text">
                                <div class="signle_category__thumb">
                                    <a href="<?php echo e(route('frontend.products.category', $category->slug)); ?>">
                                        <?php echo render_image($category->image); ?>

                                    </a>
                                </div>
                                <div class="signle_category__contents mt-3">
                                    <h6 class="signle_category__title">
                                        <a href="<?php echo e(route('frontend.products.category', $category->slug)); ?>">
                                            <?php echo e($category->name); ?>

                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category area end -->
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/category/choose-category-one.blade.php ENDPATH**/ ?>