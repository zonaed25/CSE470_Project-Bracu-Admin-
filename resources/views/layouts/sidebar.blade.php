<nav class="nav-max sideNav">
    <button id="toggle-nav-btn" class="circle"><i class="fas fa-stream"></i></button>
    <header class="mt-3">
        <div class="box nav-link"><img src="{{ asset('images/users/user.png') }}" alt="Profile Image"></div>
        <div class="user_info">
            <h3>{{ Auth::user()->name }}</h3>
        </div>
    </header>
    <ul class="menu">
        <br>
        <hr>
        @if (Auth::check() && Auth::user()->role == 1)
        <li class="{{ Request::is('admin') ? 'active' : '' }}">
            <a href="{{ route('admin') }}">
                <div class="box"><i class="fas fa-tachometer-alt"></i></div>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.complaint') }}">
                <div class="box"><i class="fas fa-clipboard-list"></i></div>
                <span>Complaint</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.payment') }}">
                <div class="box"><i class="fas fa-coins"></i></div>
                <span>Payment</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.announcement') }}">
                <div class="box"><i class="fas fa-volume-down"></i></div>
                <span>Announcement</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.event') }}">
                <div class="box"><i class="fas fa-calendar-day"></i></div>
                <span>Event</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.blog') }}">
                <div class="box"><i class="fas fa-newspaper"></i></div>
                <span>Blog</span>
            </a>
        </li>
        @else
        <li class="{{ Request::is('student') ? 'active' : '' }}">
            <a href="{{ route('student') }}">
                <div class="box"><i class="fas fa-tachometer-alt"></i></div>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('/') }}">
                <div class="box"><i class="fas fa-home"></i></div>
                <span>Home/Blog</span>
            </a>
        </li>
        <li>
            <a href="{{ route('/') }}">
                <div class="box"><i class="fas fa-address-card"></i></div>
                <span>Profile</span>
            </a>
        </li>
        <li>
            <a href="{{ route('/') }}">
                <div class="box"><i class="fas fa-clipboard-list"></i></div>
                <span>Complaint</span>
            </a>
        </li>
        <li>
            <a href="{{ route('/') }}">
                <div class="box"><i class="fas fa-coins"></i></div>
                <span>Payment</span>
            </a>
        </li>
        <li>
            <a href="{{ route('/') }}">
                <div class="box"><i class="fas fa-volume-down"></i></div>
                <span>Announcement</span>
            </a>
        </li>
        <li>
            <a href="{{ route('/') }}">
                <div class="box"><i class="fas fa-calendar-day"></i></div>
                <span>Event</span>
            </a>
        </li>
        <li>
            <a href="{{ route('/') }}">
                <div class="box"><i class="fas fa-phone"></i></div>
                <span>Contact</span>
            </a>
        </li>
        <li>
            <a href="{{ route('/') }}">
                <div class="box"><i class="fas fa-question"></i></div>
                <span>FAQ</span>
            </a>
        </li>
        @endif
        <li class="">
            <a href="">
                <div class="box"><i class="fas fa-key"></i></div>
                <span>Change Password</span>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}">
                <div class="box"><i class="fas fa-sign-out-alt"></i></div>
                <span>Logout</span>
            </a>
        </li>
    </ul>

</nav>