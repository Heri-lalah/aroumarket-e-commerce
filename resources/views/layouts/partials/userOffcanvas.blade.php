@auth
<div class="offcanvas fade-off offcanvas-end" id="userTools" style="max-width: 350px">
    <div class="offcanvas-header shadow-sm">
        <h1 class="mt-3">
            <a class="nav-link h5" href="#" role="button"  data-bs-toggle="offcanvas" data-bs-target="#userTools" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
        </h1>
        <a type="button" class="fa fa-share-square h5" data-bs-dismiss="offcanvas"></a>
    </div>
    <nav class="offcanvas-body">
        <a href="" class="nav-link h6 disabled"><i class="fa fa-tools"></i> Parametre de compte</a>

        <a href="" class="nav-link h6 disabled"><i class="fa fa-user-cog"></i> Changement mot de passe</a>

        <a href="{{ route('cart_index') }}" class="nav-link h6 text-info"><i class="fa-solid fa-cart-plus"></i>
            Mon panier
        </a>

        <a href="{{ route('logout') }}" class="nav-link h6 bg-danger text-light fw-bold"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fa-solid fa-power-off"></i>
            {{ __('Déconnection') }}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </a>
    </nav>
</div>
@endauth
