<div class="modal fade mt-5 show" id="loginModal" {{--aria-modal="true" role="dialog" style="display: block"--}}>

    <div class="modal-dialog">
        <div class="modal-content">
            {{-- <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3 justify-content-between">
                        <label for="email" class="col-md-4 col-form-label">{{__('Adresse e-mail') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-between">
                        <label for="password" class="col-md-4 col-form-label">{{__('Mot de passe')}}</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 offset-md-4">
                        <div class="col-md-11">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Se souvenir de moi') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0 offset-md-3">
                        <div class="col-md-8 text-center">
                            <button type="submit" class="btn btn-primary w-75">
                                {{ __('Se connecter') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié ?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div> --}}
            <div class="card-body p-0">
                <button type="button" class="btn-close float-end m-3 btn-danger btn-sm btn-circle" data-bs-dismiss="modal"></button>
                <!-- Nested Row within Card Body -->
                <div class="row mt-2">
                    <div class="col-12 d-none d-lg-block bg-login-image text-center mt-2">
                        <img src="{{asset('/storage/avatars/logo.png')}}" alt="logoaroumarket" width="50px">
                    </div>
                    <div class="col-12 mt-2">
                        <div class="px-5 pt-1 pb-5">

                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Bienvenue !</h1>
                            </div>

                            <form class="user"  method="POST" action="{{ route('login') }}">

                                @csrf

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="adresse e-mail...">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror"  name="password" required autocomplete="current-password"
                                        id="exampleInputPassword" placeholder="mot de passe">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Se souvenir de moi') }}
                                        </label>
                                    </div>
                                </div>


                                <span>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Se connecter') }}
                                    </button>
                                </span>
                            </form>

                            <hr>

                            <div class="text-center">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link text-center" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié ?') }}
                                </a>
                                @endif
                            </div>

                            <div class="text-center">
                                <a href="{{route('register')}}">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
