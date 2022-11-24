@extends('layouts.app')
@section('main')
@yield('section')
@include('layouts.partials.categoryitem')
<div class="bannerProduct mt-4 mb-5 container bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex flex-wrap">
                <div class="product">
                    <img src="{{ $product->photo_principal}}" alt="{{ $product->name }}" class="img-fluid">
                </div>

                <div class="product_details mt-2">
                    <picture class="d-flex justify-content-around">
                        <img src="{{ $product->photo_principal}}" alt="{{ $product->name }}" class="img-fluid block" style="width: 22%">
                        <img src="{{ $product->photo_principal}}" alt="{{ $product->name }}" class="img-fluid block" style="width: 22%">
                        <img src="{{ $product->photo_principal}}" alt="{{ $product->name }}" class="img-fluid block" style="width: 22%">
                        <img src="{{ $product->photo_principal}}" alt="{{ $product->name }}" class="img-fluid block" style="width: 22%">
                    </picture>
                </div>
            </div>
            <div class="col-md-6 px-md-5 align-self-center">
                <p class="fs-2 fw-bold">{{ $product->name }}</p>
                <p><span class="fs-1 fw-bolder text-danger">{{ $product->prix_ht }} €</span>/pièce</p>
                <p>{{ $product->description }}</p>
                <form action="{{ route('cart_add',['id' => $product->id]) }}" method="POST">
                    @csrf
                    <input type="number" name="quantity" class="form form-control text-center @error('quantity') is-invalid @enderror">
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
        <hr>
        <p class="text-primary fw-bold">Plus de produits</p>
        <div class="more_products d-flex flex-wrap gy-3">
            @foreach ($moresProducts as $item)
            <a href="{{ route('product.show',[$item])}}" class="col-sm-6 col-md-4 col-lg-3 p-2">
                <div class="card shadow-sm animate__animated animate__fadeIn">
                    <img src="{{$item->photo_principal}}" alt="{{$item->name}}" class="img-fluid">

                    <div class="card-body">
                        <p class="card-text d-none d-md-block">
                            {{strtoupper(Str::substr($item->name, 0, 15))}} <br>
                            <span class="fw-bold text-primary">Prix TTC : {{$item->prixTTC()}} €</span>
                        </p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
</div>
@endsection
