
<?php $__env->startSection('content'); ?>
<div class="container pt-5">
    <div>
        <h2>My Complaints</h2>
        <a href="<?php echo e(route('student.make-complaint')); ?>"><button class="btn btn-sm btn-primary">Add</button></a>
    </div>

    <div class="mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Complaint</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($complaint->complaint); ?></td>
                    <td class="align-middle">
                        <?php if($complaint->status == 'pending'): ?>
                        <a href="#" class="btn btn-sm btn-success">Pending</a>
                        <?php elseif($complaint->status == 'solved'): ?>
                        <a href="#" class="btn btn-sm btn-secondary">Solved</a>
                        <?php else: ?>
                        <span class="text-danger">Invalid Status</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/ssd1/586/22052586/public_html/Main/resources/views/student/complaint.blade.php ENDPATH**/ ?>