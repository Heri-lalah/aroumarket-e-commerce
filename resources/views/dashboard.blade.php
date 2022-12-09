@extends('layouts.app')
@section('main')
<div class="bannerService mt-3">
    <div class="container">
        <p><i class="fa fa-dashboard"></i> Dashboard</p>
        <div class="fs-6">
            <x-order.user-order></x-order.user-order>
        </div>

        <div id="msg" class="hidden fs-6">

            @if (Session::has('error'))
                <div id="redirectmsg" class="error bg-danger">
                    {{ Session::get('error') }}
                </div>
            @endif

            @if (Session::has('success'))
                <div id="redirectmsg" class="success bg-success">
                    {{ Session::get('success') }}
                </div>
            @endif

        </div>
    </div>
</div>
@endsection

@section('style')
    <style>
        button {
            background: #5469d4;
            color: #ffffff;
            border-radius: 4px;
            border: 0;
            padding: 10px 16px;
            cursor: pointer;
            display: block;
            margin: 2rem 0;
            transition: all 0.2s ease;
            box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
            width: 100%;
        }
        #redirectmsg{
            visibility: visible;
            min-width: 250px; /* Set a default minimum width */
            margin-left: -125px; /* Divide value of min-width by 2 */
            color: #fff; /* White text color */
            text-align: center; /* Centered text */
            border-radius: 2px; /* Rounded borders */
            padding: 10px; /* Padding */
            position: fixed; /* Sit on top of the screen */
            z-index: 1; /* Add a z-index if needed */
            left: 50%; /* Center the snackbar */
            bottom: 30px; /
        }
        #msg {
            visibility: hidden; /* Hidden by default. Visible on click */
            min-width: 250px; /* Set a default minimum width */
            margin-left: -125px; /* Divide value of min-width by 2 */
            color: #fff; /* White text color */
            text-align: center; /* Centered text */
            border-radius: 2px; /* Rounded borders */
            padding: 10px; /* Padding */
            position: fixed; /* Sit on top of the screen */
            z-index: 1; /* Add a z-index if needed */
            left: 50%; /* Center the snackbar */
            bottom: 30px; /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #msg.error {
            visibility: visible; /* Show the snackbar */
            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
            However, delay the fade out process for 2.5 seconds */
            background: rgb(243, 86, 86);
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        #msg.success {
            visibility: visible; /* Show the snackbar */
            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
            However, delay the fade out process for 2.5 seconds */
            background: green;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
    </style>

@endsection

@section('script')
<script>
    setTimeout(function(){
        document.getElementById('redirectmsg').style.visibility = "hidden";
        document.getElementById('redirectmsg').style.animation = "fadein 1s 1s";
        document.getElementById('redirectmsg').style.animation = "fadeout 1s 1s";
    }, 6000);
</script>
@endsection
