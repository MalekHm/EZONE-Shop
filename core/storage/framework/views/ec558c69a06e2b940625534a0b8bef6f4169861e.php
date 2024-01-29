<?php if(!empty(filter_static_option_value('language_select_option',$global_static_field_data))): ?>
    <li>
        <div class="language_dropdown" id="languages_selector">
            <div class="selected-language"><?php echo e(get_language_name_by_slug($user_select_lang_slug)); ?> <i class="fas fa-caret-down"></i></div>
            <ul>
                <?php $__currentLoopData = $all_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-value="<?php echo e($lang->slug); ?>"><?php echo e($lang->name); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\front-lang-switcher.blade.php ENDPATH**/ ?>