<?php
    $locale = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
?>
<a class="nav-link text-muted my-2" href="<?php echo e(LaravelLocalization::getLocalizedURL($locale)); ?>" id="langSwitcher">
    <?php echo e(strtoupper($locale)); ?>

</a>
<?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/admin/partials/language.blade.php ENDPATH**/ ?>