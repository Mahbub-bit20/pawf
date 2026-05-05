<?= $this->include('layouts/header'); ?>

<div class="container py-5">
    <div class="p-4 mb-5 classic-panel rounded-3 text-center">
        <h1 class="display-6 fw-bold gold-text">Daftar Artikel</h1>
        <p class="text-muted">Catatan perjalanan belajar dan proyek Teknik Informatika</p>
    </div>

    <div class="row">
        <!-- Contoh Post 1 -->
        <div class="col-md-6 mb-4">
            <div class="card classic-card h-100">
                <div class="card-body">
                    <h5 class="gold-text">Analisis Database dengan Python</h5>
                    <p class="text-light small">Diposting pada: 05 Mei 2026</p>
                    <p class="text-light">Bagaimana saya menggunakan Python untuk mengolah data dan mengoptimalkan struktur database[cite: 1].</p>
                    <a href="<?= base_url('post/detail/1') ?>" class="btn btn-outline-warning btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Contoh Post 2 -->
        <div class="col-md-6 mb-4">
            <div class="card classic-card h-100">
                <div class="card-body">
                    <h5 class="gold-text">Implementasi Microservices</h5>
                    <p class="text-light small">Diposting pada: 02 Mei 2026</p>
                    <p class="text-light">Membangun arsitektur microservices untuk studi kasus marketplace[cite: 1].</p>
                    <a href="<?= base_url('post/detail/2') ?>" class="btn btn-outline-warning btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer'); ?>