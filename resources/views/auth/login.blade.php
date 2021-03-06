@extends('layouts.app')
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-33">
                    Account Login
                </span>

                <div class="wrap-input100 validate-input">
                    <input id="nim" type="text" class="input100 @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autofocus placeholder="nim">
                    @error('nim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="row rs1 validate-input">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="input-100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="container-login100-form-btn m-t-20">
                    <input type="submit" class="login100-form-btn" name="login" value="Sign In">
                </div>

                <div class="text-center p-t-45 p-b-4">
                    <span class="txt1">
                        Forgot
                    </span>

                    <a href="#" class="txt2 hov1">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center">
                    <span class="txt1">
                        Create an account?
                    </span>

                    <a href="{{ route('register') }}" class="txt2 hov1">
                        Sign up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
