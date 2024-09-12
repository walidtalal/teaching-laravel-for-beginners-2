<?php $__env->startSection('title', __('keywords.settings')); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title"><?php echo e(__('keywords.settings')); ?></h2>

                <div class="card shadow">
                    <div class="card-body">
                        <?php if (isset($component)) { $__componentOriginale9af99bfa2d53af14a65b48d2181bd41 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9af99bfa2d53af14a65b48d2181bd41 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.success-alert','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9af99bfa2d53af14a65b48d2181bd41)): ?>
<?php $attributes = $__attributesOriginale9af99bfa2d53af14a65b48d2181bd41; ?>
<?php unset($__attributesOriginale9af99bfa2d53af14a65b48d2181bd41); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9af99bfa2d53af14a65b48d2181bd41)): ?>
<?php $component = $__componentOriginale9af99bfa2d53af14a65b48d2181bd41; ?>
<?php unset($__componentOriginale9af99bfa2d53af14a65b48d2181bd41); ?>
<?php endif; ?>

                        <form action="<?php echo e(route('admin.settings.update', ['setting' => $setting])); ?>" method="post"
                              enctype="multipart/form-data">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <?php if (isset($component)) { $__componentOriginal54c611f5808eb808c122f307874dfe3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c611f5808eb808c122f307874dfe3a = $attributes; } ?>
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'phone'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input type="text" name="phone" class="form-control"
                                           placeholder="<?php echo e(__('keywords.phone')); ?>" value="<?php echo e($setting->phone); ?>">
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'phone']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input type="text" name="email" class="form-control"
                                           placeholder="<?php echo e(__('keywords.email')); ?>" value="<?php echo e($setting->email); ?>">
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'email']); ?> <?php echo $__env->renderComponent(); ?>
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

                                <div class="col-md-6 mt-2">
                                    <?php if (isset($component)) { $__componentOriginal54c611f5808eb808c122f307874dfe3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c611f5808eb808c122f307874dfe3a = $attributes; } ?>
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'address'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input type="text" name="address" class="form-control"
                                           placeholder="<?php echo e(__('keywords.address')); ?>" value="<?php echo e($setting->address); ?>">
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'address']); ?> <?php echo $__env->renderComponent(); ?>
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

                                <div class="col-md-6 mt-2">
                                    <?php if (isset($component)) { $__componentOriginal54c611f5808eb808c122f307874dfe3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c611f5808eb808c122f307874dfe3a = $attributes; } ?>
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'facebook'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input type="url" name="facebook" class="form-control"
                                           placeholder="<?php echo e(__('keywords.facebook')); ?>" value="<?php echo e($setting->facebook); ?>">
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'facebook']); ?> <?php echo $__env->renderComponent(); ?>
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

                                <div class="col-md-6 mt-2">
                                    <?php if (isset($component)) { $__componentOriginal54c611f5808eb808c122f307874dfe3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c611f5808eb808c122f307874dfe3a = $attributes; } ?>
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'linkedin'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input type="url" name="linkedin" class="form-control"
                                           placeholder="<?php echo e(__('keywords.linkedin')); ?>" value="<?php echo e($setting->linkedin); ?>">
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'linkedin']); ?> <?php echo $__env->renderComponent(); ?>
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

                                <div class="col-md-6 mt-2">
                                    <?php if (isset($component)) { $__componentOriginal54c611f5808eb808c122f307874dfe3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c611f5808eb808c122f307874dfe3a = $attributes; } ?>
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'twitter'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input type="url" name="twitter" class="form-control"
                                           placeholder="<?php echo e(__('keywords.twitter')); ?>" value="<?php echo e($setting->twitter); ?>">
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'twitter']); ?> <?php echo $__env->renderComponent(); ?>
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

                                <div class="col-md-6 mt-2">
                                    <?php if (isset($component)) { $__componentOriginal54c611f5808eb808c122f307874dfe3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c611f5808eb808c122f307874dfe3a = $attributes; } ?>
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'instagram'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input type="url" name="instagram" class="form-control"
                                           placeholder="<?php echo e(__('keywords.instagram')); ?>" value="<?php echo e($setting->instagram); ?>">
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'instagram']); ?> <?php echo $__env->renderComponent(); ?>
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

                                <div class="col-md-6 mt-2">
                                    <?php if (isset($component)) { $__componentOriginal54c611f5808eb808c122f307874dfe3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c611f5808eb808c122f307874dfe3a = $attributes; } ?>
<?php $component = App\View\Components\FormLabel::resolve(['field' => 'youtube'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input type="url" name="youtube" class="form-control"
                                           placeholder="<?php echo e(__('keywords.youtube')); ?>" value="<?php echo e($setting->youtube); ?>">
                                    <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'youtube']); ?> <?php echo $__env->renderComponent(); ?>
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/admin/settings/index.blade.php ENDPATH**/ ?>