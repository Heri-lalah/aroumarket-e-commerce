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
    <ul class="offcanvas-body">
        <li class="nav-link disabled"><i class="fa fa-user-cog"></i> Parametre de compte</li>
        <li class="nav-link disabled"><i class="fa fa-tools"></i> Changement mot de passe</li>
        <li class="nav-link btn-danger">
            <i class="fa fa-redo-alt h6 text-light"></i>
            <a class=" text-light" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                {{ __('Déconnection') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>
@endauth
