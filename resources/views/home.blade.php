@extends('layouts.app')
@section('main')
<div class="bannerService mt-3">
    <div class="container">
        <div class="intro text-center">
            <p><img src="{{Storage::url('/avatars/logo.png')}}" alt="logo" width="100px"></p>
            <p class="welcoming display-5 text-primary">Bienvenue chez ArouMarket</p>
            <p class="opportinuty mx-md-5 text-dark">ArouMarket vous offre une opportunité de bénéficier tous ses produits disponibles même si vous n'êtes pas encore membre du ArouMarket Group.</p>
            <p class="text-dark">Pour les membres, reduction -15 % de votre Montant.</p>
        </div>
        <div class="opportinuty">
            <p class="text-dark"><i class="fa fa-check-circle text-primary fs-4"></i> Produits de qualité supérieur</p>
            <p class="text-dark"><i class="fa fa-check-circle text-primary fs-4"></i> Avec garantie</p>
            <p class="text-dark"><i class="fa fa-check-circle text-primary fs-4"></i>
                Payement en toute sécurité
                <picture class="gx-2-">
                    <img class="animate__animated animate__zoomIn rounded rounded-circle" src="{{Storage::url('assets/services/Mvola.jpg')}}" alt="mobileMoney"  style="width: 60px" >
                    <img class="animate__animated animate__zoomIn rounded rounded-circle" src="{{Storage::url('assets/services/AirtelMoney.jpg')}}" alt="mobileMoney" style="width: 50px">
                    <img class="animate__animated animate__zoomIn rounded rounded-circle" src="{{Storage::url('assets/services/OrangeMoney.jpg')}}" alt="mobileMoney" style="width: 50px">
                    <img class="boa animate__animated animate__zoomIn" src="{{Storage::url('/assets/services/BOA.png')}}" alt="boa"  style="width: 70px">
                    <img class="animate__animated animate__zoomIn" src="{{Storage::url('assets/services/mastercard.png')}}" alt="mastercard"  style="width: 60px">
                </picture>
            </p>
            <p class="text-dark"><i class="fa fa-check-circle text-primary fs-4"></i> Livraison possible</p>
            <p class="text-dark"><i class="fa fa-check-circle text-primary fs-4"></i> Service apres vente assurée</p>
        </div>

        <div class="info container text-center">
            <p class="col-sm-12 col-xl-auto mt-md-3 text-dark">
                N'hesitez pas à nous appeler pour toute information complémentaire
            </p>
            <p class="col-sm-12 col-xl-auto mt-md-3 mb-3">
                <span class="brands text-center">
                    <a href="#" class="d-inline-block m-1"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="d-inline-block m-1"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="d-inline-block m-1"><i class="fab fa-skype text-info"></i></a>
                    <a href="" class="d-inline-block m-1"><i class="fab fa-google-plus-g"></i></a>
                </span>
            </p>
        </div>
    </div>
</div>
@endsection
