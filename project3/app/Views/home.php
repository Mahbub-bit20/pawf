<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<?= $this->include('layouts/navbar'); ?>

	<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Selamat Datang</h1>
        <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
        <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Mulai ngoding PHP nih</h5>
					<p>Di sini saya membagikan perjalanan awal saya belajar PHP. Mulai dari memahami logika dasar server-side hingga berhasil membangun aplikasi web sederhana. Bagi saya, PHP adalah pintu pembuka untuk memahami bagaimana sebuah sistem di balik layar bekerja</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Jadi paham CSS dan JS</h5>
					<p>Tampilan yang bagus harus didukung oleh interaksi yang mulus. Di artikel ini, saya merangkum catatan saya tentang bagaimana menyusun layout dengan CSS dan memberikan 'nyawa' pada website menggunakan JavaScript agar lebih interaktif bagi pengguna</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Codeigniter asyik juga kok</h5>
					<p>Setelah menguasai PHP dasar, saya mulai mengeksplorasi Framework CodeIgniter. Saya sangat menyukai konsep MVC (Model-View-Controller) yang ditawarkan karena membuat struktur kode saya menjadi lebih rapi, terorganisir, dan mudah dianalisis</p>
				</div>
			</div>
			
		</div>
	</div>
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top">
			<div class="container">
				&copy; <?= Date('Y') ?>
			</div>
		</footer>
	</div>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>git 