@extends('layouts.app')
@section('main')
<div class="container">
    @include('Pagination.carts.cartTemplate')
    <table class="table table-hover table-borderless w-100">
        <thead class="bg-warning text-light">
            <tr class="border-bottom">
                <th scope="col" class="text-center h5">Numero commande</th>
                <th scope="col" class="text-center h5">Date</th>
                <th scope="col" class="text-center h5">Montant Total TTC</th>
                <th scope="col" class="text-center h5">Payement</th>
                <th scope="col" class="text-center h5">Livraison</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($command as $items)
            <tr>
                <td class="text-center">{{$items->id}}</td>
                <td class="text-center">{{$items->updated_at->format('d-m-y')}} ({{$items->updated_at->diffForHumans()}})</td>
                <td class="text-center">{{number_format($items->prix_TTC_Total,2)}} Ariary</td>
                <td class="text-center">
                    @if ($items->payement==true)
                        <i class="fa fa-check-circle h4 text-success"></i>
                    @else
                        <i class="fa fa-times h4 text-danger"></i>
                    @endif
                </td>
                <td class="text-center">
                    @if ($items->delivred==true)
                        <i class="fa fa-check-circle h4 text-success"></i>
                    @else
                        <i class="fa fa-hourglass-start h4 text-warning"></i>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
