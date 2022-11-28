<header class="navbar navbar-expand-lg">
    <a href="{{route('about')}}" class="navbar-brand ms-3">
        <img src="{{asset('/storage/avatars/logo.png')}}" class="logo. animate__animated animate__rotateIn" alt="aro-logo" width="40px">
    </a>
    <a href="{{route('about')}}" class="navbar-text navbar-brand text-primary">
        ArouMarket
    </a>

    <button type="button" class="navbar-toggler navbar-light" data-bs-toggle="collapse" data-bs-target="#navbar-content">
        {{--<span class="navbar-toggler-icon border-primary"></span>--}}
        <i class="fa fa-align-justify p-2 menuicon rounded"></i>
    </button>

    <div class="collapse navbar-collapse mx-3" id="navbar-content">
        <nav class="ms-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    @auth
                        @if (Auth::user()->admin)
                            <a href="{{route('admin')}}" class="nav-link text-primary">Dashboard</a>
                        @else
                            <a href="{{route('products')}}" class="nav-link text-primary">Accueil</a>
                        @endif
                    @else
                        <a href="{{route('products')}}" class="nav-link text-primary">Accueil</a>
                    @endauth

                </li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link text-primary">A-propos</a></li>
                <li class="nav-item"><a href="{{route('layout.contact')}}" class="nav-link">Contact</a></li>
            </ul>
        </nav>


        <ul class="navbar-nav ms-md-auto align-md-items-center">

            @if(Route::currentRouteName() !=='payement.index')
            @if ($infoCarts>0)
            <li class="nav-item align-self-md-center me-sm-auto me-lg-5 position-relative p-2 animate__animated animate__fadeIn">
                <a href="{{ route('cart_index') }}" class="nav-link"  title="Cliquer ici pour voir votre panier">
                    <i class="fa fa-shopping-cart fs-4"></i>
                </a>
                <span class="badge bg-danger rounded-circle position-absolute top-0 end-0 animate__animated animate__fadeIn">
                        {{$infoCarts}}
                </span>
            </li>
            @endif
            @endif

            <!-- Authentication Links -->
            @guest
                @if(Route::currentRouteName()!=='login')
                @if (Route::has('login'))
                    <li class="nav-item nav-link">
                        <a class="btn btn-sm fs-6 fw-bolder btn-warning p-2 rounded-pill" href="{{ route('login') }}" type="buttom">{{__('Mon compte')}}</a>
                    </li>
                @endif
                @endif

                {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link h5 pink" href="{{route('register')}}" type="buttom" data-bs-toggle="modal" data-bs-target="#registerModal">{{__("S'inscrire")}}</a>
                        </a>
                    </li>
                @endif --}}
            @else

                <li class="nav-item dropdown">
                    <a class="nav-link d-flex  ml-3" href="#"  id="userDropdown" role="button"  data-bs-toggle="dropdown" data-bs-target="#userTools" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="mt-2 me-1 text-primary">{{ Str::length(Auth::user()->firstName.' '.Auth::user()->name)>10 ? Str::substr(Auth::user()->firstName.' '.Auth::user()->name, 0, 10).'...' : Auth::user()->firstName.' '.Auth::user()->name }}</span>
                        <img src="{{ Storage::url('avatars/img_avatar.png') }}" class="rounded-circle ms-sm-auto" alt="avatar" width="40px">
                    </a>

                    <div class="dropdown-menu shadow" aria-labelledby="userDropdown">

                        <a href="{{ route('logout') }}" class="dropdown-item fs-6 text-danger"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw text-danger"></i>
                            {{ __('Déconnection') }}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>

                    </div>
                </li>
            @endguest
        </ul>
    </div>
</header>
