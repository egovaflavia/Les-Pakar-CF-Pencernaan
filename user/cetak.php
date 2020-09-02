<?php

session_start();

// if (!isset($_SESSION["loginKlien"])) {
//   header("Location: user/hasil_konsultasi.php");
// }
$id = $_GET['id'];
require 'assets/module/koneksi.php';
require 'assets/module/functions.php';

$hasil_konsul = query("SELECT * FROM hasil_konsul WHERE id = '$id' ")[0];

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
		<!-- <link rel="stylesheet" type="text/css" href="../assets/login.css"> -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<!-- <script type="text/javascript" src="../assets/js/jquery.min.js"></script> -->
		<!-- <script type="text/javascript" src="../assets/js/bootstrap.js"></script> -->

		<title>Cetak Laporan</title>
	</head>

	<body>
		<div class="container">
			<br>
			<br>
			<br>
			<div align='center'>
				<p>Rumah Sakit Hermina Padang <br>
					dr. Monica Sari, SpPD </p>
				<hr>
			</div>
			<div align='center'>
				&nbsp;
			</div>
			<table border='1' cellspacing='0' width='100%' style='font-size:12px;'>
				<thead>
					<tr>
						<th style='padding:5px;'>Kode Diagnosa</th>
						<th style='padding:5px;'>Nama</th>
						<th style='padding:5px;'>Jenis Kelamin</th>
						<th style='padding:5px;'>Umur</th>
						<th style='padding:5px;'>Tingkat Kepastian</th>
						<th style='padding:5px;'>Penyakit</th>
					</tr>
				</thead>
				<tbody>
					<td style='padding:5px;'><?php echo $hasil_konsul['kode_diagnosa'] ?></td>
					<td style='padding:5px;'><?php echo $hasil_konsul['nama'] ?></td>
					<td style='padding:5px;'><?php echo $hasil_konsul['jk'] ?></td>
					<td style='padding:5px;'><?php echo $hasil_konsul['umur'] ?> Tahun</td>
					<td style='padding:5px;'><?php echo $hasil_konsul['tingkat_kepastian'] ?>%</td>
					<td style='padding:5px;'>
						<?php
						if ($hasil_konsul['kode_solusi'] == '0') {
							echo "";
						} elseif ($hasil_konsul['kode_solusi'] == 'S01') {
							echo "Dispepsia Fungsional";
						} elseif ($hasil_konsul['kode_solusi'] == 'S02') {
							echo "Dispepsia Like Ulcer";
						} elseif ($hasil_konsul['kode_solusi'] == 'S03') {
							echo "Dispepsia Tipe Dismotility";
						} elseif ($hasil_konsul['kode_solusi'] == 'S04') {
							echo "Tukak Lambung";
						} elseif ($hasil_konsul['kode_solusi'] == 'S05') {
							echo "Diare tanpa dehidrasi";
						} elseif ($hasil_konsul['kode_solusi'] == 'S06') {
							echo "Diare dengan dehidrasi sedang";
						} elseif ($hasil_konsul['kode_solusi'] == 'S07') {
							echo "Diare dengan dehidrasi berat";
						}
						?>
					</td>
					</tr>
				</tbody>
			</table>
			<br>
			<h6>Solusi : </h6>
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

			<br>
			<br>
			<br>
			<br>
			<div style='right:10px;width:200px;float:right;text-align:center;font-size:12px;'>
				<p>Padang, <?php echo date('d-m-Y') ?></p><br><br><br>
				<p>dr. Monica Sari, SpPD</p>
			</div>

		</div>
		<script type="text/javascript">
			window.print();
		</script>
	</body>

	</html>