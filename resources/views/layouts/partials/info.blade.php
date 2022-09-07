@if ($infoCarts>0)
<ul id="usercartsAndMessage">
    <li class="nav-item position-relative animate__animated animate__bounceInRight">
        <a href="{{ route('cart_index') }}" class="nav-link h2"  title="Cliquer ici pour voir votre panier">
            <i class="fa fa-shopping-cart"></i>
        </a>
        <span class="badge bg-danger rounded-circle position-absolute top-0 end-0 animate__animated animate__fadeIn">
                {{$infoCarts}}
        </span>
    </li>
</ul>
@endif
