<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="background-overlay" style="min-height: 100vh; background-color: #1a1a1a;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <!-- Card Mewah -->
                <div class="card shadow-lg border-secondary" style="background: rgba(0,0,0,0.9); border-radius: 15px; border: 1px solid #d4af37;">
                    <div class="card-body p-5">
                        <h2 style="color: #d4af37;" class="text-center fw-bold mb-4">Haidar Arif Mahbub</h2>
                        <p class="text-muted text-center mb-4">Manajemen Portofolio Teknik Informatika</p>

                        <!-- Pesan Error/Sukses -->
                        <?= view('App\Views\Auth\_message_block') ?>

                        <form action="<?= url_to('login') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="mb-3">
                                <label style="color: #d4af37;" class="fw-bold">Email atau Username</label>
                                <input type="text" class="form-control bg-dark text-white border-secondary <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                    name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                            </div>

                            <div class="mb-3">
                                <label style="color: #d4af37;" class="fw-bold">Password</label>
                                <input type="password" name="password" class="form-control bg-dark text-white border-secondary <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                    placeholder="<?=lang('Auth.password')?>">
                            </div>

                            <button type="submit" class="btn btn-warning w-100 fw-bold mt-3 shadow" style="background-color: #d4af37; border: none; color: #000;">
                                MASUK KE DASHBOARD
                            </button>
                        </form>

                        <hr class="border-secondary mt-4">

                        <!-- Bagian Registrasi & Lupa Password -->
                        <div class="text-center mt-3">
                            <?php if ($config->allowRegistration) : ?>
                                <p class="text-muted mb-1">
                                    Belum punya akun? 
                                    <a href="<?= url_to('register') ?>" style="color: #d4af37; text-decoration: none;" class="fw-bold">
                                        Daftar Sekarang
                                    </a>
                                </p>
                            <?php endif; ?>

                            <?php if ($config->activeResetter): ?>
                                <p>
                                    <a href="<?= url_to('forgot') ?>" class="text-muted small" style="text-decoration: none;">Lupa Password?</a>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body { background-color: #121212; }
    .form-control:focus { 
        background-color: #222 !important; 
        color: white !important; 
        border-color: #d4af37 !important; 
        box-shadow: 0 0 5px rgba(212, 175, 55, 0.5); 
    }
    .form-control::placeholder {
        color: #666 !important;
    }
</style>

<?= $this->endSection() ?>