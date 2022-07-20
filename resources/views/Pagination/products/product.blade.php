@extends('layouts.template')
@section('main')
@include('layouts.partials.categoryitem')
<div class="layout">
    <div class="d-flex container w-100 mt-5 justify-content-around bg-light align-items-center">
        <div class="">
            <img src="{{asset('assets/products/'.$product->photo_principal)}}" alt="{{$product->name}}">
            <p>{{strtoupper($product->name)}}</p>
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
        <p class="h5 text-primary">Divers article</p>
    </div>
</div>
@endsection
