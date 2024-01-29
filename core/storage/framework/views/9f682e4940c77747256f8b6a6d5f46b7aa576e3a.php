<?php if(!empty($vendor)): ?>
    <?php $__env->startSection('page-title'); ?>
        <?php echo e($vendor->business_name); ?> <?php echo e(__('Products')); ?>

    <?php $__env->stopSection(); ?>
<?php else: ?>
    <?php $__env->startSection('page-title'); ?>
        <?php echo e(__('Products')); ?>

    <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection("style"); ?>
    <style>
        .preloader-parent-wrapper {
            position: relative;
            min-height: 600px;
        }
        .pre-loader {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            flex-direction: column;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 99;
            transform: translate(-50%, -50%);
        }
        .pre-loader .shape {
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateY(-3em);
        }
        .pre-loader .shape .circle {
            width: 30px;
            height: 30px;
            background-color: var(--main-color-one);
            border-radius: 50%;
            margin: 0 1rem;
            animation: bounce 1.0s linear infinite;
        }
        .pre-loader .shape .circle:nth-child(2) {
            animation-delay: 0.1s;
        }
        .pre-loader .shape .circle:nth-child(3) {
            animation-delay: 0.2s;
        }
        .pre-loader .shadow-loader {
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateY(-3em);
        }
        .pre-loader .shadow-loader .shape-shadow {
            width: 30px;
            height: 18px;
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            margin: 0 1rem;
            animation: bounceShadow 0.6s linear infinite;
            transform: translateY(3em) scale(0.5);
        }
        .pre-loader .shadow-loader .shape-shadow:nth-child(2) {
            animation-delay: 0.1s;
        }
        .pre-loader .shadow-loader .shape-shadow:nth-child(3) {
            animation-delay: 0.2s;
        }
        @keyframes bounce {
            from,
            to {
                transform: translateY(0) scale(1, 1);
                animation-timing-function: ease-in;
            }
            45% {
                transform: translateY(3em) scale(1, 1);
                animation-timing-function: linear;
            }
            50% {
                transform: translateY(3em) scale(1.5, 0.5);
                animation-timing-function: linear;
            }
            100% {
                transform: translateY(3em) scale(1, 1);
                animation-timing-function: ease-out;
            }
        }
        @keyframes bounceShadow {
            from,
            to {
                transform: translateY(3em) scale(0.5);
                filter: blur(5px);
            }
            45% {
                transform: translateY(3em) scale(0.5);
            }
            50% {
                box-shadow: 20px 0 5px rgba(0, 0, 0, 0.1), -20px 0 5px rgba(0, 0, 0, 0.1);
            }
            100% {
                transform: translateY(3em) scale(0.5);
                box-shadow: unset;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $item_width = 'col-lg-4'; ?>

    <section class="shop-area padding-top-100 padding-bottom-100">
        <div class="container container-one">
            <div class="shop-contents-wrapper style-02">
                <div class="shop-icon shop-icon-text">
                    <div class="sidebar-icon sidebar-icon-text">
                        Filter
                    </div>
                </div>
                <div class="shop-sidebar-content">
                    <div class="shop-close-main">
                        <div class="close-bars">
                            <i class="las la-times"></i>
                        </div>
                        <div class="single-shop-left border-1">
                            <div class="shop-left-title open">
                                <h5 class="title"> <?php echo e(__('Category')); ?> </h5>
                                <div class="shop-left-list margin-top-15">
                                    <ul class="shop-lists active-list">
                                        <?php $__currentLoopData = $all_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li data-val="<?php echo e($category->name); ?>" data-type="category"
                                                class="list <?php if(!empty($category->subcategory->count())): ?> menu-item-has-children <?php endif; ?> ">
                                                <a href="#1"
                                                    data-action="<?php echo e(route('frontend.products.category', $category->slug)); ?>">
                                                    <?php echo e($category->name); ?> </a>
                                                <?php if(!empty($category->subcategory)): ?>
                                                    <ul class="submenu">
                                                        <?php $__currentLoopData = $category->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li data-val="<?php echo e($sub_cat->name); ?>" data-type="sub_category"
                                                                class="list <?php if($sub_cat?->childcategory?->count() > 0): ?> menu-item-has-children <?php endif; ?>">
                                                                <a href="#1"><?php echo e($sub_cat->name); ?></a>
                                                                <?php if(!empty($sub_cat->childcategory)): ?>
                                                                    <ul class="submenu">
                                                                        <?php $__currentLoopData = $sub_cat->childcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <li data-val="<?php echo e($child_cat->name); ?>"
                                                                                data-type="child_category" class="list">
                                                                                <a
                                                                                    href="#1"><?php echo e($child_cat->name ?? ''); ?></a>
                                                                            </li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </ul>
                                                                <?php endif; ?>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single-shop-left border-1 margin-top-40">
                            <div class="shop-left-title open">
                                <h5 class="title"> <?php echo e(__('Prices')); ?> </h5>
                                <div class="shop-left-list mt-4">
                                    <form class="price-range-slider" method="post" data-start-min="<?php echo e($min_price); ?>"
                                        data-start-max="<?php echo e($max_price); ?>" data-min="<?php echo e($min_price); ?>"
                                        data-max="<?php echo e($max_price); ?>" data-step="5">
                                        <div class="ui-range-slider"></div>
                                        <div class="ui-range-slider-footer">
                                            <div class="ui-range-values">
                                                <span class="ui-price-title"> <?php echo e(__('Price')); ?>: </span>
                                                <div class="ui-range-value-min"><?php echo e(site_currency_symbol()); ?><span
                                                        class="min_price"><?php echo e($min_price); ?></span>
                                                    <input id="min_price_search" data-type="min_price" type="hidden"
                                                        value="<?php echo e($min_price); ?>">
                                                </div>-
                                                <div class="ui-range-value-max"><?php echo e(site_currency_symbol()); ?><span
                                                        class="max_price"><?php echo e($max_price); ?></span>
                                                    <input id="max_price_search" data-type="max_price" type="hidden"
                                                        value="<?php echo e($max_price); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="single-shop-left border-1 margin-top-40">
                            <div class="shop-left-title open">
                                <h5 class="title"> <?php echo e(__('Color')); ?> </h5>
                                <div class="shop-left-list margin-top-15">
                                    <ul class="color-lists active-list">
                                        <?php $__currentLoopData = $all_colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li data-type="color" data-val="<?php echo e($color->name); ?>" class="list">
                                                <a style="background-color: <?php echo e($color->color_code); ?>!important"
                                                    class="radius-5" href="#1"> </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-shop-left border-1 margin-top-40">
                            <div class="shop-left-title open">
                                <h5 class="title"> <?php echo e(__('Size')); ?> </h5>
                                <div class="shop-left-list margin-top-15">
                                    <ul class="size-lists active-list" data-type="size">
                                        <?php $__currentLoopData = $all_sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li data-type="size" data-val="<?php echo e($size->name); ?>" data-type="size"
                                                class="list">
                                                <a class="radius-5" href="#1"> <?php echo e($size->name); ?> </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-shop-left border-1 margin-top-40">
                            <div class="shop-left-title open">
                                <h5 class="title"> <?php echo e(__('Filter By Rating')); ?> </h5>
                                <div class="shop-left-list">
                                    <ul class="filter-lists active-list margin-top-20 review-filter">
                                        <li data-type="rating" data-val="5" class="list">
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                        </li>
                                        <li data-type="rating" data-val="4" class="list">
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="lar la-star"></i> </a>
                                        </li>
                                        <li data-type="rating" data-val="3" class="list">
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="lar la-star"></i> </a>
                                            <a href="#1"> <i class="lar la-star"></i> </a>
                                        </li>
                                        <li data-type="rating" data-val="2" class="list">
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="lar la-star"></i> </a>
                                            <a href="#1"> <i class="lar la-star"></i> </a>
                                            <a href="#1"> <i class="lar la-star"></i> </a>
                                        </li>
                                        <li data-type="rating" data-val="1" class="list">
                                            <a href="#1"> <i class="las la-star"></i> </a>
                                            <a href="#1"> <i class="lar la-star"></i> </a>
                                            <a href="#1"> <i class="lar la-star"></i> </a>
                                            <a href="#1"> <i class="lar la-star"></i> </a>
                                            <a href="#1"> <i class="lar la-star"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single-shop-left border-1 margin-top-40">
                            <div class="shop-left-title open">
                                <h5 class="title"> <?php echo e(__('Brands')); ?> </h5>
                                <div class="shop-left-list margin-top-15">
                                    <ul class="shop-lists active-list brand-list">
                                        <?php $__currentLoopData = $all_brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li data-type="brand" data-val="<?php echo e($brand->name); ?>" class="list">
                                                <a href="#1"> <?php echo e($brand->name); ?> </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-grid-contents">

                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="shop-left">
                                <div class="single-shops">
                                    <ul class="shop-flex-icon tabs">
                                        <li class="shop-icons" data-tab="tab-grid">
                                            <a href="#1" class="icon"> <i class="las la-bars"></i> </a>
                                        </li>
                                        <li class="shop-icons active" data-tab="tab-grid2">
                                            <a href="#1" class="icon"> <i class="las la-border-all"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="shop-right">
                                <span class="showing-results showing-results-item-count color-light"> <?php echo e(__('Showing')); ?>

                                    <?php echo e($all_products['from']); ?>-<?php echo e($all_products['to']); ?> <?php echo e(__("of")); ?>

                                    <?php echo e($all_products['total_items']); ?> <?php echo e(__("results")); ?> </span>
                                <div class="single-shops">
                                    <div class="shop-nice-select">
                                        <select id="order_by" data-type="order_by" data-val="order_by">
                                            <option value="desc"> <?php echo e(__('Order By Desc')); ?> </option>
                                            <option value="asc"> <?php echo e(__('Order By ASC')); ?> </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="selectder-filter-contents click-hide-filter mt-4">
                                <ul class="selected-flex-list">
                                    <li> <?php echo e(__('Selected Filter:')); ?> </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="preloader-parent-wrapper d-none">
                        <div class="shop-page-preloader pre-loader">
                            <!-- partial:index.partial.html -->
                            <div class="shape">
                                <div class="circle"></div>
                                <div class="circle"></div>
                                <div class="circle"></div>
                            </div>
                            <div class="shadow-loader">
                                <div class="shape-shadow"></div>
                                <div class="shape-shadow"></div>
                                <div class="shape-shadow"></div>
                            </div>
                            <!-- partial -->
                        </div>
                    </div>
                    <div id="tab-grid2" class="tab-content-item active">
                        <div class="row mt-4">
                            <?php $__currentLoopData = $all_products['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xl-3 col-lg-4 col-sm-6 mt-4">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'product::components.frontend.grid-style-03','data' => ['product' => $product,'loop' => $loop,'isAllowBuyNow' => get_static_option('enable_buy_now_button_on_shop_page') === 'on']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product::frontend.grid-style-03'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product),'loop' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loop),'isAllowBuyNow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(get_static_option('enable_buy_now_button_on_shop_page') === 'on')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div id="tab-grid" class="tab-content-item">
                        <div class="row mt-4">
                            <?php $__currentLoopData = $all_products['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xl-4 col-lg-4 col-sm-6 mt-4">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'product::components.frontend.list-style-02','data' => ['product' => $product,'loop' => $loop,'isAllowBuyNow' => get_static_option('enable_buy_now_button_on_shop_page') === 'on']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product::frontend.list-style-02'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product),'loop' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loop),'isAllowBuyNow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(get_static_option('enable_buy_now_button_on_shop_page') === 'on')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    
                    <?php if(($all_products['total_page'] ?? 0) > 1): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pagination-default">
                                    <div class="pagination">
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.search-product-list-pagination','data' => ['allProducts' => $all_products]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('search-product-list-pagination'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['all_products' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($all_products)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('frontend.partials.product.product-filter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('frontend.partials.product.product-filter-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        $(document).on("submit", "#search_product", function(e) {
            e.preventDefault();

            const activeTab = $('.tab-content-item.active');
            const preloaderWrapper = $('.preloader-parent-wrapper');

            activeTab.removeClass('active');
            preloaderWrapper.removeClass('d-none');
            preloaderWrapper.addClass('d-block');

            send_ajax_request($(this).attr("method"), new FormData(e.target), $(this).attr("action") + "?" + $(this).serialize(),
                () => {

                }, (data) => {
                    $("#tab-grid2").html(data.grid);
                    $("#tab-grid").html(data.list);
                    $(".selected-flex-list").html(data.selected_search)
                    $(".showing-results-item-count").html(data.showing_items)
                    $(".pagination").html(data.pagination_list)

                    preloaderWrapper.removeClass('d-block');
                    preloaderWrapper.addClass('d-none');
                    activeTab.addClass('active');
                }, () => {
                    preloaderWrapper.removeClass('d-block');
                    preloaderWrapper.addClass('d-none');
                    activeTab.addClass('active');
                }
            );
        });

        // close-search-selected-item
        // clear-search
        $(document).on('click','.close-search-selected-item', function (){
            $("#" + $(this).attr('data-key')).val('');

            submitForm();
        })

        $(document).on('click','.clear-search', function (){
            $('.close-search-selected-item').each(function (){
                $("#" + $(this).attr('data-key')).val('');
            })

            submitForm();
        })

        function submitForm() {
            $("#search_product").trigger("submit");
        }

        // write code for ajax pagination
        $(document).on("click", ".pagination a", function(e) {
            e.preventDefault();

            $("#search_page").val($(this).attr("data-page-index"));

            submitForm();
        });

        $(document).on("click", ".list[data-type=category] a", function() {
            $("#" + $(this).parent().attr("data-type")).val($(this).parent().attr("data-val"));

            submitForm();
        });

        $(document).on("click", ".list[data-type=sub_category] a", function() {
            $("#" + $(this).parent().attr("data-type")).val($(this).parent().attr("data-val"));

            submitForm();
        });

        $(document).on("click", ".list[data-type=child_category] a", function() {
            $("#" + $(this).parent().attr("data-type")).val($(this).parent().attr("data-val"));

            submitForm();
        });

        $(document).on("click", ".color-lists .list[data-type=color] a", function() {
            $("#" + $(this).parent().attr("data-type")).val($(this).parent().attr("data-val"));

            submitForm();
        });

        $(document).on("click", ".size-lists .list[data-type=size] a", function() {
            $("#" + $(this).parent().attr("data-type")).val($(this).parent().attr("data-val"));

            submitForm();
        });

        $(document).on("click", ".brand-list .list[data-type=brand] a", function() {
            $("#" + $(this).parent().attr("data-type")).val($(this).parent().attr("data-val"));

            submitForm();
        });

        $(document).on("click", ".review-filter .list[data-type=rating] a", function() {
            $("#" + $(this).parent().attr("data-type")).val($(this).parent().attr("data-val"));

            submitForm();
        });

        $(document).on('click', '.active-list .list a', function() {
            $(this).parent().siblings().removeClass('active');
            $(this).parent().siblings().find('.submenu .list').removeClass('active');
            $(this).parent().addClass('active');
        });

        $(document).on("change", "#order_by", function() {
            $("#search_order_by").val($(this).val());

            submitForm();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views/frontend/dynamic-redirect/product.blade.php ENDPATH**/ ?>