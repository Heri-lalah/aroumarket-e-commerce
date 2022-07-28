@auth
<ul id="usercartsAndMessage">
    <li class="nav-item position-relative animate__animated animate__bounceInRight">
        <a href="{{ route('cart_index') }}" class="nav-link"  title="Cliquer ici pour voir votre panier"><i class="fa fa-shopping-cart h3 text-primary"></i></i></a>
        @if ($infoCarts>0)
        <span class="badge bg-danger rounded-circle position-absolute top-0 end-0 animate__animated animate__fadeIn">
                {{$infoCarts}}
        </span>
        @endif
    </li>
    <li class="ms-2 position-relative animate__animated animate__fadeIn">
        <a href="" class="nav-link"><i class="fab fa-facebook-messenger h3 text-info"></i></i></a>
        @if ($infoCarts>0)
        <span class="badge bg-danger rounded-circle position-absolute top-0 end-0 animate__animated animate__fadeIn">
                {{$infoCarts}}
        </span>
        @endif
    </li>
</ul>

@endauth
