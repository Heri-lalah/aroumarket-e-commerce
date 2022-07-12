<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.3-web/css/all.css')}}">
    <title>ArouMarket</title>
    <link rel="shortcut icon" href="{{ asset('avatars/logo.png') }}" type="image/x-icon">
    <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>
    <script src="{{ asset('js/myapp.js') }}" defer></script>
</head>
<body>
    <div class="banner position-relative">
        @include('layouts.partials.navbar')
        @yield('main')
        <p class="tohome bounce position-fixed end-2 w-25 ms-5" id="tohome">
            <a href="#"><i class="fa fa-angle-double-up py-1 px-2 border rounded-circle"></i></a>
        </p>
        @include('layouts.partials.footer')
    </div>
</body>
</html>
