<div class="modal fade" id="registerModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">

            <h5 class="fw-bold mb-3">Daftar Akun</h5>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <input type="text" name="name"
                           class="form-control"
                           placeholder="Nama" required>
                </div>

                <div class="mb-3">
                    <input type="email" name="email"
                           class="form-control"
                           placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <input type="password" name="password"
                           class="form-control"
                           placeholder="Password" required>
                </div>

                <div class="mb-3">
                    <input type="password"
                           name="password_confirmation"
                           class="form-control"
                           placeholder="Konfirmasi Password" required>
                </div>

                <button class="btn btn-warning w-100">
                    Daftar
                </button>
            </form>

        </div>
    </div>
</div>
