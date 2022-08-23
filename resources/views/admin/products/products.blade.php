@extends('admin.layouts.base')
@section('main')
    <table class="table table-hover table-sm">

        <thead class="thead-info">
            <th></th>
            <th class="text-center">En ligne</th>
            <th class="text-center">Ref</th>
            <th>Nom produits</th>
            <th class="text-center">Qté stock</th>
            <th>Image</th>
        </thead>

        <tbody>

            @foreach ($products as $product)
            <tr>
                <td class="align-middle">
                    @if (Route::currentRouteName()=="toDeleteProduct")
                        <button class="btn btn-sm btn-danger" data-bs-toggle="collapse" data-bs-target="#deleteProduct{{$product->id}}">Supprimer</button>
                    @else
                        <a href="{{route('showproductinadmin',['product' => $product ])}}" class="btn rounded-circle btn-sm {{$product->is_online==true ? 'btn-primary' : 'btn-danger'}}"><i class="fa fa-pencil-alt"></i></a>
                    @endif
                </td>
                <td class="align-middle text-center">
                    @if ($product->is_online)
                        <i class='fa fa-check-circle text-success fs-5'></i>
                    @else
                        <i class='fa fa-exclamation-circle text-danger fs-5'></i>
                    @endif
                </td>
                <td class="text-center align-middle">{{$product->id}}</td>
                <td class="align-middle">{{$product->name}}</td>
                <td class="text-center align-middle">{{$product->quantityStock}}</td>
                <td class="align-middle"><img src="{{Storage::url('assets/products/'.$product->photo_principal)}}" alt="{{$product->name}}" class="rounded-circle" width="30px"></td>
            </tr>

            <div class="collapse fade" id="deleteProduct{{$product->id}}">
                <div class="w-100 text-center h-100 position-fixed top-0 overflow-hidden animate__animated animate__jello" style="z-index: 50000;">
                    <div>
                        <div class="card m-md-5 border-danger" style="width: 600px;max-width:75vw">
                            <h5 class="card-header text-danger"><span class="float-start">Suppression</span> <i class="fa fa-exclamation-triangle text-danger float-end"></i></h5>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-3 col-md-2">Produit : </div>
                                    <div class="col fw-bolder text-danger">{{Str::upper($product->name)}}</div>
                                </div>

                                <div>
                                    <p class="card-text text-center">Voulez-vous supprimer vraiment ce produit ?</p>
                                </div>
                            </div>

                            <div class="card-footer my-2 pb-0 d-flex justify-content-between">
                                <div>
                                    <form action="{{route('deleteProduct',['product' => $product])}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="collapse" data-bs-target="#deleteProduct{{$product->id}}">
                                            Confirmer
                                        </button>
                                    </form>
                                </div>
                                <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="collapse" data-bs-target="#deleteProduct{{$product->id}}">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-dark fade position-absolute top-0 w-100 h-100" style="opacity: .2"></div>
            </div>

            @endforeach

        </tbody>

    </table>
@endsection
