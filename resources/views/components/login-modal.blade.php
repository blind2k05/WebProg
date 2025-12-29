<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-custom">
        <div class="modal-content login-card">

            <!-- left side -->
            <div class="login-left">
                <div class="login-left-content">
                    <h4 class="fw-bold mb-3">Ayo gabung dengan kami!!</h4>
                    <h5 class="fw-medium mb-2">Mari klaim promo sepuasnya</h5>
                    <ul class="small">
                        <li>Promo & hadiah eksklusif</li>
                        <li>Proses cepat & aman</li>
                        <li>Akses penuh fitur</li>
                    </ul>
                </div>
            </div>

            <!-- right side -->
            <div class="login-right">
                <div class="login-actions text-center mb-4">
                    <button type="submit" form="loginForm" class="btn btn-primary px-4">LOGIN</button>
                    @if (Route::has('register'))
                        <a class="btn btn-outline-primary px-4" href="{{ route('register') }}">REGISTER</a>
                    @endif
                </div>

                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label login-label" for="email">Email</label>
                        <input type="email" id="email" name="email"
                               value="{{ old('email') }}"
                               class="form-control login-input @error('email') is-invalid @enderror"
                               required autofocus>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label login-label" for="password">Password</label>
                        <input type="password" id="password" name="password"
                               class="form-control login-input @error('password') is-invalid @enderror"
                               required>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input login-checkbox" type="checkbox" name="remember" id="remember"
                               {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label login-label" for="remember">Remember Me</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-2">Login</button>

                    @if (Route::has('password.request'))
                        <div class="text-center mt-3">
                            <a href="{{ route('password.request') }}" class="login-forgot-link">Lupa password?</a>
                        </div>
                    @endif
                </form>
            </div>

        </div>
    </div>
</div>

@if ($errors->any())
<script>
    window.onload = () => {
        new bootstrap.Modal(document.getElementById('loginModal')).show();
    }
</script>
@endif
