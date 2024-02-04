

<?php $__env->startSection('title'); ?>
SHOW
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="lg:-mt-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-none lg:py-32">

        <div class="box-border sm:flex mb-4 border rounded-lg">

            <div class="lg:h-80 lg:w-full md:h-full md:w-full sm:h-full sm:w-full overflow-hidden">
                <img src="<?php echo e($animal -> pet_photo); ?>" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center rounded-md border border-gray-200 hover:object-contain">
            </div>
            
            <div class="ml-6 mt-2">

                <h3 class="text-3xl font-semibold tracking-tight text-gray-900 mb-4"><?php echo e($animal -> name); ?></h3>
                <span class="mt-1 pt-8 text-sm text-gray-500">Species: <?php echo e($animal -> species); ?></span><br><br>
                <span class="mt-1 text-sm text-gray-500">Owned By: </span>
                <a class="text-indigo-600" href="<?php echo e(url('animals/owner', $animal -> owner_id)); ?>"> <?php echo e('@'.$animal -> owner -> firstname); ?> </a> <br><br>
                <p><span class="mt-1 text-sm text-gray-500">About: </span><?php echo e($animal -> description); ?> Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati facilis enim iste deleniti doloribus quas distinctio, eligendi optio praesentium ex dolor quibusdam nemo numquam quis sint, sequi et, eaque repellat.</p>
                
            </div>

        </div>

        <h2 class="text-2xl mt-6 font-bold text-gray-900">Competitions</h2>

        <div class="grid grid-cols-1 p-4 md:grid-cols-2 2xl:grid-cols-3">

            <?php $__currentLoopData = $animal->competitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="box-border relative flex ml-4 mb-4 border rounded-lg">
        
                    <div class="h-48 w-48">
                        <img src="<?php echo e(asset('/imgs/medal.png')); ?>" alt="image" class="h-full w-full object-cover object-center rounded-md border border-gray-200">
                    </div>
                    
                    <div class="ml-4 mt-2">

                        <h3 class="text-3xl font-semibold tracking-tight text-gray-900 mb-4"><?php echo e($c -> name); ?></h3>
                        <span class="mt-1 pt-8 text-sm text-gray-500">Date: <?php echo e($c -> date); ?></span><br>
                        <span class="mt-1 text-sm text-gray-500">Judge: </span>
                        <a class="text-indigo-600" href="<?php echo e(route('show_judge', $c-> judge -> id)); ?>"> <?php echo e('@' . $c-> judge -> firstname); ?> </a> <br><br>
                        
                    </div>
                    
                    <a href="<?php echo e(route('show_competition', $c -> id)); ?>" type="button" class="absolute bottom-0 right-0 mb-4 mr-4 font-medium text-indigo-600 hover:text-indigo-500">More Details<span aria-hidden="true">&rarr;</span></a>
                
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('animal.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\www\animalTalent\resources\views/animal/show.blade.php ENDPATH**/ ?>