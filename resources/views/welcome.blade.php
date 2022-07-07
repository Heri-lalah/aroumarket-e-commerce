@extends('layouts.template')

@section('main')
<div class="banner">
    <div class="layout">
        <div class="container-sm">
            <div class="wrapper">
                <div class="intro">
                    <div class="d-lg-flex justify-content-between flex-lg-row-reverse">
                        <div class="text-center col-lg-4">
                            <img src="{{asset('avatars/logo.png')}}" alt="intro-image" width="150px">
                        </div>
                        <div class="">
                            <p class="intro-title text-center">Besoin de quelques choses ? sans ses déplacer</p>
                            <p class="description h4 mt-md-5 mt-sm-3 ms-md-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat minima labore esse laudantium fuga consequatur deleniti numquam, inventore reprehenderit officia perspiciatis architecto sit delectus non eum dolor, libero consectetur dignissimos?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
