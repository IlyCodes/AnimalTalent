

<?php $__env->startSection('title'); ?>
    Owners
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet our Pet Owners</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 grid-cols-2 md:grid-cols-3 lg:grid-cols-3 lg:gap-y-16 xl:col-span-2">
            <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="text-indigo-600 flex items-center justify-center border rounded-lg shadow-44" href="<?php echo e(url('animals/owner', $owner -> id)); ?>"> 
                <li class="p-2">
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="<?php echo e($owner -> photo); ?>" alt="owner_photo">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900"><?php echo e($owner -> firstname); ?> <?php echo e($owner -> lastname); ?></h3>
                            <p class="text-sm font-semibold leading-6 text-indigo-600">Pet Owner</p>
                        </div>
                    </div>
                </li>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('animal.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\www\animalTalent\resources\views/animal/owners.blade.php ENDPATH**/ ?>