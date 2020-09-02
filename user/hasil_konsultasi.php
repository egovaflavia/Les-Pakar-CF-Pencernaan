<?php

session_start();
if (!isset($_SESSION["loginKlien"])) {
  header("Location: user/hasil_konsultasi.php");
}


require 'assets/module/koneksi.php';
require 'assets/module/functions.php';


// $last_id = mysqli_insert_id($conn);


$hasil_konsul = query("SELECT * FROM hasil_konsul ORDER BY id DESC")[0];
// var_dump($hasil_konsul);
// exit;
$penyakit = query("SELECT * FROM penyakit ORDER BY id DESC")[0];

$solusi1 = query("SELECT * FROM solusi WHERE kode_solusi = 'S01'")[0];
$solusi2 = query("SELECT * FROM solusi WHERE kode_solusi = 'S02'")[0];
$solusi3 = query("SELECT * FROM solusi WHERE kode_solusi = 'S03'")[0];
$solusi4 = query("SELECT * FROM solusi WHERE kode_solusi = 'S04'")[0];
$solusi5 = query("SELECT * FROM solusi WHERE kode_solusi = 'S05'")[0];
$solusi6 = query("SELECT * FROM solusi WHERE kode_solusi = 'S06'")[0];
$solusi7 = query("SELECT * FROM solusi WHERE kode_solusi = 'S07'")[0];

?>

<doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/login.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>

    <title>Hasil Konsultasi</title>
  </head>

  <body>
    <div class="container mt-5">
      <div class="alert alert-dark">
        <h1 class="konsul">Hasil Diagnosa</h1>
        <input type="text" value="<?= $hasil_konsul['id']; ?>" hidden>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" name="nama" value="<?= $hasil_konsul['nama']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <input type="text" readonly name="jk" class="form-control-plaintext" value="<?= $hasil_konsul['jk']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Umur</label>
          <div class="col-sm-10">
            <input type="text" readonly name="umur" class="form-control-plaintext" value="<?= $hasil_konsul['umur']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Konsultasi</label>
          <div class="col-sm-10">
            <input type="text" readonly name="tgl" class="form-control-plaintext" value="<?= $hasil_konsul['tgl']; ?>">
          </div>
        </div>
        <!-- <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Goal</label>
              <div class="col-sm-10">
                <input type="text" readonly name="tgl" class="form-control-plaintext" value="<?= $penyakit['nm_penyakit']; ?>">
              </div>
      </div> -->
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Tingkat Kepastian</label>
          <div class="col-sm-10">
            <input type="text" readonly name="tgl" class="form-control-plaintext" value="<?= $hasil_konsul['tingkat_kepastian']; ?> %">
          </div>
        </div>
        <?php
        if ($hasil_konsul['kode_solusi'] == '0') {
          echo "";
        } elseif ($hasil_konsul['kode_solusi'] == 'S01') {
          echo "Anda Terdiagnosa Penyakit ";
          echo "<b>Dispepsia Fungsional</b> <br><br>";
        } elseif ($hasil_konsul['kode_solusi'] == 'S02') {
          echo "Anda Terdiagnosa Penyakit ";
          echo "<b>Dispepsia Like Ulcer</b> <br><br>";
        } elseif ($hasil_konsul['kode_solusi'] == 'S03') {
          echo "Anda Terdiagnosa Penyakit ";
          echo "<b>Dispepsia Tipe Dismotility</b> <br><br>";
        } elseif ($hasil_konsul['kode_solusi'] == 'S04') {
          echo "Anda Terdiagnosa Penyakit ";
          echo "<b>Tukak Lambung</b> <br><br>";
        } elseif ($hasil_konsul['kode_solusi'] == 'S05') {
          echo "Anda Terdiagnosa Penyakit ";
          echo "<b>Diare tanpa dehidrasi</b> <br><br>";
        } elseif ($hasil_konsul['kode_solusi'] == 'S06') {
          echo "Anda Terdiagnosa Penyakit ";
          echo "<b>Diare dengan dehidrasi sedang</b> <br><br>";
        } elseif ($hasil_konsul['kode_solusi'] == 'S07') {
          echo "Anda Terdiagnosa Penyakit ";
          echo "<b>Diare dengan dehidrasi berat</b> <br><br>";
        }
        ?>
        <a class="btn btn-danger" style="width: 100px;" href="logout.php">Logout</a>
        <a class="btn btn-primary" style="width: 100px;" target="_blank" href="cetak.php?id=<?php echo $hasil_konsul['id'] ?>">Cetak</a>
        <h1>Solusinya :</h1><br>
        <?php
        if ($hasil_konsul['kode_solusi'] == 'S01') {
          echo $solusi1['ket_solusi'];
        } elseif ($hasil_konsul['kode_solusi'] == 'S02') {
          echo $solusi2['ket_solusi'];
        } elseif ($hasil_konsul['kode_solusi'] == 'S03') {
          echo $solusi3['ket_solusi'];
        } elseif ($hasil_konsul['kode_solusi'] == 'S04') {
          echo $solusi4['ket_solusi'];
        } elseif ($hasil_konsul['kode_solusi'] == 'S05') {
          echo $solusi5['ket_solusi'];
        } elseif ($hasil_konsul['kode_solusi'] == 'S06') {
          echo $solusi6['ket_solusi'];
        } elseif ($hasil_konsul['kode_solusi'] == 'S07') {
          echo $solusi7['ket_solusi'];
        } elseif ($hasil_konsul['tingkat_kepastian'] == '0') {
          echo "<h1>Tidak terdiagnosa</h1>";
        }
        ?>
        <div>
          <br>
          <i>NB :</i><br>
          <i>- Hasil diagnosa ini hanya bersifat dugaan sementara, Anda diharapkan melakukan pengobatan ke Rumah Sakit Hermina Padang untuk pengobatan lebih lanjut </i>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  </html>