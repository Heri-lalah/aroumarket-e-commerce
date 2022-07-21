@extends('layouts.template')
@section('main')
@include('layouts.partials.categoryitem')
<div class="layout">
    <div class="d-flex container w-100 mt-5 justify-content-around bg-light align-items-center">
        <div class="">
            <img src="{{asset('assets/products/'.$product->photo_principal)}}" alt="{{$product->name}}">
            <p class="fw-bold">{{strtoupper($product->name)}}</p>
            <p>{{$product->description}}</p>
            <p class="text-primary">Prix HT : {{$product->prix_ht}} Ariary</p>
        </div>
        <div class="w-50">
            <input type="number" class="form form-control text-center" value="1">
            <button type="submit" class="btn btn-outline-primary w-100 mt-2">Ajouter dans le panier <i class="fa fa-shopping-cart text-primary"></i></button>
        </div>
    </div>
    <hr>
    <div class="container">
        <p class="text-dark fst-italic">Divers article</p>
    </div>

    <div class="bannerProduct mb-5 container bg-light">
        <div class="row gy-3 justify-content-center">
            @foreach ($productsbycategory as $productbycategory)
            <div class="col-sm-3">
                <div class="card shadow-sm {{ $productbycategory->name }}">
                    <img src="{{asset('assets/products/'.$productbycategory->photo_principal)}}" alt="{{$productbycategory->name}}" class="img-fluid">
                    <div class="card-body">
                        <p class="card-text d-none d-md-block">
                            {{strtoupper($productbycategory->name)}} <br>
                            Prix H.T : {{number_format($productbycategory->prix_ht,2)}} Ar
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                           <a href="{{route('showproduct',['id'=>$product->id,'category_id'=>$productbycategory->category_id])}}" class="btn btn-sm btn-outline-primary">View</a>
                        </div>
                        <i class="fa fa-shopping-cart h4 text-primary addtocard"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection