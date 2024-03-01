<?php $__env->startSection('content'); ?>
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <?php if(Route::has('login')): ?>
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        <?php else: ?>
        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        <?php if(Route::has('register')): ?>
        <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        <?php endif; ?>
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <div class="wrapper">
        <div class="pizzas">
            <h1>Pizza list</h1>
            <?php for($i = 0; $i < count($pizzas); $i++): ?>
                <div><?php echo e($pizzas[$i]->type); ?> - <?php echo e($pizzas[$i]->base); ?> - <?php echo e($pizzas[$i]->name); ?></div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Michael\Desktop\pizzahouse\resources\views/pizzalist.blade.php ENDPATH**/ ?>