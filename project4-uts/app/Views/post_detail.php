<?= $this->include('layouts/header'); ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="classic-panel p-5 rounded-3">
                <h1 class="gold-text mb-3">Detail Artikel</h1>
                <p class="text-muted border-bottom border-secondary pb-3">Ditulis oleh: Haidar Arif Mahbub</p>
                
                <div class="text-light mt-4" style="line-height: 1.8;">
                    <p>Selamat datang di halaman detail artikel. Di sini kamu bisa membagikan ilmu seputar Teknik Informatika, analisis database, atau perkembangan hardware smartphone[cite: 1].</p>
                    <p>Sebagai mahasiswa UNUSIA, bagian ini sangat bagus untuk menunjukkan portofolio proyek yang sedang kamu kerjakan[cite: 1].</p>
                </div>

                <div class="mt-5">
                    <a href="<?= base_url('post') ?>" class="text-warning text-decoration-none">&larr; Kembali ke Daftar Blog</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer'); ?>