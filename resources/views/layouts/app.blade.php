<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/fav.ico') }}" type="image/x-icon">
    <title>BracU Office Management Syatem</title>


    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css" />

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    @yield('styles')
</head>

<body>

    <div>
        @include('layouts.nav')
    </div>
    <div class="content">        
        @yield('content')
    </div>


    <div class="alert_message" id="alert_message">
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
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

<script>
    var myAlertElement = document.getElementById("alert_message");

    function hideMyAlert() {
        myAlertElement.style.display = "none";
    }

    setTimeout(hideMyAlert, 3000);

</script>


@yield('scripts')

</body>

</html>
