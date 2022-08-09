<ul class="navbar navbar-expand navbar-nav justify-content-between border-bottom">
    <li class="navbar-nav ms-2">
        <form class="d-sm-inline-block form-inline mr-auto mw-100 navbar-search">
            <div class="input-group input-group-sm">
                <input type="text" class="form-control bg-light border-0" placeholder="Rechercher..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </li>
    <!-- Authentication Links -->
    <li class="d-flex justify-content-between">
        <div class="fs-5 mx-3"><a href="{{route('products')}}"><i class="fa fa-bell"></i></a></div>
        <div class="fs-5 mx-3"><a href="{{route('about')}}"><i class="fa fa-envelope"></i></a></div>
    </li>
    <li class="dropdown no-arrow">
        <a class="nav-link dropdown-toggle ml-3 d-flex justify-content-between d-lg-inline" href="#"  id="userDropdown" role="button"  data-bs-toggle="dropdown" data-bs-target="#userTools" aria-haspopup="true" aria-expanded="false" v-pre>
            <span class="mt-2 me-2">{{ Str::length(Auth::user()->firstName.' '.Auth::user()->name)>10 ? Str::substr(Auth::user()->firstName.' '.Auth::user()->name, 0, 10).'...' : Auth::user()->firstName.' '.Auth::user()->name }}</span>
            <img class="rounded-circle" src="{{ Storage::url('avatars/img_avatar.png') }}" alt="avatar" width="40px">
        </a>

        <div class="dropdown-menu shadow position-absolute animated--grow-in" aria-labelledby="userDropdown" style="margin-left: -4rem; z-index:5000">
            <a class="dropdown-item fs-6 text-gray-600 disabled" href="#">
                <i class="fas fa-user fa-sm fa-fw text-gray-400"></i>
                Profil
            </a>
            <a class="dropdown-item fs-6 text-gray-600 disabled" href="#">
                <i class="fas fa-cogs fa-sm fa-fw text-gray-400"></i>
                Parametres
            </a>

            <div class="dropdown-divider"></div>

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
</ul>
