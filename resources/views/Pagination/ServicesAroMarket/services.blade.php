@extends('layouts.template')
@section('main')
<div class="bannerService mb-4">
    <div class="container">
        <div class="intro text-center">
            <p><img src="{{asset('avatars/logo.png')}}" alt="logo" width="100px"></p>
            <p class="welcoming display-5 text-primary">Bienvenue chez ArouMarket</p>
            <p class="opportinuty mx-md-5 text-dark">ArouMarket vous offre une opportunité de bénéficier tous ses produits disponibles même si vous n'êtes pas encore membre du ArouMarket Group.</p>
            <p class="text-dark">Pour les membres, reduction -15 % de votre Montant.</p>
        </div>
        <div class="opportinuty">
            <p class="text-dark"><i class="fa fa-check-circle text-primary"></i> Produits de qualité supérieur</p>
            <p class="text-dark"><i class="fa fa-check-circle text-primary"></i> Avec garantie</p>
            <p class="text-dark"><i class="fa fa-check-circle text-primary"></i> Livraison possible</p>
            <p class="text-dark"><i class="fa fa-check-circle text-primary"></i> Service apres vente assurée</p>
        </div>
        <div>
            <div class="payement text-center">
                <h2 class="paymenttitle dispaly-6 text-primary">Mode de payement</h2>
                <div class="mobileMoney mt-5 mx-md-5">
                    <p class="titleitem">Mobile Money :</p>
                    <picture class="row justify-content-center">
                        <img class="animate__animated animate__flip col rounded rounded-circle mobileMoney" src="{{asset('assets/services/Mvola.jpg')}}" alt="mobileMoney">
                        <img class="animate__animated animate__flip col rounded rounded-circle mobileMoney" src="{{asset('assets/services/AirtelMoney.jpg')}}" alt="mobileMoney">
                        <img class="animate__animated animate__flip col rounded rounded-circle mobileMoney" src="{{asset('assets/services/OrangeMoney.jpg')}}" alt="mobileMoney">
                    </picture>
                </div>
                <div class="bank mt-md-5">
                    <p class="titleitem">Virement bancaire :</p>
                    <picture>
                        <img class="boa animate__animated animate__zoomIn" src="{{asset('assets/services/BOA.png')}}" alt="boa">
                        <img class="animate__animated animate__zoomIn" src="{{asset('assets/services/mastercard.png')}}" alt="mastercard">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
