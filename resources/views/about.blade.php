@extends('layouts.app')

@section('main')
<div class="layout">
    <div class="col-12">
        <div class="wrapper">
            <div class="intro mt-4">
                <div class="d-lg-flex justify-content-between flex-lg-row-reverse">
                    <div class="text-center col-xl-4">
                        <div class="mytopcarousel carousel slide" data-bs-ride="carousel" id="topproductCarousel">
                            <div class="carousel-inner">
                                @foreach ($Listpromotion as $product)
                                <div class="carousel-item active position-relative">
                                    <img src="{{Storage::url('/assets/products/'.$product->photo_principal)}}" alt="coding" class="d-block img-fluid w-100  ">
                                    <div class="carousel-caption position-absolute">
                                        <img src="{{Storage::url('/avatars/logo.png')}}" class="logo" alt="aro-logo" width="40px">
                                        <a href="{{route('showproduct',['id'=>$product->id,'category_id'=>$product->category_id])}}" class="btn btn-primary">Plus de details</a>
                                    </div>
                                </div>
                                @break
                                @endforeach

                                @foreach ($Listpromotion as $product)
                                <div class="carousel-item">
                                    <img src="{{asset('/storage/assets/products/'.$product->photo_principal)}}" alt="coding" class="d-block img-fluid w-100">
                                    <div class="carousel-caption">
                                        <img src="{{asset('/storage/avatars/logo.png')}}" class="logo" alt="aro-logo" width="40px">
                                        <a href="" class="btn btn-primary">Plus de details</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <p class="intro-title text-center d-none d-md-block text-primary">Besoin de quelques choses ? sans ses déplacer</p>

                        <p class="description h4 mt-3 mt-md-5 text-center text-dark">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat minima labore esse laudantium fuga consequatur deleniti numquam, inventore reprehenderit officia perspiciatis architecto sit delectus non eum dolor, libero consectetur dignissimos?
                        </p>

                        <div class="d-lg-flex mt-5 text-center justify-content-around">
                            <div class="text-primary animate__animated animate__bounceInLeft serviceitem">
                                <i class="fa fa-money-bill-wave rounded-circle serviceitem text-info border border-info"></i>
                                <p class="serviceCaption text-info h4">Payement en toute sécurité</p>
                            </div>
                            <div class="text-primary animate__animated animate__bounceInDown">
                                <i class="fa fa-shipping-fast rounded-circle serviceitem text-danger border border-danger"></i>
                                <p class="serviceCaption text-danger h4">Livraison dans<span class="hours">4</span>heures</p>
                            </div>
                            <div class="text-primary animate__animated animate__bounceInRight">
                                <i class="fas fa-tools rounded-circle serviceitem text-warning border border-warning"></i>
                                <p class="serviceCaption text-warning h4">Services après vente</p>
                            </div>
                        </div>

                        <div class="info container text-center">
                            <p class="col-sm-12 col-xl-auto mt-md-5 text-dark h4">
                                N'hesitez pas à nous appeler pour toute information complémentaire
                            </p>
                            <p class="col-sm-12 col-xl-auto mt-md-3">
                                <span class="brands text-center">
                                    <a href="#" class="d-inline-block m-1"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="d-inline-block m-1"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="d-inline-block m-1"><i class="fab fa-skype text-info"></i></a>
                                    <a href="" class="d-inline-block m-1"><i class="fab fa-google-plus-g"></i></a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
