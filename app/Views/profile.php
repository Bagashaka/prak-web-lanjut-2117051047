<?= $this->extend('layouts/app') ?>

<?= $this->section('content')?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <img src="<?= $user['foto'] ?? base_url('assets/img/noProfile.png') ?>" class="img-fluid" width="200" height="200" alt="User Photo">
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <td><?= $user['nama'] ?></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td><?= $user['nama_kelas'] ?></td>
                        </tr>
                        <tr>
                            <th>NPM</th>
                            <td><?= $user['npm'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-3">
        <a href="<?=base_url('/user')?>" class="btn btn-primary">Back</a>
    </div>
</div>
<?= $this->endSection()?>
