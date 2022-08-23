<header class="navbar navbar-expand-md border-bottom">
    <ul class="navbar-nav w-100 justify-content-between align-items-md-center">
        <li class="ms-2 bg-info">
            <form class="d-sm-inline-block form-inline me-auto w-100">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control bg-light border-0" placeholder="Rechercher..."
                        aria-label="Search">
                    <div class="input-group-sm">
                        <button class="btn-primary border-0 rounded-end h-100" type="button">
                            <i class="fas fa-search fa-sm" ></i>
                        </button>
                    </div>
                </div>
            </form>
        </li>

        <li class="ms-2 py-2 d-none">
            <span class="fs-5 mx-md-3 me-3"><a href="{{route('products')}}"><i class="fa fa-bell"></i></a></span>
            <span class="fs-5 mx-md-3"><a href="{{route('about')}}"><i class="fa fa-envelope"></i></a></span>
        </li>

        <!-- Authentication Links -->
        <li class="dropdown">

            <a class="nav-link ml-3 d-flex justify-content-between d-lg-inline" href="#"  id="userDropdown" role="button"  data-bs-toggle="dropdown" data-bs-target="#userTools" aria-haspopup="true" aria-expanded="false" v-pre>
                <span class="align-middle fs-5">{{ Str::length(Auth::user()->firstName)>10 ? Str::substr(Auth::user()->firstName, 0, 10).' '.Str::upper(Str::substr(Auth::user()->name, 0, 1)) : Auth::user()->firstName.' '.Str::upper(Str::substr(Auth::user()->name, 0, 1))}}</span>
                <img class="rounded-circle" src="{{ Storage::url('avatars/img_avatar.png') }}" alt="avatar" width="40px">
            </a>

            <div class="dropdown-menu shadow" aria-labelledby="userDropdown" style="z-index:5000">

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
</header>
