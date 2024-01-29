<div class="form-group permalink">
    <div class="permalink_top_part">
        <label class="text-dark"><?php echo e(__('Permalink * :')); ?> <span class="permalink_top_url_class"></span></label>
        <span class="display-inline permalink_top_slug_show"></span>
        <button class="btn btn-primary btn-sm slug_edit_button"> <i class="las la-edit"></i> </button>
    </div>

    <div class="permalink_bottom_part d-none">
        <input type="text" name="slug" class="form-control permalink_bottom_blog_slug_input_field mt-2" value="<?php echo e($value ?? ''); ?>" >
        <button class="btn btn-info btn-sm slug_update_button mt-2" ><?php echo e(__('Update')); ?></button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\components\slug\edit-markup.blade.php ENDPATH**/ ?>