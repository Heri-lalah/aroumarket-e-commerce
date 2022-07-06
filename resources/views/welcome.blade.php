@extends('layouts.template')

@section('main')


{{--CARROUSSEL SECTION--}}


<div class="myCarousel">
    <div class="carousel slide" data-bs-ride="carousel" id="productCarousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/coding.jpg') }}" alt="coding" class="d-block w-100 img-fluid">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/mixing.jpg') }}" alt="mixing" class="d-block w-auto img-fluid">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/teaching.jpg') }}" alt="teaching" class="d-block w-auto img-fluid">
            </div>
        </div>
        <button type="button" class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarousel">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button type="button" class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarousel">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>


<div class="container-md mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-3 text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <p>Simple</p>
        </div>
        <div class="col-sm-12 col-md-3 text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <p>Sécurisé</p>
        </div>
        <div class="col-sm-12 col-md-3 text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <p>12h</p>
        </div>
        <div class="col-sm-12 col-md-3 text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <p>Service après vente</p>
        </div>
    </div>
</div>

@endsection
