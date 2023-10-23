<?= $this->extend('layouts/app') ?>

<?= $this->section('content')?>
<div class="container mt-5">
    <h1 class="mb-4">Edit User</h1>
    <?php $nama_kelas = session()->getFlashdata('nama_kelas'); ?>
    <form action="<?= base_url('/user/' . $user['id']) ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <input type="hidden" name="_method" value="PUT">
    <div class="mb-3">
        <label for="foto" class="form-label">Foto: </label>
        <div class="rounded border p-3">
            <img src="<?= $user['foto'] ?? base_url("assets/img/noProfile.png")?>" alt="" class="img-fluid" style="max-width: 200px; max-height: 200px;">
        </div>
        <input type="file" class="form-control" name="foto" id="foto" value="<?= $user['foto']?>">
            <div class="invalid-feedback">
                    <?= validation_show_error('foto') ?>
            </div>
    </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama :</label>
            <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" placeholder="Nama" name="nama" value="<?= $user['nama'] ?>">
        <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
            <div class="invalid-feedback">
            <?= session('validation')->getError('nama'); ?>
            </div>
        <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="npm" class="form-label">NPM :</label>
            <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('npm') ? 'is-invalid' : '' ?>" id="npm" placeholder="NPM" name="npm" value="<?= $user['npm'] ?>">
        <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
            <div class="invalid-feedback">
            <?= session('validation')->getError('npm'); ?>
            </div>
        <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas :</label>
            <select class="form-select" name="kelas" id="kelas">
                <?php
                    foreach ($kelas as $item){
                ?>
                        <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : ''?>>
                        <?= $item['nama_kelas'] ?>
                        </option>
                <?php
                    }
                ?>
            </select>
        </div>
          
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?=base_url('/user')?>" class="btn btn-primary ms-2">Back</a> 
    </form>
</div>
<?= $this->endSection()?>

