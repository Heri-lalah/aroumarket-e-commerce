@extends('layouts.template')

@section('main')

<div class="myCarousel">
    <div class="row me-2">
        <div class="col-sm-12 col-md-2 mt-2">
            <ul class="list-group list-group-flush">
                <li class="list-group-item border-0 bg-transparent"><a href="" class="nav-link">Accueil</a></li>
                <li class="list-group-item border-0 bg-transparent"><a href="" class="nav-link">Produits</a></li>
                <li class="list-group-item border-0 bg-transparent"><a href="" class="nav-link">Nos Services</a></li>
                <li class="list-group-item border-0 bg-transparent"><a href="" class="nav-link disabled">Nous contacter</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-10 mt-4">
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci ex illo tenetur sit, corrupti sunt. Beatae reprehenderit architecto quo, sit ex quos illum consequuntur. Eligendi suscipit minus laboriosam, ut esse ab perferendis aut nam hic? Animi harum laboriosam doloribus ab aliquam eveniet magni eos consequuntur deserunt. Qui, tempora. Illo incidunt error repellendus odit quis neque praesentium quisquam id officiis laborum! Autem, tempora necessitatibus quas sint exercitationem, dolore ipsum commodi sequi laboriosam quia in. Fugit cum neque fuga voluptates reiciendis totam omnis voluptatem quos possimus temporibus, culpa cupiditate exercitationem quia, delectus quod iure veritatis voluptate quibusdam at eligendi consequatur illum impedit!</p>
        </div>
    </div>
</div>

<div class="container-md">
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <p>Simple</p>
        </div>
        <div class="col-sm-12 col-md-3">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <p>Sécurisé</p>
        </div>
        <div class="col-sm-12 col-md-3">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <p>12h</p>
        </div>
        <div class="col-sm-12 col-md-3">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <p>Service après vente</p>
        </div>
    </div>
</div>

@endsection

@section('footer')
    <h1>I wanna be at the bottom</h1>
@endsection
