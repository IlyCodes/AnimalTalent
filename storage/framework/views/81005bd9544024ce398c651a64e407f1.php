

<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('update_competition', $competitionData->id)); ?>" method="post">
    
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="lg:ml-48 lg:mr-48 ml-4 mr-4">

            <div class="mt-10 grid grid-cols-2 gap-x-6 gap-y-8">
                <div class="sm:col-span-1">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                <div class="mt-2">
                    <input type="text" name="name" id="name" value="<?php echo e($competitionData->name); ?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-1">
                <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                <div class="mt-2">
                    <input type="date" name="date" id="date" value="<?php echo e($competitionData->date); ?>"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
                
                <div class="sm:col-span-1">
                    <label for="winner" class="block text-sm font-medium leading-6 text-gray-900">Winner</label>
                    <div class="mt-2">
                        <input type="text" name="winner" id="winner" value="<?php echo e($competitionData->winner); ?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                <!-- <div class="mt-2">
                    <select class="rounded-lg" name="expertise" id="expertise">
                        <option value="Bird Examiner">Bird Examiner</option>
                        <option value="Dog Examiner">Dog Examiner</option>
                        <option value="Cat Examiner">Cat Examiner</option>
                        <option value="Pet Examiner">Pet Examiner</option>
                    </select>
                </div> -->
                </div>

                <div class="sm:col-span-1">
                <label for="finished" class="block text-sm font-medium leading-6 text-gray-900">Finished</label>
                <div class="mt-2">
                    <input type="number" name="finished" id="finished" value="<?php echo e($competitionData->finished); ?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-2">
                <label for="judge" class="block text-sm font-medium leading-6 text-gray-900">Judge</label>
                <div class="mt-2">
                    <select class="rounded-lg" name="judge_id" id="judge">

                        <option class="hidden" value="<?php echo e($judge -> id); ?>"><?php echo e($judge -> firstname); ?> <?php echo e($judge -> lastname); ?></option>

                        <?php $__currentLoopData = $judges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $judge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option value="<?php echo e($judge->id); ?>"><?php echo e($judge->firstname); ?> <?php echo e($judge->lastname); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>
                </div>
            
            </div>

            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.btn','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            
        </div>


    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\www\animalTalent\resources\views/admin/editCompetition.blade.php ENDPATH**/ ?>