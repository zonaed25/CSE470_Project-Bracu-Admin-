

<?php $__env->startSection('content'); ?>
<div class="p-4">
    <div>
        <h2>Create Blog</h2>
    </div>
    <div class="mt-3">
        <form method="POST" action="<?php echo e(route('admin.blog.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" accept="jpg,png,jpeg" name="image" id="image" class="form-control p-1">
            </div>

            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="10" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-info">Add</button>
        </form>
            
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\Bracu\resources\views/admin/blog/create.blade.php ENDPATH**/ ?>