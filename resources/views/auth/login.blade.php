@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-primary text-uppercase font-weight-bolder"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>
                
                <div class="card-body">
                        @isset($url)
                        <form class="my-4" method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                        @else
                        <form method="POST" class="my-4" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @endisset
                            @csrf

                        <div class="form-group row">
                            <div class="input-group col-lg-12 mb-4">  
                                <input id="email" type="email" placeholder="Email" class="form-control input-lg bg-white border-right-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                <div class="input-group-append">
                                    <span class="input-group-text bg-white input-lg px-4 border-md border-left-0">
                                        <i class="fa fa-user text-muted"></i>
                                    </span>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror
                            </div>
                             <!-- Password -->
                            <div class="input-group col-lg-12 mb-4">

                                <input id="password" type="password" placeholder="Password" class="form-control input-lg bg-white border-right-0  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                                <div class="input-group-append">
                                    <span class="input-group-text bg-white input-lg px-4 border-md border-left-0">
                                        <i class="fa fa-lock text-muted"></i>
                                    </span>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                        <!--div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div-->
                        <div class="input-group col-lg-12 mb-2">
            
                                <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>
                             </div>
                            <div class="col-lg-8">
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


@endsection
