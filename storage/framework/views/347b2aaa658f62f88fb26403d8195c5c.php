
<?php $__env->startSection('content'); ?>
<div class="p-4">
    <div>
        <h2>Announcement</h2>
    </div>
    <div class="mt-3">

        <div>
            <form method="POST" action="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <textarea class="form-control mb-3" id="details" name="details" rows="3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error voluptas quos expedita hic incidunt corrupti ratione ipsam distinctio voluptates laboriosam?</textarea>
                </div>

                <input class="btn btn-info" type="submit" value="Update">
            </form>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Websites\office\resources\views/admin/announcement/index.blade.php ENDPATH**/ ?>