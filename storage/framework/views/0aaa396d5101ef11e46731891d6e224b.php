<?php $__env->startSection('title', __('keywords.add_new_testimonial')); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title"><?php echo e(__('keywords.add_new_testimonial')); ?></h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.testimonials.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <?php if (isset($component)) { $__componentOriginal54c611f5808eb808c122f307874dfe3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c611f5808eb808c122f307874dfe3a = $attributes; } ?>
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormLabel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54c611f5808eb808c122f307874dfe3a)): ?>
<?php $attributes = $__attributesOriginal54c611f5808eb808c122f307874dfe3a; ?>
<?php unset($__attributesOriginal54c611f5808eb808c122f307874dfe3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54c611f5808eb808c122f307874dfe3a)): ?>
<?php $component = $__componentOriginal54c611f5808eb808c122f307874dfe3a; ?>
<?php unset($__componentOriginal54c611f5808eb808c122f307874dfe3a); ?>
<?php endif; ?>
                                    <input type="text" name="name" class="form-control"
                                           placeholder="<?php echo e(__('keywords.name')); ?>">
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'name']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45d822e9eb9a9f889793b0925aab5602)): ?>
<?php $attributes = $__attributesOriginal45d822e9eb9a9f889793b0925aab5602; ?>
<?php unset($__attributesOriginal45d822e9eb9a9f889793b0925aab5602); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45d822e9eb9a9f889793b0925aab5602)): ?>
<?php $component = $__componentOriginal45d822e9eb9a9f889793b0925aab5602; ?>
<?php unset($__componentOriginal45d822e9eb9a9f889793b0925aab5602); ?>
<?php endif; ?>
                                </div>

                                <div class="col-md-6">
                                    <?php if (isset($component)) { $__componentOriginal54c611f5808eb808c122f307874dfe3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c611f5808eb808c122f307874dfe3a = $attributes; } ?>
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'position'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormLabel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54c611f5808eb808c122f307874dfe3a)): ?>
<?php $attributes = $__attributesOriginal54c611f5808eb808c122f307874dfe3a; ?>
<?php unset($__attributesOriginal54c611f5808eb808c122f307874dfe3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54c611f5808eb808c122f307874dfe3a)): ?>
<?php $component = $__componentOriginal54c611f5808eb808c122f307874dfe3a; ?>
<?php unset($__componentOriginal54c611f5808eb808c122f307874dfe3a); ?>
<?php endif; ?>
                                    <input type="text" name="position" class="form-control"
                                           placeholder="<?php echo e(__('keywords.position')); ?>">
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'position']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45d822e9eb9a9f889793b0925aab5602)): ?>
<?php $attributes = $__attributesOriginal45d822e9eb9a9f889793b0925aab5602; ?>
<?php unset($__attributesOriginal45d822e9eb9a9f889793b0925aab5602); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45d822e9eb9a9f889793b0925aab5602)): ?>
<?php $component = $__componentOriginal45d822e9eb9a9f889793b0925aab5602; ?>
<?php unset($__componentOriginal45d822e9eb9a9f889793b0925aab5602); ?>
<?php endif; ?>
                                </div>

                                <div class="col-md-12">
                                    <?php if (isset($component)) { $__componentOriginal54c611f5808eb808c122f307874dfe3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c611f5808eb808c122f307874dfe3a = $attributes; } ?>
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'image'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormLabel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54c611f5808eb808c122f307874dfe3a)): ?>
<?php $attributes = $__attributesOriginal54c611f5808eb808c122f307874dfe3a; ?>
<?php unset($__attributesOriginal54c611f5808eb808c122f307874dfe3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54c611f5808eb808c122f307874dfe3a)): ?>
<?php $component = $__componentOriginal54c611f5808eb808c122f307874dfe3a; ?>
<?php unset($__componentOriginal54c611f5808eb808c122f307874dfe3a); ?>
<?php endif; ?>
                                    <input type="file" name="image" class="form-control-file">
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'image']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45d822e9eb9a9f889793b0925aab5602)): ?>
<?php $attributes = $__attributesOriginal45d822e9eb9a9f889793b0925aab5602; ?>
<?php unset($__attributesOriginal45d822e9eb9a9f889793b0925aab5602); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45d822e9eb9a9f889793b0925aab5602)): ?>
<?php $component = $__componentOriginal45d822e9eb9a9f889793b0925aab5602; ?>
<?php unset($__componentOriginal45d822e9eb9a9f889793b0925aab5602); ?>
<?php endif; ?>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <?php if (isset($component)) { $__componentOriginal54c611f5808eb808c122f307874dfe3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c611f5808eb808c122f307874dfe3a = $attributes; } ?>
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'description'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormLabel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54c611f5808eb808c122f307874dfe3a)): ?>
<?php $attributes = $__attributesOriginal54c611f5808eb808c122f307874dfe3a; ?>
<?php unset($__attributesOriginal54c611f5808eb808c122f307874dfe3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54c611f5808eb808c122f307874dfe3a)): ?>
<?php $component = $__componentOriginal54c611f5808eb808c122f307874dfe3a; ?>
<?php unset($__componentOriginal54c611f5808eb808c122f307874dfe3a); ?>
<?php endif; ?>
                                    <textarea name="description" class="form-control" placeholder="<?php echo e(__('keywords.description')); ?>"></textarea>
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'description']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45d822e9eb9a9f889793b0925aab5602)): ?>
<?php $attributes = $__attributesOriginal45d822e9eb9a9f889793b0925aab5602; ?>
<?php unset($__attributesOriginal45d822e9eb9a9f889793b0925aab5602); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45d822e9eb9a9f889793b0925aab5602)): ?>
<?php $component = $__componentOriginal45d822e9eb9a9f889793b0925aab5602; ?>
<?php unset($__componentOriginal45d822e9eb9a9f889793b0925aab5602); ?>
<?php endif; ?>
                                </div>

                            </div>

                            <?php if (isset($component)) { $__componentOriginal13113c9f32f6116c43cb9fbecee94495 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13113c9f32f6116c43cb9fbecee94495 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.submit-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('submit-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal13113c9f32f6116c43cb9fbecee94495)): ?>
<?php $attributes = $__attributesOriginal13113c9f32f6116c43cb9fbecee94495; ?>
<?php unset($__attributesOriginal13113c9f32f6116c43cb9fbecee94495); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal13113c9f32f6116c43cb9fbecee94495)): ?>
<?php $component = $__componentOriginal13113c9f32f6116c43cb9fbecee94495; ?>
<?php unset($__componentOriginal13113c9f32f6116c43cb9fbecee94495); ?>
<?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/admin/testimonials/create.blade.php ENDPATH**/ ?>