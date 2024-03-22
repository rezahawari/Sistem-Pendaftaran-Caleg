{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
@section("konten")
<section class="login">
<div class="container">
    <img src="{{asset('img/logo.png') }}" alt="" class="logo mx-auto d-block">
    <div class="form">
    <p>SIGN <b>UP<b></p>
    <form>
  <div class="form-group">
    <input type="email" class="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
  </div>
  <br>
  <div class="form-group">
    <input type="email" class="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
  </div>
  <br>
  <div class="form-group">
    <input type="email" class="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <br>
  <div class="form-group">
    <input type="email" class="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
  </div>
  <br>
  <div class="form-group">
    <input type="email" class="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Re-enter password">
  </div>
  <br>
  <button type="submit" class="sbmt">Sign UP</button>
  <br>
  <br>
  <div class="su">
  <p>Have Account ?</p>
  <a href="#" class="su1">Sign IN</a>
</div>
</div>
</form>
    </div>
    </div>
</section>
@endsection
