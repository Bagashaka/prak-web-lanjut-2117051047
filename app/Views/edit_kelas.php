<?= $this->extend('layouts/app') ?>

<?= $this->section('content')?>
<div class="container mt-5">
    <h1 class="mb-4">Edit Kelas</h1>
    <?php $nama_kelas = session()->getFlashdata('nama_kelas'); ?>
    <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <input type="hidden" name="_method" value="PUT">
        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="nama_kelas" placeholder="Nama Kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">
        <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
            <div class="invalid-feedback">
            <?= session('validation')->getError('nama_kelas'); ?>
            </div>
        <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?=base_url('/kelas')?>" class="btn btn-primary ms-2">Back</a> 
    </form>
</div>
<?= $this->endSection()?>


