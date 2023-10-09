<?= $this->extend('layouts/app') ?>

  <?= $this->section('content')?>
  <center>
    <img src="<?= $user['foto']  ?? '<default-foto>'?>" width="30%" height="30%" alt="">
  </center>
  <br>
  <center> 
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td> <?=$user['nama']?> </td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td> <?=$user['nama_kelas']?> </td>
      </tr>
      <tr>
        <td>NPM</td>
        <td>:</td>
        <td> <?=$user['npm']?> </td>
      </tr>
    </table>
  </center>
  <?= $this->endSection()?>