<!-- Testimonial Start -->
<?php if(count($testimonials) > 0): ?>
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
                <h2 class="mb-5">What Our Clients Say!</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p><?php echo e($testimonial->description); ?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                 src="<?php echo e(asset("storage/testimonials/$testimonial->image")); ?>">
                            <div class="ps-3">
                                <h6 class="mb-1"><?php echo e($testimonial->name); ?></h6>
                                <small><?php echo e($testimonial->position); ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- Testimonial End -->
<?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/components/front-testimonials-component.blade.php ENDPATH**/ ?>