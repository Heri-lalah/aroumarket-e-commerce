<ul class="nav mt-2">
    <li class="h4 nav-item"><a href="{{route('cart_index')}}" class="nav-link carttabs">Mon panier</a></li>
    @auth
    <li class="nav-item position-relative">
        <a href="{{route('cart_command')}}" class="h4 nav-link carttabs" title="Vous avez {{$commandnotpaied}} en cours">
            Suivi Commandes
        </a>
        @if ($commandnotpaied>0)
        <span class="badge bg-warning rounded-circle position-absolute top-0 end-0">
                {{$commandnotpaied}}
        </span>
        @endif
    </li>
    @endauth
</ul>
