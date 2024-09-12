<?php $__env->startSection('title', __('keywords.testimonials')); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title"><?php echo e(__('keywords.testimonials')); ?></h2>

                    <div class="page-title-right">
                        <?php if (isset($component)) { $__componentOriginale9eefe50b390207aad69b8e237e3dc7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d = $attributes; } ?>
<?php $component = App\View\Components\ActionButton::resolve(['href' => ''.e(route('admin.testimonials.create')).'','type' => 'create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ActionButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $attributes = $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $component = $__componentOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
                    </div>
                </div>

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

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th><?php echo e(__('keywords.name')); ?></th>
                                <th><?php echo e(__('keywords.position')); ?></th>
                                <th width="10%"><?php echo e(__('keywords.image')); ?></th>
                                <th width="15%"><?php echo e(__('keywords.actions')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(count($testimonials) > 0): ?>
                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($testimonials->firstItem() + $loop->index); ?></td>
                                        <td><?php echo e($testimonial->name); ?></td>
                                        <td><?php echo e($testimonial->position); ?></td>
                                        <td>
                                            <img src="<?php echo e(asset("storage/testimonials/$testimonial->image")); ?>"
                                                 alt="#" width="50px">
                                        </td>
                                        <td>
                                            <?php if (isset($component)) { $__componentOriginale9eefe50b390207aad69b8e237e3dc7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d = $attributes; } ?>
<?php $component = App\View\Components\ActionButton::resolve(['href' => ''.e(route('admin.testimonials.edit', ['testimonial' => $testimonial])).'','type' => 'edit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ActionButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $attributes = $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $component = $__componentOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>

                                            <?php if (isset($component)) { $__componentOriginale9eefe50b390207aad69b8e237e3dc7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d = $attributes; } ?>
<?php $component = App\View\Components\ActionButton::resolve(['href' => ''.e(route('admin.testimonials.show', ['testimonial' => $testimonial])).'','type' => 'show'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ActionButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $attributes = $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $component = $__componentOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>

                                            <?php if (isset($component)) { $__componentOriginal2550ac35d7599d92e03b1bde3934d26a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2550ac35d7599d92e03b1bde3934d26a = $attributes; } ?>
<?php $component = App\View\Components\DeleteButton::resolve(['href' => ''.e(route('admin.testimonials.destroy', ['testimonial' => $testimonial])).'','id' => ''.e($testimonial->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('delete-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DeleteButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2550ac35d7599d92e03b1bde3934d26a)): ?>
<?php $attributes = $__attributesOriginal2550ac35d7599d92e03b1bde3934d26a; ?>
<?php unset($__attributesOriginal2550ac35d7599d92e03b1bde3934d26a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2550ac35d7599d92e03b1bde3934d26a)): ?>
<?php $component = $__componentOriginal2550ac35d7599d92e03b1bde3934d26a; ?>
<?php unset($__componentOriginal2550ac35d7599d92e03b1bde3934d26a); ?>
<?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php if (isset($component)) { $__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.empty-alert','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('empty-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8)): ?>
<?php $attributes = $__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8; ?>
<?php unset($__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8)): ?>
<?php $component = $__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8; ?>
<?php unset($__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8); ?>
<?php endif; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                        <?php echo e($testimonials->render('pagination::bootstrap-4')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/admin/testimonials/index.blade.php ENDPATH**/ ?>