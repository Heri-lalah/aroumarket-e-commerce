@extends('layouts.app')

@section('header')
    @vite(['resources/css/redirectMessage.css', 'resources/js/redirectMessage.js'])
@endsection

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
