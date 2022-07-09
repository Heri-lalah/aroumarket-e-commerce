@extends('layouts.template')

@section('main')
<div class="layout">
    <div class="col-12">
        <div class="wrapper">
            <div class="intro mt-4">
                <div class="d-lg-flex justify-content-between flex-lg-row-reverse">
                    <div class="text-center col-xl-4">
                        <img src="{{asset('avatars/logo.png')}}" alt="intro-image" width="150px">
                    </div>
                    <div class="col-xl-8">
                        <p class="intro-title text-center d-none d-md-block">Besoin de quelques choses ? sans ses déplacer</p>
                        <p class="description h4 mt-3 text-center mt-md-5 ms-md-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat minima labore esse laudantium fuga consequatur deleniti numquam, inventore reprehenderit officia perspiciatis architecto sit delectus non eum dolor, libero consectetur dignissimos?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services col-12 mt-lg-5 text-center container">
        <div class="row">
            <div class="col-sm-12 col-xl-8">
                <div class="d-lg-flex flex-lg-column">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <i class="fa fa-money-bill-wave rounded-circle service-item"></i>
                            <p class="serviceCaption">Payement en toute sécurité</p>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <i class="fa fa-shipping-fast rounded-circle service-item"></i>
                            <p class="serviceCaption">Livraison dans<span class="hours">4</span>heures</p>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <i class="fas fa-tools rounded-circle service-item"></i>
                            <p class="serviceCaption">Services après vente</p>
                        </div>
                    </div>
                </div>

                <div class="info container ">
                    <p class="col-sm-12 col-xl-auto mt-md-4">
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
                <div class="carousel slide" data-bs-ride="carousel" id="productCarousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/coding.jpg') }}" alt="coding" class="d-block w-100 img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/mixing.jpg') }}" alt="mixing" class="d-block w-auto img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/teaching.jpg') }}" alt="teaching" class="d-block w-auto img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
