<div class="modal fade mt-5" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header text-center">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
            </div>

            <div class="card-body">
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
            </div>
        </div>
    </div>
</div>
