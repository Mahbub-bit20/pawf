<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark border-bottom border-secondary shadow-sm">
  <div class="container">
    <!-- Brand menggunakan warna emas agar senada dengan home.php -->
    <a class="navbar-brand gold-text fw-bold" href="<?= base_url() ?>" style="color: #d4af37;">MyBlog</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url() ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('about') ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
        </li>
      </ul>
      
      <!-- Bagian Login & Admin yang sudah digabungkan -->
      <div class="d-flex align-items-center gap-2">
        <?php if (function_exists('logged_in') && logged_in()) : ?>
            <!-- Tombol Admin Muncul Hanya Jika Sudah Login -->
            <a class="btn btn-warning btn-sm px-4 fw-bold" href="<?= base_url('admin/post') ?>" style="background-color: #d4af37; border: none; color: #000;">
                PANEL ADMIN
            </a>
            
            <a class="btn btn-outline-danger btn-sm px-4" href="<?= base_url('logout') ?>">Logout</a>
        <?php else: ?>
            <!-- Tombol Login Muncul Jika Belum Login -->
            <a class="btn btn-outline-warning btn-sm px-4" href="<?= base_url('login') ?>" style="border-color: #d4af37; color: #d4af37;">
                Login
            </a>
        <?php endif; ?>
      </div>

    </div>
  </div>
</nav>