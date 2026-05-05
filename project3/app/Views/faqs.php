
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
        <h1 class="display-5 fw-bold">FAQ</h1>
       
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Teknologi apa saja yang digunakan dalam membangun website? (Q)</h5>
					<p>Saya fokus menggunakan PHP (dengan framework Laravel atau CodeIgniter) dan Python untuk sisi backend. Untuk frontend, saya memastikan tampilan responsif menggunakan CSS dan interaksi dinamis dengan JavaScript.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Apakah website yang dibuat sudah termasuk optimasi database? (Q)</h5>
					<p>Tentu. Sebagai seseorang yang gemar melakukan analisis database, saya memastikan setiap struktur tabel dan relasi data dirancang secara efisien untuk menjamin performa website tetap cepat meskipun data bertambah banyak.</p>
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

</html>