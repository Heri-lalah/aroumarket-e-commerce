@extends('layouts.app')
@section('main')
<div class="container mb-5">
    <p class="mt-3 fs-3 text-center text-uppercase text-info fw-bold">Récapitulatif de mon panier</p>
    @if ($content->isEmpty())
        <p class="allcommandstitle h4 mt-2">Votre panier est vide <a href="{{route('products')}}">Cliquer ici pour remplir</a></p>
    @else
        <div class="row gy-4 h-100">
            <div class="col-md-8">
                <div class="card p-2 shadow">
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
                                <form action="" class="form-inline d-inline">
                                    <a href="{{ route('cart.decrease',['id'=>$items->attributes->id]) }}" class="p-1 border" type="button"><i class="fa fa-minus"></i></a>
                                    <span class="px-2">{{$items->quantity}}</span>
                                    <a href="{{ route('cart.increase',['id'=>$items->attributes->id]) }}" class="p-1 border" type="button"><i class="fa fa-plus"></i></a>
                                </form>
                            </section>
                            <section class="others col-md-1 text-center">
                                <a href="" ><i class="fa fa-trash fs-5 text-danger"></i></a>
                            </section>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-2 shadow">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi amet atque cumque fugit? Quam, ipsa? Numquam atque deserunt minima, nulla laboriosam placeat illum! Adipisci totam eveniet dolorum impedit! Vitae provident dolorem voluptas qui eos, totam aliquid ad accusantium, adipisci repudiandae tempora, quos molestiae earum. Vel, incidunt ut sint, quisquam laboriosam quo modi aspernatur quos dolores eaque dignissimos nisi consequuntur voluptate adipisci beatae odit inventore harum nesciunt. Esse dolorum temporibus, laudantium illum molestiae repudiandae accusamus laborum aperiam odio asperiores modi beatae inventore exercitationem quasi nostrum recusandae neque explicabo tempora cumque illo, fuga assumenda corrupti! Aperiam commodi aspernatur sint debitis blanditiis possimus!
                    </div>
                </div>
            </div>
        </div>

    @endif
</div>
@endsection
