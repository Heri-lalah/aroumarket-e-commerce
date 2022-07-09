@extends('layouts.template')

@section('main')
<div class="layout">
    <div class="col-12">
        <div class="wrapper">
            <div class="intro mt-4 container">
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
        <div class="col-sm-12 col-xl-8 align-self-center">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <i class="fa fa-money-bill-wave rounded-circle"></i>
                    <p>Payement en toute sécurité</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <i class="fa fa-shipping-fast rounded-circle"></i>
                    <p>Livraison dans <span>4</span>heures</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <i class="fas fa-tools rounded-circle"></i>
                    <p>Services après vente</p>
                </div>
            </div>
        </div>
        <div class="d-none d-xl-block col-xl-4">
            <img src="{{asset('images/coding.jpg')}}" alt="" class="img-fluid">
        </div>
       </div>
    </div>
    <div class="info container">
        <p class="col-sm-12 col-xl-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio debitis optio eveniet mollitia aliquid ipsam, omnis, sit id sunt eum harum assumenda repellat corrupti, ex vero? Dolor neque dolores impedit!
        </p>
        <p class="d-none col col-xl-6 d-md-block"></p>
    </div>
</div>
@stop
