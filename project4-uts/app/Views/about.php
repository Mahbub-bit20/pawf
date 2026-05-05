<?= $this->include('layouts/header'); ?>

<div class="container py-5">
    <!-- Header Halaman About -->
    <div class="p-5 mb-5 classic-panel rounded-3 text-center">
        <div class="container py-2">
            <h1 class="display-5 fw-bold gold-text">About Me</h1>
            <p class="fs-5 text-muted">Mahasiswa Teknik Informatika & Tech Enthusiast</p>
        </div>
    </div>

    <div class="row">
        <!-- Kartu 1: Profil Utama -->
        <div class="col-md-12 mb-4">
            <div class="card classic-card">
                <div class="card-body p-4">
                    <h5 class="h5 gold-text mb-3">Siapa Saya</h5>
                    <p class="text-light">
                        Halo, saya <strong>Haidar Arif Mahbub</strong>. 
                        Saya adalah mahasiswa Teknik Informatika di Universitas Nahdlatul Ulama Indonesia (UNUSIA) yang berasal dari Lampung[cite: 1]. 
                        Saya memiliki antusiasme tinggi dalam dunia <em>software development</em> dan arsitektur sistem[cite: 1]. 
                        Di waktu luang, saya sering mendalami logika pemrograman dan bagaimana teknologi masa kini dapat memecahkan berbagai masalah teknis[cite: 1].
                    </p>
                </div>
            </div>
        </div>

        <!-- Kartu 2: Minat & Keahlian -->
        <div class="col-md-12 mb-4">
            <div class="card classic-card">
                <div class="card-body p-4">
                    <h5 class="h5 gold-text mb-3">Minat & Keahlian</h5>
                    <p class="text-light">
                        Fokus utama saya saat ini adalah mengembangkan keahlian di bidang <strong>PHP (CodeIgniter) dan Python</strong>, terutama untuk analisis database[cite: 1]. 
                        Selain coding, saya sangat tertarik mengikuti perkembangan <em>hardware</em> smartphone, mulai dari skor benchmark Antutu hingga fitur kamera OIS[cite: 1]. 
                        Saya juga seorang pecinta astronomi yang senang mempelajari fenomena nebula dan galaksi Bimasakti[cite: 1].
                    </p>
                </div>
            </div>
        </div>

        <!-- Kartu 3: Visi & Misi -->
        <div class="col-md-12 mb-4">
            <div class="card classic-card">
                <div class="card-body p-4">
                    <h5 class="h5 gold-text mb-3">Filosofi Belajar</h5>
                    <p class="text-light">
                        Bagi saya, setiap baris kode memiliki kemiripan dengan kerumitan alam semesta; keduanya menuntut ketelitian dan rasa ingin tahu yang besar untuk dipahami[cite: 1]. 
                        Saya terus berusaha menggabungkan logika pemrograman dengan perkembangan teknologi terbaru untuk menciptakan solusi yang bermanfaat bagi sesama mahasiswa IT dan masyarakat luas[cite: 1].
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer'); ?>