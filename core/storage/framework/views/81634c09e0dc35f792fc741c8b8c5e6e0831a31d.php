<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/summernote-bs4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/dropzone.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/media-uploader.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/bootstrap-tagsinput.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Services')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-lg-12">
                <?php echo $__env->make('backend/partials/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('New Service')); ?></h4>
                    </div>
                    <div class="dashboard__card__body custom__form mt-4">
                        <form action="<?php echo e(route('admin.services')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="language"><?php echo e(__('Language')); ?></label>
                                <select name="lang" id="language" class="form-control">
                                    <?php $__currentLoopData = get_all_language(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($language->slug); ?>"><?php echo e($language->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title"><?php echo e(__('Title')); ?></label>
                                <input type="text" class="form-control" value="<?php echo e(old('title')); ?>" name="title"
                                    placeholder="<?php echo e(__('Title')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="title"><?php echo e(__('Slug')); ?></label>
                                <input type="text" class="form-control" value="<?php echo e(old('slug')); ?>" name="slug"
                                    placeholder="<?php echo e(__('Slug')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="edit_icon_type"><?php echo e(__('Icon Type')); ?></label>
                                <select name="icon_type" class="form-control" id="edit_icon_type">
                                    <option value="icon"><?php echo e(__('Font Icon')); ?></option>
                                    <option value="image"><?php echo e(__('Image Icon')); ?></option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="icon" class="d-block"><?php echo e(__('Icon')); ?></label>
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-primary iconpicker-component">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </button>
                                    <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                        data-selected="fas fa-exclamation-triangle" data-bs-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu"></div>
                                </div>
                                <input type="hidden" class="form-control" id="icon"
                                    value="fas fa-exclamation-triangle" name="icon">
                            </div>
                            <div class="form-group">
                                <label for="img_icon"><?php echo e(__('Image Icon')); ?></label>
                                <div class="media-upload-btn-wrapper">
                                    <div class="img-wrap"></div>
                                    <input type="hidden" id="img_icon" name="img_icon">
                                    <button type="button" class="btn btn-info media_upload_form_btn"
                                        data-btntitle="<?php echo e(__('Select Image')); ?>"
                                        data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-bs-toggle="modal"
                                        data-bs-target="#media_upload_modal">
                                        <?php echo e(__('Upload Image Icon')); ?>

                                    </button>
                                </div>
                                <small><?php echo e(__('Recommended image size 60x60')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="description"><?php echo e(__('Description')); ?></label>
                                <input type="hidden" name="description" id="description">
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <label for="excerpt"><?php echo e(__('Excerpt')); ?></label>
                                <textarea name="excerpt" id="excerpt" class="form-control max-height-150" placeholder="<?php echo e(__('Excerpt')); ?>"
                                    cols="30" rows="10"></textarea>
                                <small
                                    class="info-text"><?php echo e(__('it will show in home pages service item shortdetails.')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="meta_tags"><?php echo e(__('Meta Tags')); ?></label>
                                <input type="text" name="meta_tags" class="form-control" data-role="tagsinput"
                                    id="meta_tags">
                            </div>
                            <div class="form-group">
                                <label for="meta_description"><?php echo e(__('Meta Description')); ?></label>
                                <textarea name="meta_description" class="form-control" rows="5" id="meta_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="category"><?php echo e(__('Category')); ?></label>
                                <select name="categories_id" id="category" class="form-control">
                                    <option value=""><?php echo e(__('Select Category')); ?></option>
                                    <?php $__currentLoopData = $service_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price_plan"><?php echo e(__('Price Plans')); ?></label>
                                <select name="price_plan[]" multiple class="form-control wide">
                                    <?php $__currentLoopData = $price_plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status"><?php echo e(__('Status')); ?></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="publish"><?php echo e(__('Publish')); ?></option>
                                    <option value="draft"><?php echo e(__('Draft')); ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sr_order"><?php echo e(__('Order')); ?></label>
                                <input type="text" class="form-control" value="<?php echo e(old('sr_order')); ?>"
                                    name="sr_order" placeholder="<?php echo e(__('eg: 1')); ?>">
                                <span
                                    class="info-text"><?php echo e(__('if you set order for it, all service will show in frontend as a per this order')); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="image"><?php echo e(__('Image')); ?></label>
                                <div class="media-upload-btn-wrapper">
                                    <div class="img-wrap"></div>
                                    <input type="hidden" name="image">
                                    <button type="button" class="btn btn-info media_upload_form_btn"
                                        data-btntitle="<?php echo e(__('Select Service Image')); ?>"
                                        data-modaltitle="<?php echo e(__('Upload Service Image')); ?>" data-bs-toggle="modal"
                                        data-bs-target="#media_upload_modal">
                                        <?php echo e(__('Upload Image')); ?>

                                    </button>
                                </div>
                                <small><?php echo e(__('Recommended image size 1920x1280')); ?></small>
                            </div>

                            <button type="submit" class="cmn_btn btn_bg_profile"><?php echo e(__('Add Service')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('backend.partials.media-upload.media-upload-markup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/summernote-bs4.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/bootstrap-tagsinput.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/jquery.nice-select.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            if ($('.nice-select').length > 0) {
                $('.nice-select').niceSelect();
            }

            $(document).on('change', 'select[name="icon_type"]', function(e) {
                e.preventDefault();
                var iconType = $(this).val();
                iconTypeFieldVal(iconType);
            });
            defaultIconType();

            function defaultIconType() {
                var iconType = $('select[name="icon_type"]').val();
                iconTypeFieldVal(iconType);
            }

            function iconTypeFieldVal(iconType) {
                if (iconType == 'icon') {
                    $('input[name="img_icon"]').parent().parent().hide();
                    $('input[name="icon"]').parent().show();
                } else if (iconType == 'image') {
                    $('input[name="icon"]').parent().hide();
                    $('input[name="img_icon"]').parent().parent().show();
                }
            }

            $('.summernote').summernote({
                height: 250, //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                },
                callbacks: {
                    onChange: function(contents, $editable) {
                        $(this).prev('input').val(contents);
                    },
                    onPaste: function (e) {
                        let bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('text/plain');
                        e.preventDefault();
                        document.execCommand('insertText', false, bufferText);
                    }
                }
            });

            $(document).on('change', '#language', function(e) {
                e.preventDefault();
                var selectedLang = $(this).val();
                $.ajax({
                    url: "<?php echo e(route('admin.service.category.by.slug')); ?>",
                    type: "POST",
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>",
                        lang: selectedLang
                    },
                    success: function(data) {
                        $('#category').html('');
                        $.each(data, function(index, value) {
                            $('#category').append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                        })
                    }
                });
            });

            $('.icp-dd').iconpicker();
            $('.icp-dd').on('iconpickerSelected', function(e) {
                var selectedIcon = e.iconpickerValue;
                $(this).parent().parent().children('input').val(selectedIcon);
            });

        });
    </script>
    <script src="<?php echo e(asset('assets/backend/js/dropzone.js')); ?>"></script>
    <?php echo $__env->make('backend.partials.media-upload.media-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\pages\service\new-service.blade.php ENDPATH**/ ?>