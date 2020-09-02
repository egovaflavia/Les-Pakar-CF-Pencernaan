<?php

require 'header.php';

?>

<table class="table table-hover" style="margin-bottom: 300px;">
  <thead class="thead-dark">
    <tr>
      <th style="text-align: center;" colspan="3">LAPORAN DIAGNOSA</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Laporan Perhari</td>
    </tr>
    <tr>
      <form action="cetPerhari.php" method="POST">
        <td>Pilih Tanggal :</td>
        <td><input type="date" value="<?php echo date('Y-m-d') ?>" name="tgl" class="form-control" autocomplete="off" required></td>
        <td><button name="btn_cetak" class="btn btn-success btn-block">Cetak</button></td>
      </form>
    </tr>
    <tr>
      <td>Laporan Bulan</td>
    </tr>
    <tr>
      <form action="cetPerbulan.php" method="POST">
        <td>Pilih Bulan :</td>
        <td><input type="month" name="tgl" class="form-control" value="<?php echo date('Y-m') ?>" required></td>
        <td><button name="btn_cetak" class="btn btn-success btn-block">Cetak</button></td>
      </form>
    </tr>
    <tr>
      <td>Laporan Pertahun</td>
    </tr>
    <tr>
      <form action="cetPertahun.php" method="POST">
        <td>Pilih Tahun :</td>
        <td><input type="number" name="tgl" class="form-control" value="<?php echo date('Y') ?>" required></td>
        <td><button name="btn_cetak" class="btn btn-success btn-block">Cetak</button></td>
      </form>
    </tr>
  </tbody>
</table>
</div>
</div>

<?php require "footer.php"; ?>