@extends('admin.layouts.base')
@section('main')
    <p class="title">
        Liste des
        {{Route::currentRouteName()==='usersadmin' ? 'administrateurs' : 'utilisateurs'}}
    </p>
    <table class="table table-hover table-sm">

        <thead class="thead-info">
            <th class="text-center">Ref</th>
            <th>Prénoms</th>
            <th>Nom</th>
            <th>Types</th>
            <th>Image</th>
        </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
                <td class="text-center">{{$user->id}}</td>
                <td>{{$user->firstName}}</td>
                <td>{{$user->name}}</td>
                <td>
                    {{$user->admin==1 ? 'Admin' : 'Utilisateur simple'}}
                </td>
                <td></td>
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection
