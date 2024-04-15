<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset('images/fav.ico') }}" type="image/x-icon">
    <title>Login-BracU Office Management Syatem</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .login-dark {
            height: 1000px;
            background-size: cover;
            position: relative;
        }

        .login-dark form {
            max-width: 320px;
            width: 90%;
            background: rgb(97,67,133);
            background: linear-gradient(45deg, rgba(97,67,133,1) 0%, rgba(81,99,149,1) 100%);
            padding: 20px;
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.2);
        }

        .login-dark .illustration {
            text-align: center;
            padding: 15px 0 20px;
        }

        .login-dark .illustration img {
            width: 80px;
        }

        .login-dark form .form-control {
            background: none;
            border: none;
            border-bottom: 1px solid #434a52;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
            background: #fff;
        }

        .login-dark form .btn-primary {
            background: #0054a5;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 26px;
            text-shadow: none;
            outline: none;
        }

        .login-dark form .btn-primary:hover,
        .login-dark form .btn-primary:active {
            background: #214a80;
            outline: none;
        }

        .login-dark form .muted {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #fff;
            opacity: 0.9;
            text-decoration: none;
            margin-bottom: 0;
        }

        .login-dark form .btn-primary:active {
            transform: translateY(1px);
        }

        .alert_message{
            position: fixed;
            bottom: 10px;
            right: 10px;
            z-index: 99999999999999999;
        }
    </style>
</head>

<body>
    <div class="login-dark" style="height: 695px;">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration">
                <img src="{{ asset('images/logo.png') }}" alt="BracU LOGO">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                    required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </div>
            <p class="muted">DIU DIGITAL NOTICE BOARD</p>
        </form>

    </div>


    
    <div class="alert_message">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
    </div>


    <script>
        var myAlertElement = document.getElementById("alert_message");

        function hideMyAlert() {
            myAlertElement.style.display = "none";
        }

        setTimeout(hideMyAlert, 3000);
    </script>

</body>

</html>