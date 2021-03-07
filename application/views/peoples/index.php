<div class="container">
    <h3 class="mt-3 pb-3">List of Peoples</h3>
    <div class="row">
        <div class="col-md-6">
            <form action="<?= base_url('peoples') ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Keyword" name="keyword" autofocus>
                    <input class="btn btn-primary" type="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mt-2"></div>
        <h5>Results: <?= $total_rows ?> </h5>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($peoples)) : ?>
                    <tr>
                    <td colspan="4">
                    <div class="alert alert-danger">Data not found.</div>
                    </td>
                    </tr>
                <?php endif ?>
                <?php foreach ($peoples as $people) : ?>
                    <tr>
                        <th><?= $start += 1 ?></th>
                        <td><?= $people['name'] ?></td>
                        <td><?= $people['email'] ?></td>
                        <td>
                            <a href="" class="badge bg-primary nav-link">Detail</a>
                            <a href="" class="badge bg-success nav-link">Edit</a>
                            <a href="" class="badge bg-danger nav-link" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>

                            <!-- <a href="<?= base_url('people/detail/') ?><?= $mhs['id'] ?>" class="badge bg-primary nav-link">Detail</a>
                        <a href="<?= base_url('people/edit/') ?><?= $mhs['id'] ?>" class="badge bg-success nav-link">Edit</a>
                        <a href="<?= base_url('people/hapus/') ?><?= $mhs['id'] ?>" class="badge bg-danger nav-link" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a> -->
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <?= $this->pagination->create_links() ?>
    </div>
</div>