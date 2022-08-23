@extends('admin.layouts.base')
@section('main')
<div class="container">
    <form action="{{route('addNewProduct')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <span class="float-start">Information produit</span>
            </div>
            <div class="card-content p-md-3">

                <div class="row mb-md-2">
                    <div class="col align-self-center">Photo</div>
                    <div class="col">
                        <input type="file" name="photo" id="" class="form-control d-inline w-75">
                    </div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">Nom produit</div>
                    <div class="col"><input type="text" name="name" value="" class="form-control @error('name') is-invalid @enderror"></div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">Déscription</div>
                    <div class="col"><input type="text" name="description" value="" class="form-control @error('description') is-invalid @enderror"></div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">Prix HT</div>
                    <div class="col"><input type="text" name="prix_ht" value="" class="form-control @error('prix_ht') is-invalid @enderror"></div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">Mettre en ligne</div>
                    <div class="col">
                            <input type="checkbox" name="is_online" checked>
                    </div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">Quantité</div>
                    <div class="col"><input type="text" name="quantityStock" value="" class="form-control @error('quantityStock') is-invalid @enderror"></div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">Catégorie</div>
                    <div class="col">
                        <select name="category" id="" class="form-control @error('category') is-invalid @enderror">
                            <option value="">--- choisir la catégorie ---</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-md-2">
                    <div class="col">En promo</div>
                    <div class="col">
                        <input type="checkbox" name="promo" id="promo">
                    </div>
                </div>


                <div class="row mb-md-2">
                    <div class="col">Réduction</div>
                    <div class="col"><input type="text" name="reduction" value="" class="form-control @error('reduction') is-invalid @enderror"></div>
                </div>

                @if ($errors->any())
                <div class="row mb-md-2">
                    <div class="col alert alert-warning text-center animate__animated animate__backInRight">Merci de remplir correctement le(s) champs en rouge</div>
                </div>
                @endif


                <div class="row mb-md-2">
                    <div class="col"><input type="submit" value="Enregistrer" class="btn btn-outline-primary w-100"></div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
