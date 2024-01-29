<!-- Top Sale area start -->
<section class="topSale_area padding-top-50 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left">
                    <h2 class="title"><?php echo e($section_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".<?php echo e($loop->iteration); ?>s">
                    <div class="blogFour">
                        <div class="blogFour__thumb">
                            <a href="<?php echo e(route("frontend.blog.single", $blog->slug)); ?>">
                                <?php echo render_image($blog->blogImage); ?>

                            </a>
                            <div class="blogFour__thumb__tag">
                                <a href="<?php echo e(route("frontend.blog.category", $blog->category->id)); ?>" class="tag_item bg-5"><?php echo e($blog->category->name); ?></a>
                            </div>
                        </div>
                        <div class="blogFour__contents">
                            <h5 class="blogFour__title"> <a href="<?php echo e(route("frontend.blog.single", $blog->slug)); ?>"><?php echo e($blog->title); ?></a> </h5>
                            <p class="blogFour__para mt-3">
                                <?php echo e(str(strip_tags($blog->blog_content))->limit(100)); ?>

                            </p>
                            <div class="btn-wrapper mt-3">
                                <a href="<?php echo e(route("frontend.blog.single", $blog->slug)); ?>" class="blogFour__btn"><?php echo e(__("Read More")); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section>
<!-- Top Sale area end --><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\app\Providers/../PageBuilder/views/blog/style-02.blade.php ENDPATH**/ ?>