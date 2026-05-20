<?= $this->include('layouts/header'); ?>

<div class="background-overlay">
    <div class="container py-5">
        <!-- Header Panel -->
        <div class="p-5 mb-5 classic-panel rounded-3">
            <div class="container py-2">
                <h1 class="display-5 fw-bold gold-text">Blog > Create New Post</h1>
                <p class="fs-5 text-muted">Tulis ide dan pengetahuan barumu di sini, Haidar.</p>
            </div>
        </div>

        <!-- Form Tambah Postingan -->
        <div class="card classic-card border-secondary shadow-lg">
            <div class="card-body p-5">
                <form action="" method="post" id="text-editor">
                    
                    <div class="form-group mb-4">
                        <label for="title" class="gold-text mb-2 fw-bold">Post Title</label>
                        <input type="text" name="title" class="form-control bg-dark text-light border-secondary"
                            placeholder="Masukkan judul artikel yang menarik..." required 
                            style="padding: 12px; font-size: 1.1rem;">
                    </div>

                    <div class="form-group mb-4">
                        <label for="content" class="gold-text mb-2 fw-bold">Content</label>
                        <textarea name="content" class="form-control bg-dark text-light border-secondary" 
                            cols="30" rows="12" placeholder="Tuliskan isi pikiranmu di sini..."
                            style="line-height: 1.6;"></textarea>
                    </div>

                    <div class="form-group mt-5 d-flex gap-2">
                        <button type="submit" name="status" value="published"
                                class="btn btn-warning px-5 fw-bold">
                            <i class="bi bi-send"></i> Publish
                        </button>
                        
                        <button type="submit" name="status" value="draft"
                                class="btn btn-outline-secondary px-4 text-light">
                            <i class="bi bi-file-earmark-text"></i> Save to Draft
                        </button>
                        
                        <a href="<?= base_url('admin/post') ?>" class="btn btn-link text-muted ms-auto text-decoration-none">
                            Discard Changes
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Tambahan agar input terasa lebih 'premium' */
    .form-control:focus {
        background-color: #1a1a1a !important;
        border-color: #d4af37 !important;
        color: #fff !important;
        box-shadow: 0 0 10px rgba(212, 175, 55, 0.2);
    }
    
    .form-control::placeholder {
        color: #555 !important;
    }
</style>

<?= $this->include('layouts/footer'); ?>