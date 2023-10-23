<?= $this->extend('layouts/app') ?>

<?= $this->section('content')?>
<div class="container mt-5">
    <h1 class="mb-4">Create Kelas</h1>
    <?php $nama_kelas = session()->getFlashdata('nama_kelas'); ?>
    <form action="<?= base_url('/kelas/store') ?>" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="nama_kelas">Nama Kelas</label>
      <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" 
                         id="nama_kelas" placeholder="Nama Kelas" name="nama_kelas" value="<?= old('nama_kelas') ?>">
      <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('nama_kelas'); ?>
        </div>
      <?php endif; ?>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->endSection()?>
