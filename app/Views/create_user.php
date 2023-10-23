
    <?= $this->extend('layouts/app') ?>

    <?= $this->section('content')?>
    <div class="container mt-5">
        <h1 class="mb-4">Create User</h1>
        <?php $nama_kelas = session()->getFlashdata('nama_kelas'); ?>
        <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="foto" class="form-label">Foto: </label>
                <input type="file" class="form-control" name="foto" id="foto">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" placeholder="Nama" name="nama" value="<?= old('nama') ?>">
                <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                    <div class="invalid-feedback">
                    <?= session('validation')->getError('nama'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM :</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('npm') ? 'is-invalid' : '' ?>" id="npm" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
                <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                    <div class="invalid-feedback">
                    <?= session('validation')->getError('npm'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <select class="form-select" name="kelas" id="kelas">
                    <?php
                        foreach ($kelas as $item){
                    ?>
                            <option value="<?= $item['id'] ?>">
                                           <?= $item['nama_kelas']?>
                            </option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?= $this->endSection()?>
