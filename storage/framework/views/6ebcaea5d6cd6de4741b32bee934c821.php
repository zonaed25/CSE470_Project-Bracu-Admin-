

<?php $__env->startSection('content'); ?>
<div class="p-4">
    <div>
        <h2>All Complaint</h2>
    </div>

    <div class="mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Complaint</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($complaint->user->name); ?></td>
                    <td><?php echo e($complaint->user->email); ?></td>
                    <td><?php echo e($complaint->complaint); ?></td>
                    <td><?php echo e($complaint->created_at->format('d-M-Y')); ?></td>
                    <td class="align-middle">
                        <?php if($complaint->status == 'pending'): ?>
                        <button class="btn btn-info btn-update-status" data-complaint-id="<?php echo e($complaint->id); ?>">Mark as Solved</button>
                        <?php else: ?>
                        <span class="btn badge-secondary">Solved</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function() {
        $('.btn-update-status').click(function(e) {
            e.preventDefault();
            var complaintId = $(this).data('complaint-id');
            
            // Show confirmation dialog
            var confirmResult = confirm("Are you sure you want to mark this complaint as solved?");
            
            // If user confirms, send AJAX request
            if (confirmResult) {
                $.ajax({
                    type: 'PUT',
                    url: '<?php echo e(route("admin.complaint.updateStatus", ":id")); ?>'.replace(':id', complaintId),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\Bracu\resources\views/admin/complaint/index.blade.php ENDPATH**/ ?>