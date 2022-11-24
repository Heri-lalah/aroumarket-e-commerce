@extends('layouts.app')
@section('main')
@yield('section')
@include('layouts.partials.categoryitem')
<div class="bannerProduct mt-4 mb-5 container bg-light">
    <div class="d-flex flex-wrap gy-3">
        Je suis le fiche produit
    </div>
</div>
@endsection
