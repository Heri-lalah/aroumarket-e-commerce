@extends('admin.layouts.base')
@section('main')
<div class="container">
    <div class="card w-75 mt-5">
        <div class="card-header text-primary">
            <span class="mx-2">Payement</span>
            <i class="fa fa-hand-holding-usd fs-5"></i>
        </div>
        <form action="{{route('payement', ['command' =>$command])}}" method="post">
            @csrf

            <div class="card-body">

                <div class="row mb-2">
                    <div class="col">Mode de payement</div>
                    <div class="col">
                        <select name="paymentMode" id="paymentMode" class="form-control w-100">
                            <option value=""></option>
                            <option value="mvola">Mvola</option>
                            <option value="airtelMoney">Airtel Money</option>
                            <option value="orangeMoney">Orange Money</option>
                            <option value="boa">BOA</option>
                            <option value="mastercard">MasterCard</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">Réference payement</div>
                    <div class="col"><input type="text" class="form-control" name="refPayement"></div>
                </div>

                <div class="row mb-2">
                    <div class="col">Date payement</div>
                    <div class="col"><input type="date" name="datePayement" id="datePayement" class="form-control"></div>
                </div>

                <div class="row mb-2">
                    <div class="col">Montant Payé</div>
                    <div class="col"><input type="number" class="form-control w-100" name="montantpaied" placeholder="montant en Ariary"></div>
                </div>

                @if($errors->any())
                    <div class="row mb-2 text-center">
                        <div class="col text-danger">Merci de remplir correctement tous les champs.</div>
                    </div>
                @endif
            </div>

            <div class="card-footer">
                <input type="submit" value="Valider le payement" id="submit" onclick="" class="btn btn-outline-success w-100">
            </div>
        </form>
    </div>
</div>
@endsection
