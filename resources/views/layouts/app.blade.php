<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.3-web/css/all.min.css')}}">
    <title>ArouMarket</title>
    <link rel="shortcut icon" href="{{Storage::url('avatars/logo.png') }}" type="image/x-icon">
    <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>
    <script src="{{ asset('js/myapp.js') }}" defer></script>
</head>
<body class="bg-light position-relative">
    <div class="banner position-relative bg-light">
        @include('layouts.partials.navbar')
        @yield('main')
        <p class="tohome bounce position-fixed end-2 w-25 ms-5" id="tohome">
            <a href="#"><i class="fa fa-angle-double-up py-1 px-2 border border-dark rounded-circle"></i></a>
        </p>
        @include('layouts.partials.footer')
    </div>
</body>
</html>
