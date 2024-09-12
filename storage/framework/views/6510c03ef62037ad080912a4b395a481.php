<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0">BizConsult</h1>
        <!-- <img src="<?php echo e(asset('assets-front')); ?>/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="<?php echo e(route('front.index')); ?>" class="nav-item nav-link <?php echo $__env->yieldContent('home-active'); ?>">Home</a>
            <a href="<?php echo e(route('front.about')); ?>" class="nav-item nav-link <?php echo $__env->yieldContent('about-active'); ?>">About</a>
            <a href="<?php echo e(route('front.service')); ?>" class="nav-item nav-link <?php echo $__env->yieldContent('service-active'); ?>">Service</a>
            <a href="<?php echo e(route('front.contact')); ?>" class="nav-item nav-link <?php echo $__env->yieldContent('contact-active'); ?>">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar -->
<?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/front/partials/navbar.blade.php ENDPATH**/ ?>