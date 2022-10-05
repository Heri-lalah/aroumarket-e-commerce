@extends('layouts.app')
@section('main')
@yield('section')
@include('layouts.partials.categoryitem')
<div class="bannerProduct mb-5 container bg-light">

    @include('layouts.partials.info')
    <div class="row gy-3 justify-content-center">
        @foreach ($products as $product)
        <div class="col-sm-3">
            <div class="card shadow-sm animate__animated animate__fadeIn">
                <img src="{{Storage::url('/assets/products/'.$product->photo_principal)}}" alt="{{$product->name}}" class="img-fluid">
                <div class="card-body">
                    <p class="card-text d-none d-md-block">
                        {{strtoupper($product->name)}} <br>
                        Prix TTC : {{$product->prixTTC()}} Ar
                    </p>

                    <div class="btn-group d-flex">
                        {{--<a href="{{route('showproduct',['id'=>$product->id,'category_id'=>$product->category_id])}}" class="btn btn-sm btn-outline-info">View</a>--}}
                        <button type="button" data-bs-toggle="modal" data-bs-target="#product{{$product->id}}" class="btn btn-sm btn-outline-info">View</button>
                        <form action="{{route('cart_add',['id'=>$product->id])}}" method="POST" class="d-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            @csrf
                            <div class="input-group input-group-sm">
                                <input type="number" name="quantity" value="1" class="d-none form-control bg-light border-0"
                                    aria-label="quantity" aria-describedby="basic-addon2">
                                <button  type="submit" class="btn btn-primary h-100">
                                    <i class="fas fa-cart-plus fa-sm"></i>
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
                    <p class="modal-title">{{$product->name}}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex container w-100 mt-1 justify-content-around bg-light align-items-center">
                        <div class=" animate__animated animate__fadeIn">
                            <img src="{{Storage::url('assets/products/'.$product->photo_principal)}}" alt="{{$product->name}}">
                            <p class="fw-bold">{{strtoupper($product->name)}}</p>
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="w-50 animate__animated animate__fadeIn">
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
