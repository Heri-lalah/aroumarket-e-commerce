@extends('admin.layouts.base')
@section('main')
    <div class="container">
        <table class="table table-borderless">
            <tr>
                <td class="align-middle">Ref de la commande</td>
                <td class="align-middle">{{$command->id}}</td>
            </tr>
            <tr>
                <td class="align-middle">Nom client</td>
                <td class="align-middle">{{$command->user->name}}</td>
            </tr>
            <tr>
                <td class="align-middle">Prénoms client</td>
                <td class="align-middle">{{$command->user->firstName}}</td>
            </tr>
            <tr>
                <td class="align-middle">Montant Total TTC</td>
                <td class="align-middle">{{number_format($command->prix_TTC_Total, 2)}} Ariary</td>
            </tr>
            <tr>
                <td class="align-middle">Payement</td>
                <td class="align-middle">
                    @if ($command->paied==1)
                        <i class='fa fa-check-circle text-success fs-5'></i>
                    @else
                        <a type="button" href="{{route('topayement',['command' => $command])}}" class="btn btn-outline-success w-100">Valider</a>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="align-middle">Status</td>
                <td class="align-middle">
                    @if ($command->status=='valid')
                        <i class='fa fa-check-circle text-success fs-5'></i>
                    @elseif ($command->status=='standby')
                        <i class='fa fa-exclamation-circle text-warning fs-5'></i>
                        <span class="ms-2">En attente</span>
                    @else
                        <i class='fa fa-exclamation-circle text-danger fs-5'></i>
                        <span class="ms-1">Réjété</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="align-middle">Livraison</td>
                <td class="align-middle">
                    @if ($command->delivred==1)
                        <i class='fa fa-check-circle text-success fs-5'></i>
                    @else
                        @if ($command->status=='valid')
                            @if ($command->statusLivraison=='')
                                <form action="{{route('reservation', ['command' => $command ])}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-info w-100">Résérver</button>
                                </form>
                            @elseif($command->statusLivraison=='reserved')
                                @if (Auth::user()->id == $command->admin_respo)

                                <form action="{{route('postfinalisationLivraison',['command' => $command])}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-success">Finaliser</button>
                                </form>

                                @else

                                <span class="text-danger">Résérvé</span>

                                @endif

                            @endif
                        @else

                        <i class='fa fa-times fs-5 text-danger'></i>

                        @endif
                    @endif
                </td>
            </tr>
        </table>
    </div>
@endsection
