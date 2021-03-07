<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
    <div class="row">
        <div class="col-md-6 mt-3">
            <a href="<?= base_url('mahasiswa/tambah') ?>" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari Data Mahasiswa">
                    <button class="btn btn-primary" type="submit">Cari Data</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">Data tidak ditemukan.</div>
            <?php endif ?>
            <table class="table table-hover">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td>
                            <?= $mhs['nama'] ?>
                        </td>
                        <td>
                            <a href="<?= base_url('mahasiswa/detail/') ?><?= $mhs['id'] ?>" class="badge badge-primary">Detail</a>
                            <a href="<?= base_url('mahasiswa/edit/') ?><?= $mhs['id'] ?>" class="badge badge-success">Edit</a>
                            <a href="<?= base_url('mahasiswa/hapus/') ?><?= $mhs['id'] ?>" class="badge badge-danger swal-delete">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>