@extends('admin.layouts.base')
@section('main')
    @if ($commandsCount<1)
        <p class="m-5"> Aucune données à afficher pour le moment.</p>
    @else
        <table class="table table-hover table-sm">

            <thead class="thead-info">
                <th></th>
                <th class="text-center">Ref</th>
                <th>Nom</th>
                <th>Prénoms</th>
                <th class="text-center">Montant Total</th>
                <th class="text-center">Payement</th>
                <th class="text-center">Status</th>
                <th class="text-center">Livraison</th>
            </thead>

            <tbody>
                @foreach ($commands as $command)
                    <tr>
                        <td class="text-center align-middle"><a href="{{route('command_view', ['command' => $command ])}}" type="button" class="btn btn-primary btn-sm">plus d'info</a></td>
                        <td class="text-center align-middle">{{$command->id}}</td>
                        <td class="align-middle">{{$command->user->name}}</td>
                        <td class="align-middle">{{$command->user->firstName}}</td>
                        <td class="text-center align-middle">{{number_format($command->prix_TTC_Total)}} Ariary</td>

                        <td class="text-center align-middle">
                            @if ($command->paied)
                                <i class='fa fa-check-circle text-success fs-5'></i>
                            @else
                                <i class='fa fa-times fs-5 text-danger'></i>
                            @endif

                        </td>

                        <td class="text-center align-middle">
                            @if ($command->status=='valid')
                                <i class='fa fa-check-circle text-success fs-5'></i>
                            @else
                                <i class='fa fa-times fs-5 text-danger'></i>
                            @endif
                        </td>

                        <td class="text-center align-middle">
                            @if ($command->delivred)
                                <i class='fa fa-check-circle text-success fs-5'></i>
                            @else
                                @if ($command->status=='valid')
                                    @if ($command->statusLivraison=='')
                                        <i class='fa fa-times fs-5 text-danger'></i>
                                    @elseif($command->statusLivraison=='reserved')

                                        @if (Auth::user()->id == $command->admin_respo)

                                        <form action="{{route('postfinalisationLivraison',['command' => $command])}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-success">Finaliser</button>
                                        </form>

                                        @else

                                        <span class="text-danger">Résérvé</span>

                                        @endif
                                    @else

                                        <i class='fa fa-times fs-5 text-danger'></i>

                                    @endif
                                @else

                                <i class='fa fa-times fs-5 text-danger'></i>

                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    @endif
@endsection
