@extends('layouts.template')
@section('main')
<div class="bannerService mb-4">
    <div class="container">
        <div class="intro text-center">
            <p><img src="{{asset('avatars/logo.png')}}" alt="logo" width="100px"></p>
            <p class="welcoming display-5">Bienvenue chez ArouMarket</p>
            <p class="opportinuty mx-md-5">ArouMarket vous offre une opportunité de bénéficier tous ses produits disponibles même si vous n'êtes pas encore membre du ArouMarket Group.</p>
            <p>Pour les membres, reduction -15 % de votre Montant.</p>
        </div>
        <div class="opportinuty">
            <p><i class="fa fa-check-circle"></i> Produits de qualité supérieur</p>
            <p><i class="fa fa-check-circle"></i> Avec garantie</p>
            <p><i class="fa fa-check-circle"></i> Livraison possible</p>
            <p><i class="fa fa-check-circle"></i> Service apres vente assurée</p>
        </div>
        <div>
            <div class="payement text-center">
                <h2 class="paymenttitle dispaly-6">Mode de payement</h2>
                <div class="mobileMoney mt-5 mx-md-5">
                    <p class="titleitem">Mobile Money :</p>
                    <picture class="row justify-content-center">
                        <img class="col rounded rounded-circle mobileMoney" src="{{asset('assets/services/Mvola.jpg')}}" alt="mobileMoney">
                        <img class="col rounded rounded-circle mobileMoney" src="{{asset('assets/services/AirtelMoney.jpg')}}" alt="mobileMoney">
                        <img class="col rounded rounded-circle mobileMoney" src="{{asset('assets/services/OrangeMoney.jpg')}}" alt="mobileMoney">
                    </picture>
                </div>
                <div class="bank mt-md-5">
                    <p class="titleitem">Virement bancaire :</p>
                    <picture>
                        <img class="boa" src="{{asset('assets/services/BOA.png')}}" alt="boa">
                        <img src="{{asset('assets/services/mastercard.png')}}" alt="mastercard">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
