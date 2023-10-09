<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>

<div class="container">
    <h1>Data Mahasiswa</h1>
    <a href="user/create">Tambah Data</a>
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
        <tbody class="table-group-divider">
            <?php
            $nomor = 1;
            foreach ($users as $user){
            ?>
            <tr>
                <td></td>
                <td><?= $nomor++ ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                    <a href="<?= base_url('user/' . $user['id']) ?>"> Detail</a>
                    <button type="button">Delete</button>
                </td>
            </tr>
            <?php 
            }
            ?>    
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
