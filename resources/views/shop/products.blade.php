@extends('layouts.app')
@section('main')
@yield('section')
@include('layouts.partials.categoryitem')
<div class="bannerProduct mt-4 mb-5 container bg-light">

    <div class="d-flex flex-wrap gy-3">
        @foreach ($products as $product)
        <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card shadow-sm animate__animated animate__fadeIn">
                <img src="{{$product->photo_principal}}" alt="{{$product->name}}" class="img-fluid">

                <div class="card-body">
                    <p class="card-text d-none d-md-block">
                        {{strtoupper(Str::substr($product->name, 0, 15))}} <br>
                        <span class="fw-bold text-primary">Prix TTC : {{$product->prixTTC()}} €</span>
                    </p>

                    <div class="btn-group d-flex">
                        {{--<a href="{{route('showproduct',['id'=>$product->id,'category_id'=>$product->category_id])}}" class="btn btn-sm btn-outline-info">View</a>--}}
                        <a href="{{ route('shop.create',[$product]) }}" class="btn btn-sm btn-outline-info">View</a>
                        <form action="{{route('cart_add',['id'=>$product->id])}}" method="POST" class="d-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            @csrf
                            <div class="input-group d-flex input-group-sm">
                                <input type="number" name="quantity" value="1" class="d-none form-control bg-light border-0"
                                    aria-label="quantity" aria-describedby="basic-addon2">
                                <button  type="submit" class="btn btn-primary h-100">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{--Modal pour afficher le produit cliqué--}}
    @foreach ($products as $product)
    <div class="modal fade" id="product{{$product->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">

                    <div class="container row w-100 mt-1 justify-content-around bg-light align-items-center">
                        <div class="animate__animated animate__fadeIn">
                            <img src="{{$product->photo_principal}}" alt="{{$product->name}}" class="img-fluid">
                            <p class="mt-2 text-primary fw-bold">{{strtoupper($product->name)}}</p>
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="w-75 align-self-center text-center  animate__animated animate__fadeIn">
                            <form action="{{ route('cart_add',['id'=>$product->id])}}" method="POST">
                                @csrf
                                <input type="number" name="quantity" class="form form-control text-center" value="1">
                                <button type="submit" class="btn btn-outline-primary w-100 mt-2">Ajouter dans le panier <i class="fa fa-shopping-cart text-info"></i></button>
                            </form>
                            @if($errors->any())
                                <ul class="mt-3">
                                    @foreach($errors->all()  as $error)
                                    <li class="animate__animated animate__lightSpeedInRight nav-link text-danger border btn w-100">{{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="text-primary fw-bolder">Prix TTC : {{$product->prixTTC()}} Ariary</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
