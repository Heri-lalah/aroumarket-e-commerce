@extends('layouts.app')
@section('main')
@yield('section')

<div class="position-sticky top-0 bg-light shadow-sm">
    <nav class="container" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('products')}}">Accueil</a></li>
          <li class="breadcrumb-item"><a href="{{ route('viewproductbycategory',['id'=>$product->category->id])}}">Catégorie</a></li>
          <li class="breadcrumb-item active">{{ $product->category->name }}</li>
        </ol>
    </nav>
</div>

<div class="bannerProduct mt-4 mb-5 container bg-light">
    <div class="container">
        <div class="row gy-3">
            <div class="col-md-6 d-flex flex-wrap">
                <div class="product">
                    <img src="{{ Storage::url('/assets/products/' . $product->photo_principal)}}" alt="{{ $product->name }}" class="img-fluid">
                </div>

            </div>
            <div class="col-md-6 px-md-5 align-self-center">
                <p class="fs-5 fw-bold">{{ $product->name }}</p>
                <p><span class="fw-bolder text-danger">{{ $product->prix_ht }} €</span>/pièce</p>
                <p>{{ $product->description }}</p>
                <form action="{{ route('cart_add',['id' => $product]) }}" method="POST">
                    @csrf
                    <input type="number" name="quantity" class="form form-control text-center @error('quantity') is-invalid @enderror" value="1">
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
                    <img src="{{ Storage::url('/assets/products/' . $item->photo_principal)}}" alt="{{$item->name}}" class="img-fluid">

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
