@auth
<div class="modal show" id="message">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-envelope text-primary"></i>
                    <span class="btn-close float-end" data-bs-dismiss="modal"></span>
                </div>
                <div class="card-body">
                    <p>Bonjour {{Auth::user()->firstName.' '.Auth::user()->name}}.</p>
                    <p>Vous avez encore <span class="fw-bold text-primary">{{$commandnotpaied}} commande{{$commandnotpaied>1 ? 's' : ''}}</span> à regler pour procéder à la livraison. Merci de nous joindre pour toutes informations complémentaire. Cordialement!</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('cart_command') }}">Cliquer ici pour voir le details de commande</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth
