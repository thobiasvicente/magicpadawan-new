@extends('layouts.app')

@section('content')

<div class="page-header header-filter" style="background-image: url('{{asset('img/bg25.jpg')}}');background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto mt-5 pt-5">
                <div class="card card-login">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-header card-header-danger text-center">
                            <h4 class="card-title">{{ __('Login') }}</h4>
                            <div class="social-line">
                                <a href="#" class="btn btn-just-icon btn-link">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a href="#" class="btn btn-just-icon btn-link">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-just-icon btn-link">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </div>
                        </div>
                        <p class="description text-center">Ou vá pelo clássico</p>
                        <div class="card-body">
                            <span class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">mail</i>
                                        </span>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control" placeholder="Email...">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </span>
                            <span class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="form-control" placeholder="Senha...">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </span>
                            <div class="input-group-prepend">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        <span class="form-check-sign">
                                            <span class="check">
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <div class="input-group-prepend">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua senha?') }}
                                </a>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-danger btn-link btn-wd btn-lg">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection