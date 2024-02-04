

<?php $__env->startSection('title'); ?>
    Competition
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="lg:-mt-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-none lg:py-32">

        <div class="box-border sm:flex mb-4 border rounded-lg">

            <div class="lg:h-full lg:w-80 md:h-full md:w-full sm:h-full sm:w-full overflow-hidden">
                <img src="<?php echo e(asset('/imgs/medal.png')); ?>" alt="img" class="h-full w-full object-contain object-center rounded-md border border-gray-200">
            </div>
            
            <div class="ml-6 mt-2">

                <h3 class="text-3xl font-semibold tracking-tight text-gray-900 mb-4"><?php echo e($competition -> name); ?></h3>
                <span class="mt-1 pt-8 text-sm text-gray-500">Date: <?php echo e($competition -> date); ?></span><br><br>
                
                <?php $__currentLoopData = $competition->animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($competition->winner == $a->name): ?>
                        <span class="mt-1 pt-8 text-sm text-gray-500">Winner: </span>
                        <a class="text-indigo-600" href="<?php echo e(route('animals.show', $a->id)); ?>"> <?php echo e($competition -> winner); ?> </a><br><br>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <span class="mt-1 text-sm text-gray-500">Judge: </span>
                <a class="text-indigo-600" href="<?php echo e(route('show_judge', $competition -> judge -> id)); ?>"> <?php echo e($competition -> judge -> firstname); ?> </a> <br><br>

            </div>

        </div>

        <h2 class="text-2xl mt-6 font-bold text-gray-900">COMPETITIVES</h2>

        <div class="grid grid-cols-1 p-4 md:grid-cols-2 2xl:grid-cols-3">

            <?php $__currentLoopData = $competition->animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="box-border relative flex ml-4 mb-4 border rounded-lg">
        
                    <div class="h-48 w-48">
                        <img src="<?php echo e($a -> pet_photo); ?>" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center rounded-md border border-gray-200">
                    </div>
                    
                    <div class="ml-4 mt-2">

                        <h3 class="text-3xl font-semibold tracking-tight text-gray-900 mb-4"><?php echo e($a -> name); ?></h3>
                        <span class="mt-1 pt-8 text-sm text-gray-500"><?php echo e($a -> species); ?></span><br>
                        <span class="mt-1 text-sm text-gray-500">Owned By: </span>
                        <a class="text-indigo-600" href="<?php echo e(url('animals/owner', $a -> owner_id)); ?>"> <?php echo e('@'.$a -> owner -> firstname); ?> </a>
                        
                    </div>
                    
                    <a href="<?php echo e(route('animals.show', $a -> id)); ?>" type="button" class="absolute bottom-0 right-0 mb-4 mr-4 font-medium text-indigo-600 hover:text-indigo-500">More Details<span aria-hidden="true">&rarr;</span></a>
                
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('animal.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\www\animalTalent\resources\views/animal/competition.blade.php ENDPATH**/ ?>