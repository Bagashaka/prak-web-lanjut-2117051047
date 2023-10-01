<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>

<div class="container">
    <h1>Data Mahasiswa</h1>
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
                <td><?= $nomor++ ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                    <!-- Tambahkan tombol aksi di sini jika diperlukan -->
                </td>
            </tr>
            <?php 
            }
            ?>    
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
