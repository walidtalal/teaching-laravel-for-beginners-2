<?php $__env->startSection('title', __('keywords.show_testimonial')); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title"><?php echo e(__('keywords.show_testimonial')); ?></h2>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="name"><?php echo e(__('keywords.name')); ?></label>
                                <p class="form-control"><?php echo e($testimonial->name); ?></p>
                            </div>

                            <div class="col-md-5">
                                <label for="position"><?php echo e(__('keywords.position')); ?></label>
                                <p class="form-control"><?php echo e($testimonial->position); ?></p>
                            </div>

                            <div class="col-md-2">
                                <label for="image"><?php echo e(__('keywords.image')); ?></label>
                                <div>
                                    <img src="<?php echo e(asset("storage/testimonials/$testimonial->image")); ?>" alt="#"
                                         width="35px">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="description"><?php echo e(__('keywords.description')); ?></label>
                                <p class="form-control"><?php echo e($testimonial->description); ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/admin/testimonials/show.blade.php ENDPATH**/ ?>