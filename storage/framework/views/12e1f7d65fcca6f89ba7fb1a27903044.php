<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo e(asset('images/fav.ico')); ?>" type="image/x-icon">
    <title>BracU Office Management Syatem</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">

    <style>
        .profile{
            background: rgb(97,67,133);
            background: linear-gradient(45deg, rgba(97,67,133,1) 0%, rgba(81,99,149,1) 100%);
            color: #fff;
            border-radius: 0;
        }
        img{
            max-width: 300px;
        }
        a:hover{
            text-decoration: none;
        }
    </style>

</head>
<body>
    <div class="container p-5">
        <div class="profile card p-5 text-center">

            <div class="text-center">
                <img style="max-width: 180px;" src="<?php echo e(asset('images/logo.png')); ?>" alt="BracU LOGO">
            </div>
    
            <h3 class="text-center my-5 text-uppercase">Welcome to BracU Office Management System</h3>

            <div class="text-center">
                <a class="mt-4" href="<?php echo e(route('login')); ?>"><button class="btn btn-primary btn-sm d-inline">Login</button></a>
                <a class="mt-4" href="<?php echo e(route('registration')); ?>"><button class="btn btn-info btn-sm d-inline">Registration</button></a>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH /storage/ssd1/586/22052586/public_html/Main/resources/views/index.blade.php ENDPATH**/ ?>