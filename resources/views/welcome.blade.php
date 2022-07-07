@extends('layouts.template')

@section('main')
<div class="banner">
    <div class="layout">
        <div class="container-sm">
            <div class="wrapper">
                <div class="intro">
                    <div class="row mt-sm-2 mt-md-5 align-items-center g-3">
                        <div class="col-sm-12 col-md-6">
                            <h2>Besoin de quelques choses ? sans ses déplacer</h2>
                        </div>
                        <div class="col-sm-12 col-md-6 text-center">
                            <img src="{{asset('avatars/logo.png')}}" alt="intro-image" width="150px">
                        </div>
                    </div>
                </div>
            </div>
            <p class="description mt-3">A description of the website</p>
        </div>
    </div>
</div>
@endsection
