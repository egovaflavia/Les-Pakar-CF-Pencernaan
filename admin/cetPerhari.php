<?php

session_start();

// if (!isset($_SESSION["loginKlien"])) {
//   header("Location: user/hasil_konsultasi.php");
// }
$tgl = $_POST['tgl'];
require "assets/module/koneksi.php";
$hasil_konsul = query("SELECT * FROM hasil_konsul WHERE tgl LIKE '%$tgl%' ORDER BY id DESC ");

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
				Laporan Tanggal <?php echo $tgl ?>
			</div>
			<br>
			<br>
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
					<?php foreach ($hasil_konsul as $dKonsultasi) {
					?>
						<td style='padding:5px;'><?php echo $dKonsultasi['kode_diagnosa'] ?></td>
						<td style='padding:5px;'><?php echo $dKonsultasi['nama'] ?></td>
						<td style='padding:5px;'><?php echo $dKonsultasi['jk'] ?></td>
						<td style='padding:5px;'><?php echo $dKonsultasi['umur'] ?> Tahun</td>
						<td style='padding:5px;'><?php echo $dKonsultasi['tingkat_kepastian'] ?>%</td>
						<td style='padding:5px;'>
							<?php
							if ($dKonsultasi['kode_solusi'] == '0') {
								echo "";
							} elseif ($dKonsultasi['kode_solusi'] == 'S01') {
								echo "Dispepsia Fungsional";
							} elseif ($dKonsultasi['kode_solusi'] == 'S02') {
								echo "Dispepsia Like Ulcer";
							} elseif ($dKonsultasi['kode_solusi'] == 'S03') {
								echo "Dispepsia Tipe Dismotility";
							} elseif ($dKonsultasi['kode_solusi'] == 'S04') {
								echo "Tukak Lambung";
							} elseif ($dKonsultasi['kode_solusi'] == 'S05') {
								echo "Diare tanpa dehidrasi";
							} elseif ($dKonsultasi['kode_solusi'] == 'S06') {
								echo "Diare dengan dehidrasi sedang";
							} elseif ($dKonsultasi['kode_solusi'] == 'S07') {
								echo "Diare dengan dehidrasi berat";
							}
							?>
						</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<br>
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