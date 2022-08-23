@extends('admin.layouts.base')
@section('main')
    @if ($myLivraisons->count()>0)
        @foreach ($myLivraisons as $livraison)
        <div class="row m-2">
            <div class="col">Réf Commande</div>
            <div class="col">{{$livraison->id}}</div>
            <div class="col">
                <form action="{{route('postfinalisationLivraison',['command' => $livraison])}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-success">Finaliser</button>
                </form>
            </div>
        </div>
        @endforeach
    @else
    <div class="m-5"></div>
        <p>Aucune données à afficher pour le moment.</p>
        <p><a href="{{route('showcommands',['status' => 1])}}"><i class="fa fa-hand-point-right fs-5 me-1 text-success animate__animated animate__fadeIn animate__infinite"></i>Passez à une autre résérvation</a></p>
    @endif
@endsection
