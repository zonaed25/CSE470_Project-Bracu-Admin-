

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e($blog->title); ?></div>

                <div class="card-body">
                    <img src="<?php echo e(asset('images/blogs/' . $blog->image)); ?>" class="img-fluid mb-3" alt="Blog Image">
                    <p><?php echo e($blog->description); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\Bracu\resources\views/student/blog-view.blade.php ENDPATH**/ ?>