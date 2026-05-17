<div class="modal fade" id="editModal<?= (int) $row['id'] ?>" tabindex="-1"
    aria-labelledby="editModalLabel<?= (int) $row['id'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel<?= (int) $row['id'] ?>">Edit Mahasiswa</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-grid gap-3">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id" value="<?= (int) $row['id'] ?>">

                    <div>
                        <label class="form-label" for="editNim<?= (int) $row['id'] ?>">NIM</label>
                        <input type="text" id="editNim<?= (int) $row['id'] ?>" name="nim" class="form-control"
                            value="<?= e($row['nim']) ?>" required>
                    </div>

                    <div>
                        <label class="form-label" for="editNama<?= (int) $row['id'] ?>">Nama</label>
                        <input type="text" id="editNama<?= (int) $row['id'] ?>" name="nama" class="form-control"
                            value="<?= e($row['nama']) ?>" required>
                    </div>

                    <div>
                        <label class="form-label" for="editJurusan<?= (int) $row['id'] ?>">Jurusan</label>
                        <input type="text" id="editJurusan<?= (int) $row['id'] ?>" name="jurusan"
                            class="form-control" value="<?= e($row['jurusan']) ?>" required>
                    </div>

                    <div>
                        <label class="form-label" for="editEmail<?= (int) $row['id'] ?>">Email</label>
                        <input type="email" id="editEmail<?= (int) $row['id'] ?>" name="email" class="form-control"
                            value="<?= e($row['email']) ?>" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-mdb-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
