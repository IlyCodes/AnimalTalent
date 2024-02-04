

<?php $__env->startSection('title'); ?>
LIST
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="p-8 grid grid-cols-1">
        
        <form class="w-full flex justify-center" action="<?php echo e(route('search')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="flex">
                
                <select name='searchBy' class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:outline-none focus:bg-gray-100">
                    <option class="hidden">Search By</option>
                    <option value="Animal">Animal</option>
                    <option value="Owner">Owner</option>
                </select>

                <div class="relative w-full">
                    <input type="search" name="searchFor" class="block p-2.5 w-full z-20 text-sm text-blue-900 bg-blue-50 rounded-r-lg border-l-blue-50 border-l-2 border border-blue-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search Animal, Owners..." required>
                    <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>

            </div>

        </form>

    </div>

    <div class="grid grid-cols-1 p-4 ml-4 mr-8 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4">

            <?php $__currentLoopData = $animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="box-border relative flex ml-4 mb-4 border rounded-lg">
        
                    <div class="h-48 w-48">
                        <img src="<?php echo e($a -> pet_photo); ?>" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center rounded-md border border-gray-200">
                    </div>
                    
                    <div class="ml-6 mt-2">

                        <h3 class="text-3xl font-semibold tracking-tight text-gray-900 mb-4"><?php echo e($a -> name); ?></h3>
                        <span class="mt-1 pt-8 text-sm text-gray-500"><?php echo e($a -> species); ?></span><br>
                        <span class="mt-1 text-sm text-gray-500">Owned By: </span>
                        <a class="text-indigo-600" href="<?php echo e(url('animals/owner', $a -> owner_id)); ?>"> <?php echo e('@'.$a -> owner -> firstname); ?> </a>
                        
                    </div>
                    
                    <a href="<?php echo e(route('animals.show', $a -> id)); ?>" type="button" class="absolute bottom-0 right-0 mb-4 mr-4 font-medium text-indigo-600 hover:text-indigo-500">More Details<span aria-hidden="true">&rarr;</span></a>
                
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
        
    <div class="ml-16 mr-16 mb-8">
        <?php echo e($animals->links('pagination::tailwind')); ?>

    </div>       
       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('animal.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\www\animalTalent\resources\views/animal/index.blade.php ENDPATH**/ ?>