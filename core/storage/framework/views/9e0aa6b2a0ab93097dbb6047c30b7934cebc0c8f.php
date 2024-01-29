<?php $__env->startSection('site-title', __('Admin Health')); ?>

<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.css'); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.datatable.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('datatable.css'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
        $display_errors =  "ini_get method not allowed";
        $memory_limit =  "ini_get method not allowed";
        $post_max_size =  "ini_get method not allowed";
        $max_execution_time =  "ini_get method not allowed";
        $upload_max_filesize =  "ini_get method not allowed";

        if (function_exists('ini_get')){
            $display_errors =  ini_get("display_errors");
            $memory_limit =  ini_get("memory_limit");
            $post_max_size =  ini_get("post_max_size");
            $max_execution_time =  ini_get("max_execution_time");
            $upload_max_filesize =  ini_get("upload_max_filesize");
        }
    ?>

    <div class="row">

        <div class="col-sm-6 m-auto text-dark">
            <div class="py-2 px-2 mb-2 d-flex justify-content-between align-items-center bg-white">
                <h3><?php echo e(__("Website health")); ?></h3>
            </div>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
                    <p class="text-dark font-weight-bold"> <?php echo e(__('PHP Version')); ?>

                        <small class="d-block mb-0"><?php echo e(__('Minimum required PHP Version is v 8.1')); ?></small>
                    </p>

                    <span class="badge bg-secondary badge-info badge-pill">
                        <?php
                            echo "V"." ".phpversion();
                        ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
                    <p class="text-dark font-weight-bold"> <?php echo e(__('MySQL version')); ?>

                        <small class="d-block mb-0"><?php echo e(__('Minimum required MySQL version is v 8')); ?></small>
                    </p>

                    <span class="badge bg-secondary badge-info badge-pill">
                        <?php
                            echo "V"." ". DB::select("SELECT VERSION() as version")[0]->version;
                        ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
                    Laravel version
                    <span class="badge bg-secondary badge-info badge-pill">
                        <?php
                            echo "V"." ".app()->version();
                        ?>
                    </span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
                    <p class="text-dark font-weight-bold"> <?php echo e(__('Memory Limit')); ?> <small class="d-block"><?php echo e(__('recommended memory limit is 512MB')); ?></small></p>
                    <span class="badge bg-secondary badge-success badge-pill"><?php echo e($memory_limit); ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
                    <p class="text-dark font-weight-bold"> <?php echo e(__('Maximum Execution Time')); ?> <small
                                class="d-block"><?php echo e(__('recommended maximum execution time is 300')); ?></small></p>

                    <span class="badge bg-secondary badge-success badge-pill"><?php echo e($max_execution_time); ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
                    <?php echo e(__('Display Errors')); ?>

                    <span
                            class="badge bg-secondary <?php if($display_errors == 'Off'): ?> badge-danger <?php else: ?> badge-success <?php endif; ?> badge-pill"><?php echo e($display_errors); ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
                    <p class="text-dark font-weight-bold"> <?php echo e(__('Max File Upload Size')); ?> <small class="d-block"><?php echo e(__('recommended post size is 128M')); ?></small></p>
                    <span class="badge bg-secondary badge-success badge-pill"><?php echo e($upload_max_filesize); ?></span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
                    <p class="text-dark font-weight-bold"> <?php echo e(__('Post Max Size')); ?> <small class="d-block"><?php echo e(__('recommended post size is 128M')); ?></small></p>
                    <span class="badge bg-secondary badge-success badge-pill"><?php echo e($post_max_size); ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
                    <?php echo e(__('Database engine')); ?>

                    <span class="badge bg-secondary badge-info badge-pill"><?php echo e(\Config::get('database.connections.mysql.engine')); ?></span>
                </li>

                <li class="list-group-item d-flex  justify-content-start align-items-center flex-wrap text-dark">
                    <p class="d-inline-block mb-3 text-dark font-weight-bold mr-5"><?php echo e(__('Php Extension list')); ?></p>
                    <div class="extension-list">
                        <?php
                            $colors = ["badge-success",'badge-primary','badge-secondary','badge-danger','badge-warning'];
                        ?>
                        <?php $__currentLoopData = get_loaded_extensions() ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ext): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="badge bg-secondary badge-pill m-1 extension"><?php echo e($ext); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- Start datatable js -->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.datatable.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('datatable.js'); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.js'); ?>
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
    <script>
        (function($){
            "use strict";
            $(document).ready(function() {
                $(document).on('click','.user_change_password_btn',function(e){
                    e.preventDefault();
                    var el = $(this);
                    var form = $('#user_password_change_modal_form');
                    form.find('#ch_user_id').val(el.data('id'));
                });
                $('#all_user_table').DataTable( {
                    "order": [[ 0, "desc" ]]
                } );

            } );

        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\health.blade.php ENDPATH**/ ?>