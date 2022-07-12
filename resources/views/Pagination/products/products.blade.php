@extends('layouts.template')
@section('main')
<div class="bannerProduct mb-5">
    <div class="row me-2">
        <div class="col-2 col-md-3 col-lg-2">
            <div class="sidebar navbar-nav flex-column position-sticky top-0">
                <ul class="nav flex-column">
                    <li class="categorie shadow py-2 text-center rounded-top">
                        <span class="d-none d-md-block categorietitle">Catégories</span>
                        <i class="fa fa-tasks d-md-none"></i>
                    </li>
                    <li class="categorieItem nav-item ps-sm-2 ps-md-4 rounded-bottom"><a href="" class="d-md-block">Electro-menager</a></li>
                    <li class="categorieItem nav-item ps-sm-2 ps-md-4 rounded-end"><a href="" class="d-md-block">Meubles</a></li>
                    <li class="categorieItem nav-item ps-sm-2 ps-md-4 rounded-end"><a href="" class="d-md-block">Multimedia</a></li>
                    <li class="categorieItem nav-item ps-sm-2 ps-md-4 rounded-end"><a href="" class="d-md-block">Tel/Accessoires</a></li>
                </ul>
            </div>
        </div>
        <div class="col-10 col-md-9 col-lg-10">
            <div class="productslist container d-flex flex-wrap justify-content-center">

                    @for ($i=0;$i<50;$i++)
                        <div class="productItem m-2">
                            <div class="card border-light">
                                <img src="{{asset('images/coding.jpg')}}" alt="" class="img-fluid rounded h-100">
                                <div class="fade"></div>
                                <div class="productinfo text-center">
                                    <p class="h4 d-block productname">Product name</p>
                                    <p class="h4 d-block productname">Product ref</p>
                                </div>
                                <div class="addto input-group w-100 text-center">
                                    <form action="">
                                        <input type="number" name="" id="" class="form-control form-control-sm d-inline w-50" placeholder="qté">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                    </form>
                                </div>
                                <span class="addinfo">Ajouter</span>
                                <img src="{{asset('avatars/logo.png')}}" alt="logo" class="logo logoinProduct" width="30px">
                            </div>
                        </div>

                        <div class="productItem m-2">
                            <div class="card border-light">
                                <img src="{{asset('images/mixing.jpg')}}" alt="" class="img-fluid rounded h-100">
                                <div class="fade"></div>
                                <div class="productinfo text-center">
                                    <p class="h4 d-block productname">Product name</p>
                                    <p class="h4 d-block productname">Product ref</p>
                                </div>
                                <div class="addto input-group w-100 text-center">
                                    <form action="">
                                        <input type="number" name="" id="" class="form-control form-control-sm d-inline w-50" placeholder="qté">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                    </form>
                                </div>
                                <span class="addinfo">Ajouter</span>
                                <img src="{{asset('avatars/logo.png')}}" alt="logo" class="logo logoinProduct" width="30px">
                            </div>
                        </div>

                        <div class="productItem m-2">
                            <div class="card border-light">
                                <img src="{{asset('images/video.jpg')}}" alt="" class="img-fluid rounded h-100">
                                <div class="fade"></div>
                                <div class="productinfo text-center">
                                    <p class="h4 d-block productname">Product name</p>
                                    <p class="h4 d-block productname">Product ref</p>
                                </div>
                                <div class="addto input-group w-100 text-center">
                                    <form action="">
                                        <input type="number" name="" id="" class="form-control form-control-sm d-inline w-50" placeholder="qté">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                    </form>
                                </div>
                                <span class="addinfo">Ajouter</span>
                                <img src="{{asset('avatars/logo.png')}}" alt="logo" class="logo logoinProduct" width="30px">
                            </div>
                        </div>
                    @endfor

            </div>
        </div>
    </div>
</div>
@endsection