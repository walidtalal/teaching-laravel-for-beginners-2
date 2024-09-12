<form action="<?php echo e($href); ?>" method="post" class="d-inline" id="deleteForm-<?php echo e($id); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo e($id); ?>)">
        <i class="fe fe-trash-2 fa-2x"></i>
    </button>
</form>
<?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/components/delete-button.blade.php ENDPATH**/ ?>