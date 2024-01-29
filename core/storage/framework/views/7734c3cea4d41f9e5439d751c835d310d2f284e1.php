<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Shop Manage')); ?>

<?php $__env->stopSection(); ?>

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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 dashboard-area">
        <div class="row">
            <div class="col-lg-12">
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
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('Admin Shop Manage')); ?></h4>
                    </div>
                    <div class="dashboard__card__body custom__form dashboard-recent-order mt-4">
                        <form action="<?php echo e(route('admin.shop-manage.update')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row g-4">
                                <div class="col-lg-7">
                                    <div class="row g-4">
                                        <div class="col-sm-12">
                                            <div class="single-input">
                                                <label class="label-title"><?php echo e(__('Store Name')); ?> </label>
                                                <input value="<?php echo e($shopManage->store_name ?? null); ?>" name="store_name"
                                                    type="text" class="form--control radius-10"
                                                    placeholder="<?php echo e(__('Business Name')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-input">
                                                <label class="label-title"> <?php echo e(__('Email')); ?> </label>
                                                <input value="<?php echo e($shopManage->email ?? null); ?>" name="email"
                                                    type="email" class="form--control radius-10"
                                                    placeholder="<?php echo e(__('Type Email')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-input">
                                                <label class="label-title"> <?php echo e(__('Country')); ?> </label>
                                                <div class="nice-select-two country_wrapper">
                                                    <select id="country_id" class="form--control" name="country_id">
                                                        <option value=""><?php echo e(__('Select Country')); ?></option>
                                                        <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option
                                                                <?php echo e($shopManage->country_id ?? null == $item->id ? 'selected' : ''); ?>

                                                                value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-input">
                                                <label class="label-title"> <?php echo e(__('State')); ?> </label>
                                                <div class="nice-select-two state_wrapper">
                                                    <select id="state_id" class="form-control" name="state_id">
                                                        <option value=""><?php echo e(__('Select State')); ?></option>
                                                        <?php
                                                            $states = \Modules\CountryManage\Entities\State::where('country_id', $shopManage->country_id)->get();
                                                        ?>
                                                        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value=""><?php echo e(__('Select State')); ?></option>
                                                            <option
                                                                <?php echo e($state->id == $shopManage->state_id ? 'selected' : ''); ?>

                                                                value="<?php echo e($state->id); ?>"><?php echo e($state->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-input">
                                                <label class="label-title"> <?php echo e(__('City')); ?> </label>
                                                <div class="nice-select-two city_wrapper">
                                                    <input value="<?php echo e($shopManage->city ?? null); ?>" type="text"
                                                        name="city" class="form-control form-control-sm" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-input">
                                                <label class="label-title"> <?php echo e(__('Zip Code')); ?> </label>
                                                <input value="<?php echo e($shopManage->zipcode); ?>" type="text" name="zipcode"
                                                    class="form--control radius-10" placeholder="<?php echo e(__('Zip Code')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-input">
                                                <label class="label-title"> <?php echo e(__('Number')); ?> </label>
                                                <input value="<?php echo e($shopManage->number ?? null); ?>" name="number"
                                                    type="tel" class="form--control radius-10"
                                                    placeholder="<?php echo e(__('Type Number')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="single-input">
                                                <label class="label-title"> <?php echo e(__('Address')); ?> </label>
                                                <textarea value="<?php echo e($shopManage->address ?? null); ?>" name="address" type="text" class="form--control radius-10"
                                                    placeholder="<?php echo e(__('Type Address')); ?>"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="single-input">
                                                <label class="label-title"> <?php echo e(__('Location')); ?> </label>
                                                <input value="<?php echo e($shopManage->location ?? null); ?>" name="location"
                                                    type="text" class="form--control radius-10"
                                                    placeholder="<?php echo e(__('Set Location From Map')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="single-input">
                                                <label class="label-title"> <?php echo e(__('Facebook Link')); ?> </label>
                                                <input value="<?php echo e($shopManage->facebook_url ?? null); ?>" type="url"
                                                    name="facebook_url" class="form--control radius-10"
                                                    placeholder="<?php echo e(__('Type Facebook Link')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.media-upload','data' => ['oldImage' => $shopManage->logo ?? null,'title' => __('Logo'),'name' => 'logo_id','dimentions' => '200x200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.media-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['oldImage' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($shopManage->logo ?? null),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Logo')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('logo_id'),'dimentions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('200x200')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.media-upload','data' => ['oldImage' => $shopManage->cover_photo ?? null,'title' => __('Cover Photo'),'name' => 'cover_photo_id','dimentions' => '200x200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.media-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['oldImage' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($shopManage->cover_photo ?? null),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Cover Photo')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('cover_photo_id'),'dimentions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('200x200')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                                <div class="btn-wrapper mt-4">
                                    <button type="submit"
                                        class="cmn_btn btn_bg_profile w-100"><?php echo e(__('Update Shop')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.markup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.markup'); ?>
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

<?php $__env->startSection('script'); ?>
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
        $(document).on("change", "#country_id", function() {
            let data = new FormData();

            data.append("country_id", $(this).val());
            data.append("_token", "<?php echo e(csrf_token()); ?>");

            send_ajax_request("post", data, "<?php echo e(route('admin.vendor.get.state')); ?>", function() {}, (data) => {
                $("#state_id").html(data.option);
                $(".state_wrapper .list").html(data.li);
            }, (data) => {
                prepare_errors(data);
            })
        });

        $(document).on("change", "#state_id", function() {
            let data = new FormData();

            data.append("country_id", $("#country_id").val());
            data.append("state_id", $(this).val());
            data.append("_token", "<?php echo e(csrf_token()); ?>");

            send_ajax_request("post", data, "<?php echo e(route('admin.vendor.get.city')); ?>", function() {}, (data) => {
                $("#city_id").html(data.option);
                $(".city_wrapper .list").html(data.li);
            }, (data) => {
                prepare_errors(data);
            })
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\shop-manage\update.blade.php ENDPATH**/ ?>