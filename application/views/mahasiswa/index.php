<div class="container">
    <?php if ($this->session->flashdata('message')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('message') ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('mahasiswa/tambah') ?>" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
    </div>
    <div class="row mt-3">
        <h3>Daftar Mahasiswa</h3>
        <div class="mt-3 col-md-6">
            <table class="table table-hover">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td>
                            <?= $mhs['nama'] ?>
                        </td>
                        <td>
                            <a href="<?= base_url('mahasiswa/detail/') ?><?= $mhs['id'] ?>" class="badge bg-primary nav-link">Detail</a>
                            <a href="<?= base_url('mahasiswa/edit/') ?><?= $mhs['id'] ?>" class="badge bg-success nav-link">Ubah</a>
                            <a href="<?= base_url('mahasiswa/hapus/') ?><?= $mhs['id'] ?>" class="badge bg-danger nav-link" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>