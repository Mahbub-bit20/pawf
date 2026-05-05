<?= $this->include('layouts/header'); ?>

<div class="background-overlay">
    <div class="container py-5">
        <!-- Jumbotron / Header Panel Admin -->
        <div class="p-5 mb-5 classic-panel rounded-3">
            <div class="container py-2 d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="display-5 fw-bold gold-text">Blog > Admin</h1>
                    <p class="fs-5 text-muted">Manajemen konten portofolio Teknik Informatika</p>
                </div>
                <div>
                    <a href="<?= base_url('admin/post/new') ?>" class="btn btn-outline-warning fw-bold px-4 shadow-sm">
                        + New Post
                    </a>
                </div>
            </div>
        </div>

        <!-- Tabel Manajemen Postingan -->
        <div class="card classic-card border-secondary shadow-lg">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0 align-middle">
                        <thead class="text-warning border-secondary">
                            <tr>
                                <th class="p-4">#</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-light">
                            <?php foreach($posts as $post): ?>
                            <tr class="border-secondary">
                                <td class="p-4 text-muted"><?= $post['id'] ?></td>
                                <td>
                                    <strong class="gold-text d-block"><?= $post['title'] ?></strong>
                                    <small class="text-muted" style="font-size: 0.75rem;">
                                        Created at: <?= $post['created_at'] ?>
                                    </small>
                                </td>
                                <td>
                                    <?php if($post['status'] === 'published'): ?>
                                        <span class="badge bg-success opacity-75"><?= $post['status'] ?></span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary opacity-75"><?= $post['status'] ?></span>
                                    <?php endif ?>
                                </td>
                                <td class="text-center p-4">
                                    <div class="btn-group" role="group">
                                        <a href="<?= base_url('admin/post/'.$post['id'].'/preview') ?>"
                                           class="btn btn-sm btn-outline-info" target="_blank">Preview</a>
                                        <a href="<?= base_url('admin/post/'.$post['id'].'/edit') ?>"
                                           class="btn btn-sm btn-outline-light mx-1">Edit</a>
                                        <button type="button"
                                           data-href="<?= base_url('admin/post/'.$post['id'].'/delete') ?>"
                                           onclick="confirmToDelete(this)"
                                           class="btn btn-sm btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus Gaya Klasik -->
<div id="confirm-dialog" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content classic-card border-danger">
            <div class="modal-body p-4 text-center">
                <h2 class="gold-text h3 mb-3">Are you sure?</h2>
                <p class="text-light">The data will be deleted and lost forever, Haidar.</p>
            </div>
            <div class="modal-footer border-secondary justify-content-center">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="delete-button" class="btn btn-danger px-4 shadow">Delete</a>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmToDelete(el) {
        document.getElementById("delete-button").setAttribute("href", el.dataset.href);
        var myModal = new bootstrap.Modal(document.getElementById('confirm-dialog'), {
            keyboard: false
        });
        myModal.show();
    }
</script>

<?= $this->include('layouts/footer'); ?>