<header class="navbar navbar-expand-md mx-3">
    <a href="{{route('home')}}" class="navbar-brand">
        <img src="{{asset('avatars/logo.png')}}" class="logo" alt="aro-logo" width="40px">
    </a>
    <a href="{{route('home')}}" class="navbar-text navbar-brand">
        AroMarket
    </a>

    <button type="button" class="navbar-toggler navbar-light" data-bs-toggle="collapse" data-bs-target="#navbar-content">
        {{--<span class="navbar-toggler-icon border-primary"></span>--}}
        <i class="fa fa-align-justify p-2 menuicon rounded"></i>
    </button>


    <div class="collapse navbar-collapse" id="navbar-content">
        <nav>
            <ul class="navbar-nav ms-lg-5">
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="{{route('products')}}" class="nav-link">Produits</a></li>
                <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="" class="nav-link disabled">Contacter</a></li>
            </ul>
        </nav>
        <form action="#" class="d-flex ms-auto">
            <div class="input-group">
                <input type="search" class="form-control bg-transparent" aria-label="Search" placeholder="Rechercher ...">
                <button type="search" class="btn border-light btnsearch">Rechercher</button>
            </div>
        </form>
    </div>
</header>