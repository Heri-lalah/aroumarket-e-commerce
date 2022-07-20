@extends('layouts.template')

@section('main')
<div class="layout">
    <div class="col-12">
        <div class="wrapper">
            <div class="intro mt-4">
                <div class="d-lg-flex justify-content-between flex-lg-row-reverse">
                    <div class="text-center col-xl-4">
                        <div class="mytopcarousel carousel slide" data-bs-ride="carousel" id="topproductCarousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/coding.jpg') }}" alt="coding" class="d-block img-fluid w-100">
                                    <div class="carousel-caption">
                                        <img src="{{asset('avatars/logo.png')}}" class="logo" alt="aro-logo" width="40px">
                                        <a href="" class="btn btn-primary">Plus de details</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/mixing.jpg') }}" alt="mixing" class="d-block img-fluid w-100">
                                    <div class="carousel-caption">
                                        <img src="{{asset('avatars/logo.png')}}" class="logo" alt="aro-logo" width="40px">
                                        <a href="" class="btn btn-primary">Plus de details</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/teaching.jpg') }}" alt="teaching" class="d-block img-fluid w-100">
                                    <div class="carousel-caption">
                                        <img src="{{asset('avatars/logo.png')}}" class="logo" alt="aro-logo" width="40px">
                                        <a href="" class="btn btn-primary">Plus de details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--<img src="{{asset('avatars/logo.png')}}" alt="intro-image" width="150px">--}}
                    </div>
                    <div class="col-xl-8">
                        <p class="intro-title text-center d-none d-md-block text-primary">Besoin de quelques choses ? sans ses déplacer</p>
                        <p class="description h4 mt-3 mt-md-5 text-center text-dark">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat minima labore esse laudantium fuga consequatur deleniti numquam, inventore reprehenderit officia perspiciatis architecto sit delectus non eum dolor, libero consectetur dignissimos?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services col-12 mt-lg-5 text-center">
        <div class="d-lg-flex justify-content-between">
            <div class="col-sm-12 col-xl-8">
                <div class="d-lg-flex flex-lg-column mx-md-5 ">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 text-primary">
                            <i class="fa fa-money-bill-wave rounded-circle service-item text-info border border-info"></i>
                            <p class="serviceCaption text-info">Payement en toute sécurité</p>
                        </div>
                        <div class="col-sm-12 col-md-4 text-primary">
                            <i class="fa fa-shipping-fast rounded-circle service-item text-danger border border-danger"></i>
                            <p class="serviceCaption text-danger">Livraison dans<span class="hours">4</span>heures</p>
                        </div>
                        <div class="col-sm-12 col-md-4 text-primary">
                            <i class="fas fa-tools rounded-circle service-item text-warning border border-warning"></i>
                            <p class="serviceCaption text-warning">Services après vente</p>
                        </div>
                    </div>
                </div>

                <div class="info container ">
                    <p class="col-sm-12 col-xl-auto mt-md-4 text-dark">
                        N'hesitez pas à nous appeler pour toute information complémentaire
                    </p>
                    <p class="col-sm-12 col-xl-auto">
                        <span class="brands text-center">
                            <a href="#" class="d-inline-block m-1"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="d-inline-block m-1"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="d-inline-block m-1"><i class="fab fa-skype"></i></a>
                            <a href="" class="d-inline-block m-1"><i class="fab fa-google-plus-g"></i></a>
                        </span>
                    </p>
                </div>

            </div>

            {{-- IMAGES PUB --}}
            <div class="d-none d-xl-block col-xl-4 align-self-center8 position-relative">
                <div class="mybottomcarousel carousel slide" data-bs-ride="carousel" id="bottomproductCarousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="{{ asset('images/coding.jpg') }}" alt="coding" class="d-block w-100 img-fluid">
                            <div class="carousel-caption">
                                <img src="{{asset('avatars/logo.png')}}" class="logo" alt="aro-logo" width="40px">
                                <a href="" class="btn btn-primary">Plus de details</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/mixing.jpg') }}" alt="mixing" class="d-block w-100 img-fluid">
                            <div class="carousel-caption">
                                <img src="{{asset('avatars/logo.png')}}" class="logo" alt="aro-logo" width="40px">
                                <a href="" class="btn btn-primary">Plus de details</a>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img src="{{ asset('images/teaching.jpg') }}" alt="teaching" class="d-block w-100 img-fluid">
                            <div class="carousel-caption">
                                <img src="{{asset('avatars/logo.png')}}" class="logo" alt="aro-logo" width="40px">
                                <a href="" class="btn btn-primary">Plus de details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
