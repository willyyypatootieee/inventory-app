<section class="col-lg-4">
    <div class="card shadow-2">
        <div class="card-body">
            <h5 class="card-title mb-3">Insert Mahasiswa</h5>

            <form method="post" class="d-grid gap-3">
                <input type="hidden" name="action" value="create">

                <div>
                    <label class="form-label" for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" class="form-control" required>
                </div>

                <div>
                    <label class="form-label" for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" required>
                </div>

                <div>
                    <label class="form-label" for="jurusan">Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan" class="form-control" required>
                </div>

                <div>
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <button class="btn btn-primary" type="submit">Tambah Data</button>
            </form>
        </div>
    </div>
</section>
