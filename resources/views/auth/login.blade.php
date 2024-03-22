{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends("layout")
@section('konten')
    <section class="login mt-5">

        <div class="container">
            <div class="mobile-login">
                <img src="{{ asset('img/logo.png') }}" alt="" class="logo mx-auto d-block">
                <div class="form">
                    <p>SIGN <b>IN<b></p>
                    <form class="form-input" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="username @error('email') is-invalid @enderror" id="exampleInputEmail1"
                                value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Username"
                                name="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Username atau Password Tidak Benar</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" class="password @error('password') is-invalid @enderror"
                                id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <br>
                        <button type="submit" class="sbmt">Sign In</button>
                        <br>
                        <br>
                        {{-- <div class="smallttl">
                            <p class="fw-normal" style="font-size: 15px">Jika Belum Memiliki Akun <span class="fw-bold su1"><a href="">Klik
                                        Di
                                        Sini</a></span></p>
                        </div> --}}
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection
