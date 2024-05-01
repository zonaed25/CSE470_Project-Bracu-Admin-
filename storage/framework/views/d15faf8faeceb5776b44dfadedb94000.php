
<?php $__env->startSection('content'); ?>
<div>
    <div class="album container mt-5">
        <div class="col-12">
            <h1 class="headding text-center pb-4">All Blogs</h1>
        </div>
        <div class="row">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="featurette-image img-fluid mx-auto" style="height: 300px; object-fit:cover;" src="<?php echo e(asset('images/blogs/' . $blog->image)); ?>">
                    <div class="card-body">
                        <h5 class="card-text"><?php echo e($blog->title); ?></h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="<?php echo e(route('student.view-blog', $blog->id)); ?>" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\Bracu\resources\views/student/blog.blade.php ENDPATH**/ ?>