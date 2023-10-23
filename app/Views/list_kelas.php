<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<div class="container">
    <h1 class="mb-4">Data Kelas</h1>
    <a href="kelas/create" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($kelas as $kelas):
                ?>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $kelas['nama_kelas'] ?></td>
                    <td class="text-end">
                        <div class="btn-group" role="group">
                            <a href="<?= base_url('kelas/' . $kelas['id']) ?>" class="btn btn-info btn-sm me-1">Detail</a>
                            <a href="<?= base_url('/kelas/' . $kelas['id'] . '/edit') ?>" class="btn btn-warning btn-sm me-1">Edit</a>
                            <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection() ?>
