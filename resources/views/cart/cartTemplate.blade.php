<ul class="nav mt-2">
    <li class="h4 nav-item"><a href="{{route('cart_index')}}" class="nav-link carttabs">Mon panier</a></li>
    @auth
    <li class="nav-item position-relative">
        <a href="{{route('cart_command')}}" class="h4 nav-link carttabs">
            Suivi Commandes
        </a>
    </li>
    @endauth
</ul>
