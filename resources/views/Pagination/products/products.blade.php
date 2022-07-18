@extends('layouts.template')
@section('main')
<div class="bannerProduct mb-5">
    <div class="row me-2">
        <div class="col-3 col-lg-2">
            <div class="sidebar navbar-nav flex-column position-sticky top-0">
                <ul class="nav flex-column">
                    <li class="categorie shadow py-2 text-center rounded-top">
                        <span class="d-none d-md-block categorietitle">Catégories</span>
                        <i class="fa fa-tasks d-md-none"></i>
                    </li>
                    <li class="categorieItem nav-item ps-sm-2 ps-md-4 rounded-bottom">
                        <a href="" class="d-md-block">
                            <span class="categoriename d-none d-md-inline">Electro-menager</span>
                            <span class="categorielogo d-block text-center d-md-none"><i class="fa fa-blender"></i></span>
                        </a>
                    </li>
                    <li class="categorieItem nav-item ps-sm-2 ps-md-4 rounded-end">
                        <a href="" class="d-md-block">
                            <span class="categoriename d-none d-md-inline">Meubles&Déco</span>
                            <span class="categorielogo d-block text-center d-md-none"><i class="fa fa-couch"></i></span>
                        </a>
                    </li>
                    <li class="categorieItem nav-item ps-sm-2 ps-md-4 rounded-end">
                        <a href="" class="d-md-block">
                            <span class="categoriename d-none d-md-inline">Tel/Accessoires</span>
                            <span class="categorielogo d-block text-center d-md-none"><i class="fa fa-mobile"></i></span>
                        </a>
                    </li>
                    <li class="categorieItem nav-item ps-sm-2 ps-md-4 rounded-end">
                        <a href="" class="d-md-block">
                            <span class="categoriename d-none d-md-inline">Informatique</span>
                            <span class="categorielogo d-block text-center d-md-none"><i class="fa fa-laptop"></i></span>
                        </a>
                    </li>
                    <li class="categorieItem nav-item ps-sm-2 ps-md-4 rounded-end">
                        <a href="" class="d-md-block">
                            <span class="categoriename d-none d-md-inline">Sport/Fitness</span>
                            <span class="categorielogo d-block text-center d-md-none"><i class="fa fa-dumbbell"></i></span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-9 col-lg-10">
            <form action="{{route('store')}}" method="post">
                <div class="productslist d-flex flex-wrap justify-content-center">
                        @for ($i=1;$i<50;$i++)
                            <div class="productItem m-2">
                                <div class="card border-light">
                                    <img src="{{asset('images/mixing.jpg')}}" alt="" class="img-fluid rounded h-100">
                                    <div class="fade"></div>
                                    <div class="productinfo text-center">
                                        <p class="h4 d-block productname">{{'Produits '.$i}}</p>
                                        <p class="h4 d-block productname">{{'ref : '.$i*50}}</p>
                                    </div>
                                    <img src="{{asset('avatars/logo.png')}}" alt="logo" class="logo logoinProduct" width="30px">
                                    <div class="card-footer h-25 d-flex justify-content-between">
                                        <div>
                                            <i class="fa fa-shopping-cart addto" id="{{$i}}"></i>
                                            <input type="number" name="{{'item'.$i}}" id="" class="inputQuantity d-inline" placeholder="qté" value="1">
                                        </div>
                                        <p class="price">
                                            @if ($i > 0)
                                                {{500*$i.' Ar'}}
                                            @else
                                                {{'500 Ar'}}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
