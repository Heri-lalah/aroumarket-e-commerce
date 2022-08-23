<div class="sidebar text-primary h-100" style="width: 18vw">

    <div class="text-center px-4 nav mt-2 py-2">
        <a href="{{route('admin')}}" class="navbar-brand align-middle">
            <img src="{{asset('/storage/avatars/logo.png')}}" class="logo" alt="aro-logo" width="30px">
        </a>

        <a href="{{route('admin')}}" class="text-primary d-none d-lg-inline align-self-center fw-bolder">
            ArouMarket
        </a>
    </div>

    <ul class="navbar-nav mt-2 position-sticky top-0 w-100 bg-light">
        <li class="nav-item px-4 py-2 align-self-center align-self-md-start">

            {{-- <a href="{{route('admin')}}">
                <i class="fas fa-chart-bar fs-5 me-2 text-info"></i>
                <span class="d-none d-md-inline">Tableau de bord</span>
            </a> --}}

            <a type="button" data-bs-toggle="collapse" data-bs-target="#dashboard">
                <i class="fas fa-chart-bar fs-5 me-2 text-info"></i>
                <span class="d-none d-md-inline fw-bolder  text-info">Dashboard</span>
            </a>

            <ul class="collapse show" id="dashboard">
                <li class="my-1"><a href="{{route('admin')}}"><i class="fa fa-home"></i><span class="d-none d-lg-inline ms-2">Accueil</span></a></li>
                <li class="my-1"><a href="{{route('users')}}"><i class="fa fa-user-circle"></i><span class="d-none d-lg-inline ms-2">Utilisateurs</span></a></li>
                <li class="my-1"><a href="{{route('admin_products', ['online' => "tous"])}}"><i class="fa fa-industry"></i><span class="d-none d-lg-inline ms-2">Produits</span></a></li>
                <li class="my-1"><a href="{{route('showcommands',['status' => 'tous'])}}"><i class="fa fa-shopping-cart"></i><span class="d-none d-lg-inline ms-2">Commandes</span></a></li>
            </ul>
        </li>

        <li class="nav-item px-4 py-2 align-self-center align-self-md-start d-none">
            <i class="fa fa-calendar-alt me-2 fs-5 text-warning"></i>
            <span class="d-none d-md-inline text-warning fw-bolder">Ordre du jour</span>
        </li>
    </ul>

</div>
