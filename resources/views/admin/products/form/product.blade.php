@extends('admin.layouts.base')
@section('main')
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf

        <div class="card">
            <div class="card-header">
                <span class="float-start">Information produit</span>
                <img src="{{Storage::url('assets/products/'.$product->photo_principal)}}" alt="{{$product->name}}" width="50px" class="float-end">
            </div>
            <div class="card-content p-md-3">
                <div class="row mb-md-2">
                    <div class="col">Réf</div>
                    <div class="col">{{$product->id}}</div>
                </div>

                <div class="row mb-md-2">
                    <div class="col align-self-center">Photo</div>
                    <div class="col">
                        <img src="{{Storage::url('assets/products/'.$product->photo_principal)}}" id="productActivePhoto" alt="{{$product->name}}" width="100px">
                        <input type="file" name="photo" id="" class="form-control d-inline w-75">
                    </div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">Nom produit</div>
                    <div class="col"><input type="text" name="name" value="{{$product->name}}" class="form-control"></div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">Déscription</div>
                    <div class="col"><input type="text" name="description" value="{{$product->description}}" class="form-control @error('description') is-invalid @enderror"></div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">Prix HT</div>
                    <div class="col"><input type="text" name="prix_ht" value="{{$product->prix_ht}}" class="form-control @error('prix_ht') is-invalid @enderror"></div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">En ligne</div>
                    <div class="col">
                        @if ($product->is_online==true)
                            <input type="checkbox" name="is_online" checked>
                        @else
                            <input type="checkbox" name="is_online">
                        @endif
                    </div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">Quantité Stock</div>
                    <div class="col"><input type="text" name="quantityStock" value="{{$product->quantityStock}}" class="form-control @error('quantityStock') is-invalid @enderror"></div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">Catégorie</div>
                    <div class="col">
                        <select name="category" id="" class="form-control @error('category') is-invalid @enderror">
                            <option value="{{$product->category->id}}">{{$product->category->name}}</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">En promo</div>
                    <div class="col">
                        <input type="checkbox" name="promo" id="promo" {{$product->promo==true ? 'checked' : ''}}>
                    </div>
                </div>


                <div class="row mb-md-2">
                    <div class="col">Réduction</div>
                    <div class="col"><input type="text" name="reduction" value="{{$product->reduction}}" class="form-control"></div>
                </div>


                <div class="row mb-md-2">
                    <div class="col"><input type="submit" value="Enregistrer" class="btn btn-outline-primary w-100"></div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
