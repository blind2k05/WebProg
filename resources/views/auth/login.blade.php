@extends('layouts.auth') 

@section('content')
<div class="auth-wrapper">
    <div class="auth-card">

        <!-- left side -->
        <div class="auth-left rounded-5">
            <img class="logo m-4 my-Logo" src="{{ asset('img/logo.png') }}" alt="logo">
            <div class="auth-lefts">
                <h1>Welcome Back!</h1>
                <p>
                    Masuk untuk menikmati berbagai promo,
                    kemudahan transaksi, dan fitur eksklusif.
                </p>       
            </div>
        </div>

        <!-- right side -->
        <div class="auth-right">
            <h3 class="mb-4 fw-bold text-primary fs-1">Login</h3>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- form -->
                <div class="mb-3">
                    <label class="form-label text-white">Email</label>
                    <input type="email" name="email" 
                           value="{{ old('email') }}" 
                           class="form-control @error('email') is-invalid @enderror" 
                           required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="mb-3">
                    <label class="form-label text-white">Password</label>
                    <input type="password" name="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>

                <button type="submit" class="btn btn-danger w-100 rounded-pill mb-3">
                    Login
                </button>

                @if (Route::has('password.request'))
                    <div class="text-center mb-2">
                        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                    </div>
                @endif

                <div class="text-center text-secondary">
                    Belum punya akun? 
                    <a href="{{ route('register') }}">Register</a>
                </div>
            </form>
        </div>

    </div>
</div>

@include('layouts.footer') 
@endsection
