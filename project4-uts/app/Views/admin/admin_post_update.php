<?= $this->include('layouts/header'); ?>

<div class="background-overlay">
    <div class="container py-5">
        <!-- Header Panel -->
        <div class="p-5 mb-5 classic-panel rounded-3 shadow-lg">
            <div class="container py-2">
                <h1 class="display-5 fw-bold gold-text">Blog > Edit Post</h1>
                <p class="fs-5 text-muted">Sedang memperbarui artikel: <span class="text-light italic">"<?= $post['title'] ?>"</span></p>
            </div>
        </div>

        <!-- Form Update Postingan -->
        <div class="card classic-card border-secondary shadow-lg">
            <div class="card-body p-5">
                <form action="" method="post" id="text-editor">
                    <!-- ID Postingan (Hidden) -->
                    <input type="hidden" name="id" value="<?= $post['id'] ?>" />
                    
                    <div class="form-group mb-4">
                        <label for="title" class="gold-text mb-2 fw-bold">Post Title</label>
                        <input type="text" name="title" class="form-control bg-dark text-light border-secondary"
                            placeholder="Post title" value="<?= $post['title'] ?>" required 
                            style="padding: 12px; font-size: 1.1rem;">
                    </div>

                    <div class="form-group mb-4">
                        <label for="content" class="gold-text mb-2 fw-bold">Content</label>
                        <textarea name="content" class="form-control bg-dark text-light border-secondary" 
                            cols="30" rows="12" placeholder="Write a great post!"
                            style="line-height: 1.6;"><?= $post['content'] ?></textarea>
                    </div>

                    <div class="form-group mt-5 d-flex gap-2">
                        <button type="submit" name="status" value="published"
                                class="btn btn-warning px-5 fw-bold shadow">
                            <i class="bi bi-cloud-upload"></i> Update & Publish
                        </button>
                        
                        <button type="submit" name="status" value="draft"
                                class="btn btn-outline-secondary px-4 text-light">
                            <i class="bi bi-file-earmark-lock"></i> Save as Draft
                        </button>

                        <a href="<?= base_url('admin/post') ?>" class="btn btn-link text-muted ms-auto text-decoration-none">
                            Cancel & Back
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Menjaga konsistensi input premium */
    .form-control:focus {
        background-color: #1a1a1a !important;
        border-color: #d4af37 !important;
        color: #fff !important;
        box-shadow: 0 0 15px rgba(212, 175, 55, 0.2);
    }
    
    .form-control::placeholder {
        color: #444 !important;
    }

    .italic {
        font-style: italic;
    }
</style>

<?= $this->include('layouts/footer'); ?>