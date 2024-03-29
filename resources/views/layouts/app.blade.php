<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArouMarket</title>
    <link rel="shortcut icon" href="{{Storage::url('/avatars/logo.png') }}" type="image/x-icon">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('header')
</head>
<body class="bg-light position-relative animate__animated animate__fadeIn">
    <div class="banner position-relative bg-light " style="font-size: 15px">
        <x-layouts.navbar></x-layouts.navbar>
        @yield('main')
        <p class="tohome bounce position-fixed end-2 w-25 ms-5" id="tohome">
            <a href="#"><i class="fa fa-angle-double-up py-1 px-2 border border-dark rounded-circle"></i></a>
        </p>
        <x-layouts.footer></x-layouts.footer>
    </div>
    @yield('script')
</body>
</html>
