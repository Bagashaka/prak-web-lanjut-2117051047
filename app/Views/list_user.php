<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<div class="container">
    <h1 class="mb-4">Data Mahasiswa</h1>
    <a href="user/create" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($users as $user){
            ?>
            <tr>
                <td><?= $nomor++ ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-info btn-sm mx-1">Detail</a>
                        <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>" class="btn btn-warning btn-sm mx-1">Edit</a>
                        <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php 
            }
            ?>    
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
