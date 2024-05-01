<section class="navigation">
    <div class="nav-container">
        <div class="brand">
            <a href="#!"><img height="50" src="<?php echo e(asset('images/logo-w.png')); ?>" alt="LOGO"></a>
        </div>
        <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
                <li class=" active">
                    <a class="active" href="#">Home</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Blogs</a>
                </li>
                <?php if(auth()->guard()->check()): ?>
                <li>
                    <a href="#!">Name</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="#!">Profile</a>
                        </li>
                        <li>
                            <a href="#!">Complaint</a>
                        </li>
                        <li>
                            <a href="#!">Payment</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('logout')); ?>">Logout</a>
                        </li>
                    </ul>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?php echo e(route('login')); ?>">Login</a>
                </li>
                <?php endif; ?>

            </ul>
        </nav>
    </div>
</section><?php /**PATH D:\xampp\htdocs\Websites\office\resources\views/layouts/nav.blade.php ENDPATH**/ ?>