
    <?= $this->extend('layouts/app') ?>

    <?= $this->section('content')?>
    <div class="container mt-5">
        <h1 class="mb-4">Create User</h1>
        <?php $nama_kelas = session()->getFlashdata('nama_kelas'); ?>
        <form action="<?= base_url('/user/store') ?>" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control <?= (empty(validation_show_error('nama'))) ? '':'is-invalid' ?>"
                name="nama" id="nama"  value="<?= old('nama') ?>" >
                    <div class="invalid-feedback">
                        <?= validation_show_error('nama') ?>
                    </div>
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM :</label>
                <input type="text" class="form-control <?= (empty(validation_show_error('npm'))) ? '':'is-invalid' ?>"  
                     value="<?= old('npm') ?>" name="npm" id="npm">
                     <div class="invalid-feedback">
                        <?= validation_show_error('npm') ?>
                    </div>
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
