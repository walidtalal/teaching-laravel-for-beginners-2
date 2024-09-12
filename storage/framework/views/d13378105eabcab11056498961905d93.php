<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <ul class="nav">
        <li class="nav-item">
            <?php echo $__env->make('admin.partials.language', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    <img src="<?php echo e(asset('assets-admin')); ?>/assets/avatars/face-1.jpg" alt="..."
                         class="avatar-img rounded-circle">
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <form action="<?php echo e(route('admin.logout')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <button class="dropdown-item text-danger" type="submit"><?php echo e(__('keywords.logout')); ?></button>
                </form>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/admin/partials/navbar.blade.php ENDPATH**/ ?>