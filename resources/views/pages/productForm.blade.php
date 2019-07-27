@extends('layouts.app')

@section('content')

<div class="container back-color text-center">
    <div class="row">
        <div class="col-md-6 mx-auto py-5">

            {{-- <div class=" col-md-4 mb-3 mx-auto pt-4" style="background-color: #320B0B;opacity: .7;">
                <img class="mb-4" src="./assets/logo.png" alt="" width="90" height="72">
            </div>
            <p class="lead font-weight-bold" style="color: #320B0B;">COCOMOCO FACTORY</p>
            <h1 class="h3 mb-5 font-weight-normal text-white">Please sign in</h1> --}}
            <form class="form-signin" enctype="multipart/form-data" method="POST" action="{{ route('productstore') }}">
            @csrf
                <label for="inputEmail" class="sr-only">Email address</label>

                <input type="email" id="inputEmail" class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" required  autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="checkbox mb-5 mt-3">
                    <label class="float-left">
                        <input type="checkbox" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>    {{ __('Remember Me') }}
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #ff0000">Sign in</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link float-left" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
            </form>
        </div>
    </div>
</div>
@endsection
