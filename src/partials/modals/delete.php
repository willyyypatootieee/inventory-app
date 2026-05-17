<div class="modal fade" id="deleteModal<?= (int) $row['id'] ?>" tabindex="-1"
    aria-labelledby="deleteModalLabel<?= (int) $row['id'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel<?= (int) $row['id'] ?>">Hapus Mahasiswa</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="<?= (int) $row['id'] ?>">
                    <p class="mb-0">
                        Yakin ingin menghapus data
                        <strong><?= e($row['nama']) ?></strong>
                        dengan NIM <strong><?= e($row['nim']) ?></strong>?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-mdb-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
