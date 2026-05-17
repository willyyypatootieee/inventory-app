<section class="col-lg-8">
    <div class="card shadow-2">
        <div class="card-body">
            <div class="d-flex flex-column flex-md-row gap-3 justify-content-between mb-3">
                <div>
                    <h5 class="card-title mb-1">Select Data Mahasiswa</h5>
                    <p class="text-muted mb-0">Total data: <?= count($mahasiswa) ?></p>
                </div>

                <form method="get" class="d-flex gap-2">
                    <input type="search" name="q" class="form-control" placeholder="Cari data" value="<?= e($search) ?>">
                    <button class="btn btn-secondary" type="submit">Cari</button>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table align-middle table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Email</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!$mahasiswa): ?>
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">Belum ada data.</td>
                            </tr>
                        <?php endif; ?>

                        <?php foreach ($mahasiswa as $row): ?>
                            <tr>
                                <td><?= e($row['nim']) ?></td>
                                <td><?= e($row['nama']) ?></td>
                                <td><?= e($row['jurusan']) ?></td>
                                <td><?= e($row['email']) ?></td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-warning"
                                        data-mdb-ripple-init data-mdb-modal-init
                                        data-mdb-target="#editModal<?= (int) $row['id'] ?>">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger"
                                        data-mdb-ripple-init data-mdb-modal-init
                                        data-mdb-target="#deleteModal<?= (int) $row['id'] ?>">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
