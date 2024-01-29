<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Import Products')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/nice-select.css')); ?>">
<style>
    .nice-select .option {
        min-height: 30px;
        padding: 0px 10px;
        font-size: 14px;
        font-weight: 600;
    }
    .nice-select .option:hover, .nice-select .option.focus, .nice-select .option.selected.focus {
        font-weight: 700;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <br>
    <div class="col-lg-12 col-ml-12 padding-bottom-30 ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body mt-50">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.msg.error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('msg.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.msg.flash','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('msg.flash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <h2 class="title margin-bottom-20"><?php echo e(__('Import Products')); ?></h2>

                        <?php if(empty($import_data)): ?>
                            <form action="<?php echo e(route('admin.products.import.settings.update')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="#"><?php echo e(__('File')); ?></label>
                                    <input type="file" name="csv_file" accept=".csv" class="form-control" required>
                                    <div class="info-text"><?php echo e(__('only csv file are allowed with separate by (,) comma.')); ?></div>
                                </div>
                                <button type="submit" class="btn btn-info loading-btn"><?php echo e(__('Submit')); ?></button>
                            </form>
                        <?php else: ?>
                            <?php
                                $option_markup = '';
                                foreach(current($import_data) as $map_item ){
                                    $option_markup .= '<option value="'.trim($map_item).'">'.$map_item.'</option>';
                                }
                            ?>
                            <form action="<?php echo e(route('admin.products.import.to.database')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <table class="table table-striped">
                                    <thead>
                                    <th style="width: 200px"><?php echo e(__('Field Name')); ?></th>
                                    <th><?php echo e(__('Set Field')); ?></th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><h6><?php echo e(__('Title')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Field')); ?></option>
                                                    <?php echo $option_markup; ?>

                                                </select>
                                                <input type="hidden" name="title">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Short Description')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Field')); ?></option>
                                                    <?php echo $option_markup; ?>

                                                </select>
                                                <input type="hidden" name="short_description">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Description')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Field')); ?></option>
                                                    <?php echo $option_markup; ?>

                                                </select>
                                                <input type="hidden" name="description">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Badge')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Field')); ?></option>
                                                    <?php echo $option_markup; ?>

                                                </select>
                                                <input type="hidden" name="badge">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Slug')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Field')); ?></option>
                                                    <?php echo $option_markup; ?>

                                                </select>
                                                <input type="hidden" name="slug">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('SKU')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Field')); ?></option>
                                                    <?php echo $option_markup; ?>

                                                </select>
                                                <input type="hidden" name="sku">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Stock')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Field')); ?></option>
                                                    <?php echo $option_markup; ?>

                                                </select>
                                                <input type="hidden" name="stock">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Total Sales')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Field')); ?></option>
                                                    <?php echo $option_markup; ?>

                                                </select>
                                                <input type="hidden" name="sales">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Regular Price')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Field')); ?></option>
                                                    <?php echo $option_markup; ?>

                                                </select>
                                                <input type="hidden" name="regular_price">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Sale Price')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select  class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Field')); ?></option>
                                                    <?php echo $option_markup; ?>

                                                </select>
                                                <input type="hidden" name="sale_price">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Category')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Category')); ?></option>
                                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <input type="hidden" name="category_id">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Subcategory')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select subcategory')); ?></option>
                                                    <?php $__currentLoopData = $sub_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($sub_cat->id); ?>"><?php echo e($sub_cat->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <input type="hidden" name="sub_category_id">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Image')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value=""><?php echo e(__('Select Field')); ?></option>
                                                    <?php echo $option_markup; ?>

                                                </select>
                                                <input type="hidden" name="image">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><?php echo e(__('Status')); ?></h6></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control mapping_select wide">
                                                    <option value="publish"><?php echo e(__('Publish')); ?></option>
                                                    <option value="draft"><?php echo e(__('Draft')); ?></option>
                                                </select>
                                                <input type="hidden" name="status" value="publish">
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-success loading-btn"><?php echo e(__('Import')); ?></button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/jquery.nice-select.min.js')); ?>"></script>
    <script>
        (function ($){
            "use strict";

            $(document).on('click','.loading-btn',function (){
                $(this).append('<i class="ml-2 fas fa-spinner fa-spin"></i>')
            });

            $(document).on('change','.mapping_select',function (){
                let allValue = $('.mapping_select');
                $('.mapping_select option').attr('disabled',false);
                $(this).next('input').val($(this).val());
                $.each(allValue,function (index,item){
                    $('.mapping_select option[value="'+$(this).val()+'"]').attr('disabled',true);
                });
            });

            $('.mapping_select').niceSelect();
        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\products\product-import.blade.php ENDPATH**/ ?>