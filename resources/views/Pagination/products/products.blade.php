@extends('layouts.template')
@section('main')
<div class="banner">
    <div class="row me-2">
        <div class="col-2 col-md-3 col-lg-2">
            <div class="navbar-nav flex-column position-sticky top-0 sidebar bg-info">
                <p class="shadow p-2 text-center">
                    <span class="d-none d-md-block">Catégories</span>
                    <i class="fa fa-outdent d-md-none"></i>
                </p>
                <ul class="nav flex-column ps-2">
                    <li class="nav-item"><a href="" class="nav-link">Item1</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Item1</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Item1</a></li>
                </ul>
            </div>
        </div>
        <div class="col-10 col-md-9 col-lg-10">
            <div class="productslist">
                <div class="row g-4">

                    @for ($i=0;$i<100;$i++)
                        <div class="col-sm-6 col-lg-3">
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
                                <img src="{{asset('avatars/logo.png')}}" alt="logo" class="logo logoinProduct" width="30px">
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
