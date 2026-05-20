<?= $this->include('layouts/header'); ?>

<div class="container py-5">
    <div class="classic-panel p-5 rounded-3">
        <h1 class="gold-text text-center mb-4">Hubungi Saya</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="text-light text-center mb-4">
                    Punya pertanyaan tentang proyek Informatika atau ingin berdiskusi tentang teknologi smartphone? Silakan tinggalkan pesan di bawah ini.
                </p>
                <form>
                    <div class="mb-3">
                        <label class="text-muted">Nama Lengkap</label>
                        <input type="text" class="form-control bg-dark text-warning border-secondary">
                    </div>
                    <div class="mb-3">
                        <label class="text-muted">Email</label>
                        <input type="email" class="form-control bg-dark text-warning border-secondary">
                    </div>
                    <div class="mb-3">
                        <label class="text-muted">Pesan</label>
                        <textarea class="form-control bg-dark text-warning border-secondary" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-warning w-100">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer'); ?>