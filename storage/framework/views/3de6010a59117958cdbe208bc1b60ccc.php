<?php $__env->startSection('title', 'Contact'); ?>
<?php $__env->startSection('contact-active', 'active'); ?>

<?php $__env->startSection('hero'); ?>
    <?php if (isset($component)) { $__componentOriginal7148f0f889bac4df853ac91166bfc9ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7148f0f889bac4df853ac91166bfc9ae = $attributes; } ?>
<?php $component = App\View\Components\HeroSection::resolve(['title' => 'Contact Us','subtitle' => 'Contact'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Contact Us</div>
                <h2 class="mb-5">If You Have Any Query, Please Feel Free Contact Us</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact
                        form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're
                        done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>

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

                    <form action="<?php echo e(route('front.contact.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
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
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email"
                                           placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
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
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="subject"
                                           placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                                <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'subject']); ?> <?php echo $__env->renderComponent(); ?>
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
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <?php if (isset($component)) { $__componentOriginal45d822e9eb9a9f889793b0925aab5602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45d822e9eb9a9f889793b0925aab5602 = $attributes; } ?>
<?php $component = App\View\Components\ValidationError::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'message']); ?> <?php echo $__env->renderComponent(); ?>
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
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-for-beginners-2\resources\views/front/contact.blade.php ENDPATH**/ ?>