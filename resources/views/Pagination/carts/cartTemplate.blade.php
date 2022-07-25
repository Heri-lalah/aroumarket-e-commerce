<ul class="nav nav-tabs mt-2">
    <li class="h4 nav-item"><a href="{{route('cart_index')}}" class="nav-link carttabs">Mon panier</a></li>
    <li class="nav-item position-relative">
        <a href="{{route('cart_command')}}" class="h4 nav-link carttabs" title="Vous avez {{$info}} en cours">
            Suivi Commandes
        </a>
        @if ($info>0)
        <span class="badge bg-warning rounded-circle position-absolute top-0 end-0">
                {{$info}}
        </span>
        @endif
    </li>
</ul>
