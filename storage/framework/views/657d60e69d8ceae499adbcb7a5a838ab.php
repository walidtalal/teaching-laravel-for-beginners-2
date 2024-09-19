<?php $__env->startSection('title', __('keywords.show_service')); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title"><?php echo e(__('keywords.show_service')); ?></h2>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title"><?php echo e(__('keywords.title')); ?></label>
                                <p class="form-control"><?php echo e($service->title); ?></p>
                            </div>

                            <div class="col-md-6">
                                <label for="icon"><?php echo e(__('keywords.icon')); ?></label>
                                <div class="mt-2">
                                    <i class="<?php echo e($service->icon); ?> fa-2x"></i>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="description"><?php echo e(__('keywords.description')); ?></label>
                                <p class="form-control"><?php echo e($service->description); ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/admin/services/show.blade.php ENDPATH**/ ?>