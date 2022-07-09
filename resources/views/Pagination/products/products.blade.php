@extends('layouts.template')
@section('main')
<div class="banner">
    <div class="row m-2">
        <div class="col-sm-2 position-sticky">
            <div class="navbar-nav flex-column">
                <p>Catégories</p>
                <ul class="nav flex-column">
                    <li class="nav-item bg-info"><a href="" class="nav-link">Item1</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Item1</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Item1</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="productslist">
                <div class="row g-4">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card position-relative">
                            <img src="{{asset('images/coding.jpg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card position-relative">
                            <img src="{{asset('images/coding.jpg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
