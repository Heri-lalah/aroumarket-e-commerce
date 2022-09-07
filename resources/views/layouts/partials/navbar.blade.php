<header class="navbar navbar-expand-lg">
    <a href="{{route('about')}}" class="navbar-brand ms-3">
        <img src="{{asset('/storage/avatars/logo.png')}}" class="logo" alt="aro-logo" width="40px">
    </a>
    <a href="{{route('about')}}" class="navbar-text navbar-brand text-primary">
        ArouMarket
    </a>

    <button type="button" class="navbar-toggler navbar-light" data-bs-toggle="collapse" data-bs-target="#navbar-content">
        {{--<span class="navbar-toggler-icon border-primary"></span>--}}
        <i class="fa fa-align-justify p-2 menuicon rounded"></i>
    </button>

    <div class="collapse navbar-collapse mx-3" id="navbar-content">
        <form class="d-sm-inline-block form-inline ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group input-group-sm">
                <input type="text" class="form-control bg-light border-0" placeholder="Rechercher..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <button class="btn btn-primary disabled" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </form>
        <nav class="ms-auto">
            <ul class="navbar-nav ms-2">
                <li class="nav-item fs-4">
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
                <li class="nav-item fs-4"><a href="{{route('about')}}" class="nav-link text-primary">A-propos</a></li>
                <li class="nav-item fs-4"><a href="" class="nav-link disabled">Contacter</a></li>
            </ul>
        </nav>


        <ul class="navbar-nav ms-auto align-items-center">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link fs-4 text-info" href="{{ route('login') }}" type="buttom" {{--data-bs-toggle="modal" data-bs-target="#loginModal"--}}>{{__('Mon compte')}}</a>
                    </li>
                @endif

                {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link h5 pink" href="{{route('register')}}" type="buttom" data-bs-toggle="modal" data-bs-target="#registerModal">{{__("S'inscrire")}}</a>
                        </a>
                    </li>
                @endif --}}
            @else
                @if ($commandnotpaied>0)
                <li class="nav-item ml-3 position-relative p-2" type="button" data-bs-toggle="modal" data-bs-target="#message">
                    <i class="fa fa-envelope fs-5"></i>
                    <span class="badge bg-danger rounded-circle position-absolute top-0 end-0 fs-small">
                        1
                    </span>
                </li>
                @endif
                <li class="nav-item dropdown">
                    <a class="nav-link d-flex  ml-3" href="#"  id="userDropdown" role="button"  data-bs-toggle="dropdown" data-bs-target="#userTools" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="mt-2 me-1 fs-5  text-primary">{{ Str::length(Auth::user()->firstName.' '.Auth::user()->name)>10 ? Str::substr(Auth::user()->firstName.' '.Auth::user()->name, 0, 10).'...' : Auth::user()->firstName.' '.Auth::user()->name }}</span>
                        <img src="{{ Storage::url('avatars/img_avatar.png') }}" class="rounded-circle" alt="avatar" width="40px">
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
