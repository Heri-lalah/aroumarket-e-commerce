@extends('layouts.template')
@section('main')
<div class="bannerService">
    <div class="container">
        <div class="intro text-center">
            <p><img src="{{asset('avatars/logo.png')}}" alt="logo" width="100px"></p>
            <p class="welcoming display-5">Bienvenue chez ArouMarket</p>
            <p class="opportinuty mx-md-5">ArouMarket vous offre une opportunité de bénéficier tous ses produits disponibles même si vous n'êtes pas encore membre du ArouMarket Group</p>
        </div>
        <div class="aide">
            <p>Il suffit juste d'aller vers <a href="{{route('products')}}">la liste des produis disponibles</a>. Et commander dont vous avez besoin avec la quantité que vous avez souhaité.</p>
            <p>Si vous avez encore besoin de visualiser et valider votre commande, ArouMarket a déjà mettre en place ce système pour faciliter la modification de votre commande.</p>
            <p>Je vous envoyerais à l'instant que votre commande peut accueilie ou non. Apres vous pouvez passer à la payement</p>
            <p>Reduction -15% et livraison gratuite pour les ArouMarket Group</p>
        </div>
        <div>
            <div class="payment">
                <h2 class="paymenttitle text-center dispaly-6">Mode de payement</h2>
                <picture class="text-center">
                    <div class="mobileMoney">
                        <p>Mobile</p>
                        <img src="{{asset('assets/services/Mvola.jpg')}}" alt="mobileMoney">
                        <img src="{{asset('assets/services/AirtelMoney.jpg')}}" alt="mobileMoney">
                        <img src="{{asset('assets/services/OrangeMoney.jpg')}}" alt="mobileMoney">
                    </div>
                    <div class="bank">
                        <p>Virement bancaire</p>
                        <img src="{{asset('assets/services/BOA.png')}}" alt="boa">
                        <img src="{{asset('assets/services/mastercard.png')}}" alt="mastercard">
                    </div>
                </picture>
            </div>
        </div>
        <div class="sav">
            <img src="{{asset('assets/services/sav.jpg')}}" alt="">
        </div>
    </div>
</div>
@endsection
