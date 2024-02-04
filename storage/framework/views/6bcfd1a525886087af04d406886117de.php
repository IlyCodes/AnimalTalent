

<?php $__env->startSection('title'); ?>
Owner
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h1 class="text-xl ml-2 2xl:ml-20 mt-8 font-semibold text-gray-900">Pet Owner</h1>

<div class="ml-2 mr-2 2xl:ml-20 2xl:mr-20 border rounded-lg">

  <div class="flex items-center p-8">
    <div class="flex items-center">
      <img class="h-32 w-32 rounded-full" src="<?php echo e($owner -> photo); ?>" alt="photo">
      <div class="ml-4">
        <h3 class="text-lg font-semibold text-gray-900"><?php echo e($owner -> firstname); ?> <?php echo e($owner -> lastname); ?></h3>
        <?php
        foreach($animals as $a){
        $species = array($a);
        };
        $specie = array_unique($species);
        $specie = $specie[0]->species;
        echo '<p class="text-sm font-semibold text-indigo-600">'.ucfirst($specie).' Owner</p>';
        ?>
      </div>
    </div>
    <div class="ml-12 md:ml-40 lg:ml-80">
      <h3 class="text-sm font-bold text-gray-900">About Me</h3>
      <p class="text-sm font-semibold text-gray-500"><?php echo e($owner->about); ?></p>
    </div>
  </div>

  <h2 class="text-2xl font-bold tracking-tight text-gray-900 pl-8">My Pets</h2>

  <div class="grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 p-2 ml-2 mr-4">

    <?php $__currentLoopData = $animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="box-border relative flex ml-4 mb-4 border rounded-lg">

      <div class="h-48 w-48">
        <img src="<?php echo e($a -> pet_photo); ?>" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center rounded-md border border-gray-200 hover:object-contain">
      </div>

      <div class="ml-2 mt-2">

        <h3 class="text-3xl font-semibold tracking-tight text-gray-900 mb-4"><?php echo e($a -> name); ?></h3>
        <span class="mt-1 pt-8 text-sm text-gray-500"><?php echo e($a -> species); ?></span><br>
        <p><span class="mt-1 pt-8 text-sm text-gray-500">Age: </span><?php echo e($a -> age); ?>j</p>

      </div>

      <a href="<?php echo e(route('animals.show', $a -> id)); ?>" type="button" class="absolute bottom-0 right-0 ml-2 mb-2 font-medium text-indigo-600 hover:text-indigo-500">More Details<span aria-hidden="true">&rarr;</span></a>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('animal.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\www\animalTalent\resources\views/animal/owner.blade.php ENDPATH**/ ?>