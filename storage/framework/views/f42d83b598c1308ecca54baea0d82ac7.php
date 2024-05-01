<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="shortcut icon" href="<?php echo e(asset('images/fav.ico')); ?>" type="image/x-icon">
    <title>BracU Office Management Syatem</title>


    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.css">

    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" />

    <style>
        .alert_message{
            position: fixed;
            bottom: 10px;
            right: 10px;
            max-width: 300px;
        }
    </style>

    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>

    <div>
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="content">        
        <?php echo $__env->yieldContent('content'); ?>
    </div>


    <div class="alert_message" id="alert_message">
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger"><?php echo e($error); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php if(session()->has('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <?php if(session()->has('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
    </div>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.js"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>

<script>
    var myAlertElement = document.getElementById("alert_message");

    function hideMyAlert() {
        myAlertElement.style.display = "none";
    }

    setTimeout(hideMyAlert, 3000);

</script>


<?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>
<?php /**PATH J:\bracu\resources\views/layouts/app.blade.php ENDPATH**/ ?>