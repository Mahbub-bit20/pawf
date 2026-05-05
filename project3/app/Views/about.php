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
        <h1 class="display-5 fw-bold">About</h1>
        
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Siapa Saya</h5>
					<p>Halo, saya Haidar Arif Mahbub.
                       Mahasiswa Informatika di Universitas Nahdlatul Ulama Indonesia yang antusias dengan dunia software development dan teknologi hardware. Di waktu luang, saya mendalami arsitektur sistem, memantau perkembangan performa chipset smartphone terbaru, hingga mempelajari fenomena astrofisika. Menggabungkan ketelitian logika pemrograman dengan rasa ingin tahu yang tinggi terhadap kemajuan teknologi</p>
			</div>

			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Bisa Apa saya</h5>
					<p>Keahlian utama saya terletak pada PHP dan Python, dengan minat khusus pada analisis database dan optimasi sistem. Di luar urusan coding, saya juga aktif mengikuti perkembangan hardware smartphone dan fenomena astronomi.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Bagaimana Saya</h5>
					<p>Saya memiliki rasa ingin tahu yang besar, baik itu memecahkan error pada kode maupun mempelajari kerumitan evolusi bintang di alam semesta.</p>
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