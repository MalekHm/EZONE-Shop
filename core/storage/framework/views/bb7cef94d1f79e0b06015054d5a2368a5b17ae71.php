<?php
    $category_url = route('frontend.blog.category', ['id' => optional($blog->category)->id, 'name' => optional($blog->category)->title]) ?? '';
    $read_more_btn_text = get_static_option('blog_page_read_more_btn_text');
?>
<div class="single-blog-grid-item-style-1 single-blog-list-item-style-1">
    <div class="img-box">
        <?php echo render_image($blog->blogImage); ?>

    </div>
    <div class="blog-contents mt-3">
        <div class="post-meta">
            <ul class="post-meta-list">
                <li class="post-meta-item">
                    <a href="<?php echo e(route('frontend.blog.single', $blog->slug)); ?>">
                        <i class="lar la-calendar icon"></i>
                        <span class="text"><?php echo e($blog->created_at->format('D M Y')); ?></span>
                    </a>
                </li>
                <li class="post-meta-item">
                    <a href="<?php echo e($category_url); ?>">
                        <i class="las la-tag icon"></i>
                        <span class="text"><?php echo e(optional($blog->category)->name); ?></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="blog-contents-inner mt-2">
            <h4 class="blog-contents-inner-title"><a
                    href="<?php echo e(route('frontend.blog.single', $blog->slug)); ?>"><?php echo Str::limit(purify_html_raw($blog->title), 55); ?></a></h4>
            <p class="blog-contents-inner-info mt-3"><?php echo Str::limit(purify_html_raw($blog->blog_content), 104); ?></p>
            <div class="btn-wrapper mt-3">
                <a href="<?php echo e(route('frontend.blog.single', $blog->slug)); ?>"
                    class="blog-contents-btn btn-default rounded-btn outline-blog-button"><?php echo e($readMoreBtnText); ?></a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\frontend\blog\grid.blade.php ENDPATH**/ ?>