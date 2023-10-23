<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<div class="container">
    <h1 class="mb-4">Daftar Anggota Kelas</h1>
    <?php if (empty($kelas)) { ?>
        <p>Tidak ada anggota dalam kelas ini.</p>
    <?php } else { ?>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($kelas as $anggota){
                ?>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $anggota['nama'] ?></td>
                    <td><?= $anggota['nama_kelas'] ?></td>
                </tr>
                <?php 
                }
                ?>    
            </tbody>
        </table>
    <?php } ?>
    <div class="text-center mt-3">
        <a href="<?= base_url('/kelas') ?>" class="btn btn-primary">Back</a>
    </div>
</div>

<?= $this->endSection() ?>
