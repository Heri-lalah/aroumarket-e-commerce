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

    <div class="collapse navbar-collapse mx-3" id="navbar-content">
        <nav>
            <ul class="navbar-nav ms-lg-5">
                <li class="nav-item"><a href="{{route('products')}}" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">A-propos</a></li>
                <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="" class="nav-link disabled">Contacter</a></li>
            </ul>
        </nav>


        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link h5" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link h5" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle h5" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-danger h5" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        {{-- <form action="#" class="d-flex ms-auto me-3">
            <div class="input-group">
                <input type="search" class="form-control bg-transparent" aria-label="Search" placeholder="Rechercher ...">
                <button type="search" class="btn btn-outline-primary btnsearch">Rechercher</button>
            </div>
        </form> --}}
    </div>
</header>
