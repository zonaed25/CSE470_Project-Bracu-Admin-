
<?php $__env->startSection('content'); ?>
<div class="p-4">
    <div>
        <h2>All Event</h2>
        <a href="<?php echo e(route('event.create')); ?>"><button class="btn btn-info">Create</button></a>
    </div>

    <div class="mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th style="min-width:150px" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($event->date); ?></td>
                        <td><?php echo e($event->title); ?></td>
                        <td class="align-middle">
                            <a href="<?php echo e(route('admin.event.edit', $event)); ?>" class="btn btn-sm btn-success">Edit</a>
                            <form action="<?php echo e(route('admin.event.destroy', $event)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?> 
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Event?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\bracu\resources\views/admin/event/index.blade.php ENDPATH**/ ?>