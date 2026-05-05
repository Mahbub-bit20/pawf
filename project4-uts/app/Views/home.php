<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog - Haidar Arif Mahbub</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <!-- Google Fonts untuk kesan klasik -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= base_url('css/custom_style.css') ?>" />
</head>

<body class="classic-wood-bg">

    <?= $this->include('layouts/navbar'); ?>

    <div class="background-overlay">
        <div class="container py-5">
            <!-- Jumbotron Gaya Klasik -->
            <div class="p-5 mb-5 classic-panel rounded-3 text-center">
                <div class="container py-2">
                    <h1 class="display-5 fw-bold gold-text">Selamat Datang</h1>
                    <p class="fs-5 text-muted">Portfolio & Perjalanan Belajar Teknik Informatika</p>
                </div>
            </div>

            <div class="row">
                <!-- Card Artikel 1 -->
                <div class="col-md-12 mb-4">
                    <div class="card classic-card">
                        <div class="card-body">
                            <h5 class="h5 gold-text">Mulai ngoding PHP nih</h5>
                            <p class="text-light">Di sini saya membagikan perjalanan awal saya belajar PHP. Mulai dari memahami logika dasar server-side hingga berhasil membangun aplikasi web sederhana. Bagi saya, PHP adalah pintu pembuka untuk memahami bagaimana sebuah sistem di balik layar bekerja.</p>
                        </div>
                    </div>
                </div>

                <!-- Card Artikel 2 -->
                <div class="col-md-12 mb-4">
                    <div class="card classic-card">
                        <div class="card-body">
                            <h5 class="h5 gold-text">Jadi paham CSS dan JS</h5>
                            <p class="text-light">Tampilan yang bagus harus didukung oleh interaksi yang mulus. Di artikel ini, saya merangkum catatan saya tentang bagaimana menyusun layout dengan CSS dan memberikan 'nyawa' pada website menggunakan JavaScript agar lebih interaktif bagi pengguna.</p>
                        </div>
                    </div>
                </div>

                <!-- Card Artikel 3 -->
                <div class="col-md-12 mb-4">
                    <div class="card classic-card">
                        <div class="card-body">
                            <h5 class="h5 gold-text">Codeigniter asyik juga kok</h5>
                            <p class="text-light">Setelah menguasai PHP dasar, saya mulai mengeksplorasi Framework CodeIgniter. Saya sangat menyukai konsep MVC (Model-View-Controller) yang ditawarkan karena membuat struktur kode saya menjadi lebih rapi, terorganisir, dan mudah dianalisis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="pt-3 mt-4 footer-classic border-top">
                <div class="container text-center text-muted">
                    &copy; <?= date('Y') ?> Haidar Arif Mahbub - Teknik Informatika UNUSIA
                </div>
            </footer>
        </div>
    </div>

    <!-- Jquery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>
</html>