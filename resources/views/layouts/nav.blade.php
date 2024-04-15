<section class="navigation">
    <div class="nav-container">
        <div class="brand">
            <a href="#!"><img height="50" src="{{ asset('images/logo-w.png') }}" alt="LOGO"></a>
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
                @auth
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
                            <a href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                </li>
                @else
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
                @endauth

            </ul>
        </nav>
    </div>
</section>