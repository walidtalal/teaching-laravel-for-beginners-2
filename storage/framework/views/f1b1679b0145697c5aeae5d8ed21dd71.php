<!doctype html>
<html lang="en">

<?php echo $__env->make('admin.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="vertical  light  <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> rtl <?php endif; ?>">
<div class="wrapper">
    <?php echo $__env->make('admin.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main role="main" class="main-content">
        <?php echo $__env->yieldContent('content'); ?>
    </main> <!-- main -->
</div> <!-- .wrapper -->

<?php echo $__env->make('admin.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this record ?')) {
            document.getElementById('deleteForm-' + id).submit();
        }
    }
</script>

</body>

</html>
<?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/admin/master.blade.php ENDPATH**/ ?>