<header class="navbar navbar-expand-md shadow-sm">
    <a href="{{route('about')}}" class="navbar-brand ms-3">
        <img src="{{asset('/storage/avatars/logo.png')}}" class="logo" alt="aro-logo" width="40px">
    </a>
    <a href="{{route('about')}}" class="navbar-text navbar-brand text-primary">
        AroMarket
    </a>

    <button type="button" class="navbar-toggler navbar-light" data-bs-toggle="collapse" data-bs-target="#navbar-content">
        {{--<span class="navbar-toggler-icon border-primary"></span>--}}
        <i class="fa fa-align-justify p-2 menuicon rounded"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbar-content">
        <nav>
            <ul class="navbar-nav ms-lg-5">
                <li class="nav-item"><a href="{{route('products')}}" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">A-propos</a></li>
                <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="" class="nav-link disabled">Contacter</a></li>
            </ul>
        </nav>
        <form action="#" class="d-flex ms-auto me-3">
            <div class="input-group">
                <input type="search" class="form-control bg-transparent" aria-label="Search" placeholder="Rechercher ...">
                <button type="search" class="btn btn-outline-primary btnsearch">Rechercher</button>
            </div>
        </form>
    </div>
</header>
