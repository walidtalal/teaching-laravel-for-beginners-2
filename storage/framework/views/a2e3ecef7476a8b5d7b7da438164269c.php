<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i><?php echo e($settings->address); ?></p>
                <p><i class="fa fa-phone-alt me-3"></i><?php echo e($settings->phone); ?></p>
                <p><i class="fa fa-envelope me-3"></i><?php echo e($settings->email); ?></p>
                <div class="d-flex pt-2">
                    <?php if($settings->twitter): ?>
                        <a class="btn btn-outline-light btn-social" target="_blank" href="<?php echo e($settings->twitter); ?>"><i
                                class="fab fa-twitter"></i></a>
                    <?php endif; ?>

                    <?php if($settings->facebook): ?>
                        <a class="btn btn-outline-light btn-social" target="_blank" href="<?php echo e($settings->facebook); ?>"><i
                                class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>

                    <?php if($settings->youtube): ?>
                        <a class="btn btn-outline-light btn-social" target="_blank" href="<?php echo e($settings->youtube); ?>"><i
                                class="fab fa-youtube"></i></a>
                    <?php endif; ?>

                    <?php if($settings->instagram): ?>
                        <a class="btn btn-outline-light btn-social" target="_blank" href="<?php echo e($settings->instagram); ?>"><i
                                class="fab fa-instagram"></i></a>
                    <?php endif; ?>

                    <?php if($settings->linkedin): ?>
                        <a class="btn btn-outline-light btn-social" target="_blank" href="<?php echo e($settings->linkedin); ?>"><i
                                class="fab fa-linkedin-in"></i></a>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Quick Link</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Career</a>
            </div>
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Popular Link</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Career</a>
            </div>
        </div>
    </div>
    <?php echo $__env->make('front.partials.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- Footer End -->
<?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/front/partials/footer.blade.php ENDPATH**/ ?>