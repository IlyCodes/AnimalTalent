

<?php $__env->startSection('title'); ?>
    Judge
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="lg:-mt-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-none lg:py-32">


        <div class="flex items-center gap-x-6 w-full border border-indigo-200 rounded-lg">

            <img class="lg:h-64 lg:w-64 h-32 w-32 mb-auto rounded-lg" src="<?php echo e(asset('/storage/images/1696082917ILMx_young_man_developer_set_on_the_desk_put_airpods_work_in__f088c1ea-16fc-4760-a294-bb0122a31a69.png')); ?>" alt="judge_photo">
            <div class="lg:ml-6 mt-2">
    
                <h3 class="text-2xl lg:text-3xl font-semibold tracking-tight text-gray-900 mb-4"><?php echo e($judge -> firstname); ?> <?php echo e($judge -> lastname); ?></h3>
                <span class="mt-1 pt-8 text-sm text-gray-500">Expertise: <?php echo e($judge -> expertise); ?></span><br><br>
                <p><span class="mt-1 text-sm text-gray-500">About: </span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati facilis enim iste deleniti doloribus quas distinctio, eligendi optio praesentium ex dolor quibusdam nemo numquam quis sint, sequi et, eaque repellat.</p>
                    
            </div>

        </div>

        <h2 class="text-2xl mt-6 font-bold text-gray-900">Competitions</h2>

        
        <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-5 lg:gap-x-2 sm:gap-x-6 lg:space-y-0">
            
            <?php $__currentLoopData = $judge->competitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative mb-6">

                    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                        <img src="<?php echo e(asset('/imgs/medal.png')); ?>" alt="competition_medal" class="h-full w-full bg-gray-500 object-contain object-center">
                    </div>
                    <h3 class="mt-2 text-xl font-semibold text-indigo-600">
                        <a href="<?php echo e(route('show_competition', $c -> id)); ?>">
                        <span class="absolute inset-0"></span>
                            <?php echo e($c -> name); ?>

                        </a>
                    </h3>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>


    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('animal.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\www\animalTalent\resources\views/animal/judge.blade.php ENDPATH**/ ?>