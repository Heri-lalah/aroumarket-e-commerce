@extends('layouts.app')
@section('main')
<div class="container mb-5">
    <p class="mt-3 fs-3 text-center text-uppercase text-info fw-bold">Récapitulatif de mon panier</p>
    @if ($content->isEmpty())
        <p class="allcommandstitle h4 mt-2">Votre panier est vide <a href="{{route('products')}}">Cliquer ici pour remplir</a></p>
    @else
        <div class="row gy-4 h-100">
            <div class="col-md-8">
                <div class="card p-2 shadow h-100">
                    <div class="card-body">
                        @foreach($content->all() as $items)
                        <div class="row gy-3 m-2 align-items-center justify-content-between">
                            <section class="productimg col-md-2 text-center overflow-hidden">
                                <img src="{{$items->attributes->photo}}" alt="{{ $items->name }}" class="img-fluid">
                            </section>
                            <section class="productinfo text-center col-md-4 p-2">
                                <span class="fw-bold">{{ $items->name }}</span><br>
                                <span class="" style="font-size: 12px">{{ Str::substr($items->attributes->description, 0, 30) }}...</span><br>
                                <span class="text-danger fw-bold">{{ $items->price }} €</span>
                            </section>
                            <section class="quantity  col-md-3 text-center">
                                <a href="{{ route('cart.decrease',['id'=>$items->attributes->id]) }}" class="p-1 border" type="button"><i class="fa fa-minus"></i></a>
                                <span class="px-2">{{$items->quantity}}</span>
                                <a href="{{ route('cart.increase',['id'=>$items->attributes->id]) }}" class="p-1 border" type="button"><i class="fa fa-plus"></i></a>
                            </section>
                            <section class="others col-md-1 text-center">
                                <a href="{{ route('cart.delete',['id'=>$items->attributes->id]) }}" ><i class="fa fa-trash fs-5 text-danger"></i></a>
                            </section>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-2 shadow">
                    <div class="card-body">
                        <div class="ht my-3 d-flex justify-content-between">
                            <div>Montant HT</div>
                            <div>{{ number_format($total,2) }} €</div>
                        </div>
                        <div class="tva my-3 d-flex justify-content-between">
                            <div>Tva</div>
                            <div>{{ number_format($tva ,2)}} €</div>
                        </div>
                        <div class="ttc my-4 d-flex justify-content-between">
                            <div class="fw-bold fs-4">Montant TTC</div>
                            <div class="fw-bold fs-4">{{ number_format($totalTTC,2) }} €</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
</div>
@endsection
