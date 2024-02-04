

<?php $__env->startSection('title'); ?>
    Competitions
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="lg:ml-48 lg:mr-48 lg:mt-12 relative overflow-x-auto">
        <table class="w-full text-sm text-left border border-indigo-200 rounded-lg text-indigo-500">

            <thead class="text-xs text-indigo-700 uppercase bg-indigo-50">

                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        COMPETITION
                    </th>
                    <th scope="col" class="px-6 py-3">
                        COMPETITIVES
                    </th>
                    <th scope="col" class="px-6 py-3">
                        JUDGE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Winner
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DATE
                    </th>
                </tr>
                
            </thead>

            <tbody>

                <?php $__currentLoopData = $competitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $competition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="bg-white border-b">

                    <td class="px-6 py-4">
                        <?php echo e($competition -> id); ?>

                    </td>

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <a href="<?php echo e(route('show_competition', $competition -> id)); ?>"><?php echo e($competition -> name); ?></a>
                    </th>
                    
                    <td class="px-6 py-4">
                         
                        <?php echo e($competition -> animals_count); ?>

                        
                    </td>

                    <td class="px-6 py-4">
                        <a href="<?php echo e(route('show_judge', $competition->judge->id)); ?>"><?php echo e($competition->judge->firstname); ?></a>
                    </td>

                    <td class="px-6 py-4">
                        
                            <?php $__currentLoopData = $competition->animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($competition->winner == $a->name): ?>
                                    <a href="<?php echo e(route('animals.show', $a->id)); ?>"><?php echo e($competition -> winner); ?></a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                    </td>

                    <td class="px-6 py-4">
                        <?php echo e($competition -> date); ?>

                    </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>

        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('animal.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\www\animalTalent\resources\views/animal/competitions.blade.php ENDPATH**/ ?>