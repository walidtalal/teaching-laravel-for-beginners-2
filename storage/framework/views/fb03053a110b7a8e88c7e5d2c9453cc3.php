<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('front.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<div class="container-xxl bg-white p-0">
    <?php echo $__env->make('front.partials.spinner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <?php echo $__env->make('front.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('hero'); ?>
    </div>
    <!-- Navbar & Hero End -->

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('front.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<?php echo $__env->make('front.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/front/master.blade.php ENDPATH**/ ?>