<?php $__env->startSection('title', 'Service'); ?>
<?php $__env->startSection('service-active', 'active'); ?>

<?php $__env->startSection('hero'); ?>
    <?php if (isset($component)) { $__componentOriginal7148f0f889bac4df853ac91166bfc9ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7148f0f889bac4df853ac91166bfc9ae = $attributes; } ?>
<?php $component = App\View\Components\HeroSection::resolve(['title' => 'Services','subtitle' => 'Services'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('hero-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HeroSection::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7148f0f889bac4df853ac91166bfc9ae)): ?>
<?php $attributes = $__attributesOriginal7148f0f889bac4df853ac91166bfc9ae; ?>
<?php unset($__attributesOriginal7148f0f889bac4df853ac91166bfc9ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7148f0f889bac4df853ac91166bfc9ae)): ?>
<?php $component = $__componentOriginal7148f0f889bac4df853ac91166bfc9ae; ?>
<?php unset($__componentOriginal7148f0f889bac4df853ac91166bfc9ae); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>




















































































































































































<?php if (isset($component)) { $__componentOriginalc8f9b51eae3cb66c663137afcc96c605 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc8f9b51eae3cb66c663137afcc96c605 = $attributes; } ?>
<?php $component = App\View\Components\FrontServicesComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-services-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontServicesComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc8f9b51eae3cb66c663137afcc96c605)): ?>
<?php $attributes = $__attributesOriginalc8f9b51eae3cb66c663137afcc96c605; ?>
<?php unset($__attributesOriginalc8f9b51eae3cb66c663137afcc96c605); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc8f9b51eae3cb66c663137afcc96c605)): ?>
<?php $component = $__componentOriginalc8f9b51eae3cb66c663137afcc96c605; ?>
<?php unset($__componentOriginalc8f9b51eae3cb66c663137afcc96c605); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal650766d56a6bbb34a5ed4239f19cbad9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal650766d56a6bbb34a5ed4239f19cbad9 = $attributes; } ?>
<?php $component = App\View\Components\FrontTestimonialsComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-testimonials-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontTestimonialsComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal650766d56a6bbb34a5ed4239f19cbad9)): ?>
<?php $attributes = $__attributesOriginal650766d56a6bbb34a5ed4239f19cbad9; ?>
<?php unset($__attributesOriginal650766d56a6bbb34a5ed4239f19cbad9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal650766d56a6bbb34a5ed4239f19cbad9)): ?>
<?php $component = $__componentOriginal650766d56a6bbb34a5ed4239f19cbad9; ?>
<?php unset($__componentOriginal650766d56a6bbb34a5ed4239f19cbad9); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/front/service.blade.php ENDPATH**/ ?>