<?= $this->extend('layouts/app') ?>

  <?= $this->section('content')?>
  <center>
    <img src="<?php echo base_url('assets/img/Starboy.png');?>" alt="">
  </center>
  <br>
  <center> 
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td> <?=$nama?> </td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td> <?=$kelas?> </td>
      </tr>
      <tr>
        <td>NPM</td>
        <td>:</td>
        <td> <?=$npm?> </td>
      </tr>
    </table>
  </center>
  <?= $this->endSection()?>