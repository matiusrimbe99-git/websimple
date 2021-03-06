<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Form Tambah Mahasiswa</h3>
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger pb-0"><?= validation_errors() ?></div>
                    <?php endif; ?>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukkan email">
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" aria-label="jurusan" name="jurusan">
                                <option value="Teknik Informatika & Komputer">Teknik Informatika & Komputer</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                            </select>
                        </div>
                        <div class="pt-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" type="submit">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>