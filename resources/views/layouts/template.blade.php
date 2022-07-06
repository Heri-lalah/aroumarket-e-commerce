<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>ArouMarket</title>
    <link rel="shortcut icon" href="{{ asset('avatars/logo.png') }}" type="image/x-icon">
    <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>
</head>
<body class="layouts position-relative">
    @include('partials.navbar')
    @yield('main')
</body>
</html>
