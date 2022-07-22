@extends('layouts.template')
@section('main')
<div class="container">
    <h1>Mon pannier</h1>
    <form action="">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Images</th>
                    <th scope="col">Nom Produits</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Prix HT</th>
                </tr>
            </thead>
            <tbody>
                @foreach($content as $product)
                <tr>
                    <td><img src="{{ asset('assets/products/'.$product->attributes->photo) }}" class="img-thumbnail" alt="{{ $product->name }}" width="50px"></td>
                    <td>{{ $product->name }}</td>
                    <td><input type="number" value="{{number_format($product->quantity,2)}}" class="form-control w-50 text-center"></td>
                    <td class="text-end">{{ number_format($product->quantity * $product->price,2) }} Ariary</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Prix Total H.T</td>
                    <td class="text-end">{{ number_format($totalHT,2) }} Ariary</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>TVA</td>
                    <td class="text-end">{{ number_format(($totalHT * 20)/100,2) }} Ariary</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="fw-bold">Prix TTC</td>
                    <td class="text-end fw-bold">{{ number_format($totalHT + (($totalHT * 20)/100),2) }} Ariary</td>
                </tr>
            </tfoot>
        </table>
        <input type="submit" value="Commander" class="btn btn-outline-primary w-100">
    </form>

</div>
@endsection
