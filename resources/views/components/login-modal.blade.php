<!-- Modal Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 overflow-hidden login-modal">

            <div class="row g-0">

                <!-- LEFT (INFO / PROMO) -->
                <div class="col-md-6 text-white p-4"
                     style="background: linear-gradient(135deg,#2b2f77,#ff8a00);">
                    <h4 class="fw-bold mb-3">Ayo gabung dengan kami!!</h4>
                    <h5 class="fw-medium mb-2">mari klaim promo sepuasnya</h5>
                    <br/>
                    <ul class="small">
                        <li>Promo & hadiah eksklusif</li>
                        <li>Proses cepat & aman</li>
                        <li>Akses penuh fitur</li>
                    </ul>
                </div>

                <!-- RIGHT (LOGIN FORM) -->
                <div class="col-md-6 p-4">

                    <div class="text-center mb-4">
                        <!-- <h5 class="fw-bold mb-3">Masuk</h5> -->

                        <div class="d-flex justify-content-center gap-3">
                            
                            <button type = "submit" form="loginForm"
                                class="btn btn-warning px-4">
                                LOGIN
                            </button>
                
                            @if (Route::has('register'))
                                <a class="btn btn-outline-warning px-4" href="{{ route('register') }}">
                                    REGISTER
                                </a>
                            @endif
                        </div>
                    </div>
                    

                    <!-- form -->
                    <form id="loginForm" method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- email -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                                required autofocus
                            >

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- PASSWORD --}}
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                required
                            >

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- REMEMBER ME --}}
                        <div class="mb-3 form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="remember"
                                {{ old('remember') ? 'checked' : '' }}
                            >
                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>

                        {{-- SUBMIT --}}
                        <button type="submit" class="btn btn-warning w-100">
                            Login
                        </button>

                        {{-- FORGOT PASSWORD --}}
                        @if (Route::has('password.request'))
                            <div class="text-center mt-3">
                                <a href="{{ route('password.request') }}">
                                    Lupa password?
                                </a>
                            </div>
                        @endif

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- AUTO OPEN MODAL IF LOGIN ERROR --}}
@if ($errors->any())
<script>
    window.onload = () => {
        new bootstrap.Modal(
            document.getElementById('loginModal')
        ).show();
    }
</script>
@endif
