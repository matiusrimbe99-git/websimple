<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Form Tambah Mahasiswa</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
                            <div class="text-danger">
                                <?= form_error('nama') ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM">
                            <div class="text-danger">
                                <?= form_error('nim') ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukkan email">
                            <div class="text-danger">
                                <?= form_error('email') ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-control" aria-label="jurusan" name="jurusan">
                                <?php foreach ($jurusan as $jrs) : ?>
                                    <option value="<?= $jrs ?>"><?= $jrs ?></option>
                                <?php endforeach ?>
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