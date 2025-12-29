@extends('layouts.auth')




@section('content')

<div class="auth-wrapper">
    <div class="auth-card register-card">

        <!-- LEFT SIDE -->
        <div class="auth-left rounded-5">
            <img class="logo  m-4 my-Logo"src="{{ asset('img/logo.png') }}" alt="logo  ">
            <div class="auth-lefts">
                <h1>Hello<br>World.</h1>
                <p>
                    Bergabunglah dan nikmati berbagai promo,
                    kemudahan transaksi, dan fitur eksklusif.
                </p>
                            
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="auth-right">
            <h3 class="mb-4 fw-bold c text-primary fs-1">Register</h3>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- NAME -->
                <div class="mb-3">
                    <label class="form-label text-white">Name</label>
                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror"
                        required autofocus
                    >
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- EMAIL -->
                <div class="mb-3">
                    <label class="form-label text-white">Email</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror"
                        required
                    >
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- PASSWORD -->
                <div class="mb-3">
                    <label class="form-label text-white">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        required
                    >
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- CONFIRM -->
                <div class="mb-4">
                    <label class="form-label text-white">Confirm Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        class="form-control"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-danger w-100 rounded-pill">
                    Register
                </button>

                <div class="text-center mt-3 text-secondary">
                    <small>
                        Sudah punya akun?
                        <a href="{{ route('login') }}">Masuk</a>
                    </small>
                </div>
            </form>
        </div>

    </div>
</div>
@include('layouts.footer') 
@endsection
