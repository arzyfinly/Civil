@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form method="post" action="{{ route('register') }}" class="login100-form validate-form"> 
                @csrf
                <span class="login100-form-title p-b-33">
                    {{ __('Register') }}
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
                    <input id="username" type="text" class="input100 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="example@student.net" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
                    <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                <div class="container-login100-form-btn m-t-20">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Register') }}
                    </button>
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
                        Have an account?
                    </span>

                    <a href="{{ route('login') }}" class="txt2 hov1">
                        Sign in
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
