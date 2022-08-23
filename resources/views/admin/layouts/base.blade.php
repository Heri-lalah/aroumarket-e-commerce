<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>ArouMarket</title>

    <link rel="shortcut icon" href="{{Storage::url('/avatars/logo.png') }}" type="image/x-icon">

    <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>

    <script src="{{ asset('js/myapp.js') }}" defer></script>

    <style>
        .card{
            border-top-width : 0;
            border-left-width: .3rem;
            border-bottom-width : 0;
            border-right-width : 0;
            border-radius: 5px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="d-flex position-relative">

        <div>
            @include('admin.partials.sidebar')
        </div>

        <div class="layout w-100 overflow-hidden px-2">

            @include('admin.partials.navbar')

            <div class="mt-2 mb-5 animate__animated animate__fadeIn">

                @yield('main')

            </div>
            @include('layouts.partials.footer')

        </div>
    </div>

</body>
</html>
