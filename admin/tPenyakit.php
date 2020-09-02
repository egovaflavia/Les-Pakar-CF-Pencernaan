<?php 
require 'header.php';


if (isset($_POST["btn_tPenyakit"])) {
  if (tPenyakit($_POST) > 0 ) {
    echo "
          <script>
          document.location.href = 'tPenyakit.php';
          </script>";
  }else{
    echo"<script>
        alert('Data Gagal Ditambahkan');
        document.location.href = 'tPenyakit.php';
      </script>";
  }
}


$tpnykt= query("SELECT * FROM penyakit ORDER BY id ASC");

 ?>

  <table class="table table-hover">
    <thead class="thead-dark">
    <tr>
      <th style="text-align: center;">No</th>
      <th style="text-align: center;">Kode Penyakit</th>
      <th style="text-align: center;">Nama Penyakit</th>
      <th style="text-align: center;">Keterangan Penyakit</th>
    </tr>
    </thead>
    <?php $no=1; 
    foreach ($tpnykt as $row) : ;

    ?>

    <tr>
      <td style="text-align: center;"><?= $no; ?></td>
      <td style="text-align: center;"><?= $row["kode_penyakit"]; ?></td>
      <td style="text-align: center;"><?= $row["nm_penyakit"]; ?></td>
      <td style="text-align: justify;"><?= $row["ket"]; ?></td>
    </tr>

    <?php $no++; ?>
  <?php endforeach ?>
  </table>
  </div>
  </div>

  <?php require "footer.php"; ?>