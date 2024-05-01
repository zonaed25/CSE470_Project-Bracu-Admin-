
<?php $__env->startSection('content'); ?>
<div class="main profile">
    <div class="container mt-5">
        <h1 class="text-center headding p-5">Profile</h1>
        
        <div id="accordion">
            <div class="card">
                <div class="card-header p-0" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn text-left collapsed w-100 p-3 shadow-none" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Change Name
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                    <form method="POST" action="<?php echo e(route('student.updateName')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">New name</label>
                            <input type="text" class="form-control" id="name" name="new_name" placeholder="<?php echo e(auth()->user()->name); ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header p-0" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn text-left collapsed w-100 p-3 shadow-none" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Change Password
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('change-password.submit')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" name="current_password" id="current_password" class="form-control">
                                <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" name="new_password" id="new_password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="new_password_confirmation">Confirm New Password</label>
                                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
                            </div>

                            <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/ssd1/586/22052586/public_html/Main/resources/views/student/profile.blade.php ENDPATH**/ ?>