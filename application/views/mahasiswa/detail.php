<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h3 class="card-header">Detail Mahasiswa</h3>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email'] ?></h6>
                    <h6 class="card-text"><?= $mahasiswa['nim'] ?> | <?= $mahasiswa['jurusan'] ?></h6>
                    <a href="<?= base_url('mahasiswa') ?>" class="btn btn-primary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>