@extends('layouts.app')
@section('main')
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5 animate__animated animate__fadeIn">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block text-center align-self-center">
                        <img src="{{asset('/storage/avatars/logo.png')}}" alt="logoaroumarket" width="300px">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            @yield('authform')
                            <div class="text-center">
                                @if (Route::has('password.request'))
                                <a class="btn-link small" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié ?') }}
                                </a>
                                @endif
                            </div>

                            <div class="text-center">
                                <a href="{{route('register')}}" class="small">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
