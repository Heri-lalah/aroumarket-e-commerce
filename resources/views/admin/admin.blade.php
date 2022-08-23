@extends('admin.layouts.base')
@section('main')
<p class="text-primary">Tableau de bord journalière</p>

<div>
    <div class="user mt-2">
        <p class="fs-6 mt-2 text-secondary">Utilisateurs</p>

        <div class="intro row">

            <div class="col col-md-4">
                <div class="card shadow-sm border-primary">
                    <a href="{{route('users')}}" class="card-body d-flex justify-content-between align-items-center">
                        <div class="text-primary">Membres</div>
                        <div>
                            <span class="badge bg-primary fs-6 rounded-circle">
                                {{ $userscount }}
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col col-md-4">
                <div class="card shadow-sm border-success">
                    <a href="{{route('usersadmin')}}" class="card-body d-flex justify-content-between align-items-center">
                            <div class="text-success">Admin</div>
                            <div class="text-center">
                                <span class="badge bg-success fs-6 rounded-circle">
                                    {{ $admincount }}
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <p class="text-secondary">Produits</p>
        <div class="row g-2">

            @if ($onlineProductscount>0)
            <div class="col col-md-4">
                <div class="card shadow-sm border-info">
                    <a href="{{route('admin_products',['online'=>'en_ligne'])}}" class="card-body d-flex justify-content-between align-items-center">
                        <div class=" text-info">En ligne</div>
                        <div class="text-gray-500 mb-0 text-center">
                            <span class="badge bg-info fs-6 rounded-circle">
                                {{ $onlineProductscount }}
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            @endif

            @if ($offlineProductscount > 0)
            <div class="col col-md-4">
                <div class="card shadow-sm border-info">
                    <a href="{{route('admin_products',['online' => 'offline'])}}" class="card-body d-flex justify-content-between align-items-center">
                        <div class=" text-info">Non en ligne</div>
                        <div class="text-gray-500 mb-0 text-center">
                            <span class="badge bg-danger fs-6 rounded-circle">
                                {{ $offlineProductscount }}
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            @endif

            <div class="col col-md-4">
                <div class="card shadow-sm border-info">
                    <a href="{{route('toNewProduct')}}" class="card-body d-flex justify-content-between align-items-center">
                        <div class=" text-info">Nouveau produit</div>
                        <div class="text-gray-500 mb-0 text-center">
                            <span class="badge bg-info fs-6 rounded-circle">
                                <i class="fa fa-pencil-alt"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col col-md-4">
                <div class="card shadow-sm border-danger">
                    <a href="{{route('toDeleteProduct')}}" class="card-body d-flex justify-content-between align-items-center">
                        <div class=" text-info">Suppression produit</div>
                        <div class="text-gray-500 mb-0 text-center">
                            <span class="badge py-1 text-danger rounded-circle">
                                <i class="fa fa-minus-circle fs-4"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="commands mt-1">
        <p class="text-secondary">Commandes</p>
        <div class="commande row g-2">

            <div class="col col-md-4">
                <div class="card shadow-sm border-danger">
                    <a href="{{route('showcommands',['status'=> 1])}}" class="card-body d-flex justify-content-between align-items-center">
                        <div class=" text-danger">Livraison</div>
                        <div class="text-gray-500 mb-0 text-center">
                            @if ($commands_1 > 0)
                            <span class="badge bg-danger fs-6 rounded-circle">
                                {{  $commands_1}}
                            </span>
                            @else
                            <div class=" text-success">Aucune</div>
                            @endif
                        </div>
                    </a>
                </div>
            </div>

            <div class="col col-md-4">
                <div class="card shadow-sm border-warning">
                    <a href="{{route('showcommands',['status' => 2])}}" class="card-body d-flex justify-content-between align-items-center">
                        <div class=" text-warning">Validation</div>
                        <div class="text-gray-500 mb-0 text-center">
                            @if ($commands_2 > 0)
                            <span class="badge bg-danger fs-6 rounded-circle">
                                {{  $commands_2}}
                            </span>
                            @else
                            <div class=" text-success">Aucune</div>
                            @endif
                        </div>
                    </a>
                </div>
            </div>

            <div class="col col-md-4">
                <div class="card shadow-sm border-info">
                    <a href="{{route('showcommands',['status'=>3])}}" class="card-body d-flex justify-content-between align-items-center">
                        <div class=" text-info">Payement</div>
                        <div class="text-gray-500 mb-0">
                            @if ($commands_3 > 0)
                            <span class="badge bg-danger fs-6 rounded-circle">
                                {{  $commands_3}}
                            </span>
                            @else
                            <div class=" text-success">Aucune</div>
                            @endif
                        </div>
                    </div>
                </a>
            </div>

            @if ($commands_0 > 0)
            <div class="col col-md-4">
                <div class="card shadow-sm border-info">
                    <a href="{{route('showcommands',['status'=>0])}}" class="card-body d-flex justify-content-between align-items-center">
                        <div class="text-success">Livré</div>
                        <div class="text-gray-500 mb-0 text-center">
                            <span class="badge bg-success fs-6 rounded-circle">
                                {{  $commands_0}}
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            </div>
        </div>
    </div>
</div>

@if ($mylivraisonreserved > 0)
<a href="{{route('MyLivraison',['user' => Auth::user()])}}" class="position-absolute animate__animated animate__fadeIn animate__infinite animate__slower p-1" id="adminInfo">
    <i class="fa fa-shipping-fast fs-3"></i>
    <span class="badge bg-danger rounded-circle position-absolute start-0 top-0">{{$mylivraisonreserved}}</span>
</a>
@endif

@endsection
