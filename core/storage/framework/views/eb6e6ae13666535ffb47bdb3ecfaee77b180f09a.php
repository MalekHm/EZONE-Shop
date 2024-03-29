<?php
    $modal = $modal ?? false;
?>

<div class="checkout-inner mt-4">
    <h4 class="title"> <?php echo e(__("Billing Details")); ?> </h4>
    <div class="checkout-contents">
        <div class="checkout-form mt-2">

            <?php if(!$modal): ?>
                <?php endif; ?>
                <?php if($modal): ?>
                    <div class="input-flex-item">
                        <div class="single-input mt-4">
                            <label class="label-title mb-3"> <?php echo e(__("Shipping Address Name")); ?> </label>
                            <input class="form--control" type="text" name="shipping_address_name" value="<?php echo e(old("shipping_address_name") ?? ""); ?>" placeholder="<?php echo e(__("Shipping Address Name.")); ?>">
                        </div>
                    </div>
                <?php endif; ?>

                <div class="input-flex-item">
                    <div class="single-input mt-4">
                        <label class="label-title mb-3"> <?php echo e(__("Full Name")); ?> </label>
                        <input class="form--control" id="<?php echo e(!$modal ? "name" : "modal_name"); ?>" type="text" name="full_name" value="<?php echo e(old("full_name") ?? ""); ?>" placeholder="<?php echo e(__("Type First Name")); ?>">
                    </div>
                </div>

                <div class="input-flex-item">
                    <div class="single-input mt-4">
                        <label class="label-title mb-3"> <?php echo e(__("Address")); ?> </label>
                        <input class="form--control" type="text" name="address" value="<?php echo e(old("address") ?? ""); ?>" id="<?php echo e(!$modal ? "address" : "modal_address"); ?>" placeholder="<?php echo e(__("Type Address")); ?>">
                    </div>
                </div>

                <div class="input-flex-item">
                    <div class="single-input mt-4">
                        <label class="label-title mb-3"> <?php echo e(__("Country")); ?> </label>
                        <select  class="<?php echo \Illuminate\Support\Arr::toCssClasses(['form--control', 'modal-country' => !$modal ]) ?>" id="<?php echo e(!$modal ? "country_id" : "modal_country_id"); ?>" type="text" name="country_id">
                            <option value=""><?php echo e(__("Select an Country")); ?></option>
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e((old('country_id') ?? 0) == $country->id ? "selected" : ""); ?> value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="single-input mt-4">
                        <label class="label-title mb-3"> <?php echo e(__("State")); ?> </label>
                        <select id="<?php echo e(!$modal ? "state_id" : "modal_state_id"); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                            'form--control select-state',
                             'modal-states' => !$modal
                        ]) ?>" type="text" name="state_id">
                            <option value=""><?php echo e(__("Select country first...")); ?></option>
                        </select>
                    </div>
                </div>

                <div class="input-flex-item">
                    <div class="single-input mt-4">
                        <label class="label-title mb-3"> <?php echo e(__("City/Town")); ?> </label>
                        <select id="<?php echo e(!$modal ? "city_id" : "modal_city_id"); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                            'form--control select-state',
                             'modal-states' => !$modal
                        ]) ?>" type="text" name="city">
                            <option value=""><?php echo e(__("Select state first...")); ?></option>
                        </select>
                    </div>
                    <div class="single-input mt-4">
                        <label class="label-title mb-3"> <?php echo e(__("Zip Code")); ?> </label>
                        <input class="form--control" type="text" name="zip_code" value="<?php echo e(old("zip_code") ?? ""); ?>" id="<?php echo e(!$modal ? "zipcode" : "modal_zipcode"); ?>" placeholder="<?php echo e(__("Type Zip Code")); ?>">
                    </div>
                </div>

                <div class="input-flex-item">
                    <div class="single-input mt-4">
                        <label class="label-title mb-3"> <?php echo e(__("Mobile Number")); ?> </label>
                        <input class="form--control" type="tel" name="phone" value="<?php echo e(old("phone") ?? ""); ?>" id="<?php echo e(!$modal ? "phone" : "modal_phone"); ?>" placeholder="<?php echo e(__("Type Mobile Number")); ?>">
                    </div>
                    <div class="single-input mt-4">
                        <label class="label-title mb-3"> <?php echo e(__("Email Address")); ?> </label>
                        <input class="form--control" type="text" name="email" value="<?php echo e(old("email") ?? ""); ?>" id="<?php echo e(!$modal ? "email" : "modal_email"); ?>" placeholder="<?php echo e(__("Type Email")); ?>">
                    </div>
                </div>

            <?php if(!$modal): ?>
                <div class="input-flex-item">
                    <div class="single-input mt-4">
                        <label class="label-title mb-3"> <?php echo e(__("Order Notes")); ?> </label>
                        <textarea class="form--control form--message" name="note" value="<?php echo e(old("note") ?? ""); ?>" id="message" placeholder="<?php echo e(__("Type Messages")); ?>"></textarea>
                    </div>
                </div>

                <?php echo $__env->make('frontend.cart.partials.create-account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
                <button class="btn btn-info mt-4"><?php echo e(__("Create Shipping Address")); ?></button>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views/frontend/cart/partials/billing-info.blade.php ENDPATH**/ ?>