<?php
session_start();

if (!isset($_SESSION["loginKlien"])) {
	header("Location: ../");
}

require 'assets/module/koneksi.php';
require 'assets/module/functions.php';

if (isset($_POST["btn_diagnosa"])) {

	if (t_hasil_konsul($_POST) > 0) {
		echo "
                <script>
                    document.location.href = 'hasil_konsultasi.php';
                </script>
            ";
	} else {
		echo "
                <script>
                    alert('Penyakit Tidak Di Temukan !');
                    document.location.href = 'index.php';
                </script>
            ";
	}
}


$gjl1 = query("SELECT * FROM gejala WHERE kode_gejala = 'G01'")[0];
$gjl2 = query("SELECT * FROM gejala WHERE kode_gejala = 'G02'")[0];
$gjl3 = query("SELECT * FROM gejala WHERE kode_gejala = 'G03'")[0];
$gjl4 = query("SELECT * FROM gejala WHERE kode_gejala = 'G04'")[0];
$gjl5 = query("SELECT * FROM gejala WHERE kode_gejala = 'G05'")[0];
$gjl6 = query("SELECT * FROM gejala WHERE kode_gejala = 'G06'")[0];
$gjl7 = query("SELECT * FROM gejala WHERE kode_gejala = 'G07'")[0];
$gjl8 = query("SELECT * FROM gejala WHERE kode_gejala = 'G08'")[0];
$gjl9 = query("SELECT * FROM gejala WHERE kode_gejala = 'G09'")[0];
$gjl10 = query("SELECT * FROM gejala WHERE kode_gejala = 'G10'")[0];
$gjl11 = query("SELECT * FROM gejala WHERE kode_gejala = 'G11'")[0];
$gjl12 = query("SELECT * FROM gejala WHERE kode_gejala = 'G12'")[0];
$gjl13 = query("SELECT * FROM gejala WHERE kode_gejala = 'G13'")[0];
$gjl14 = query("SELECT * FROM gejala WHERE kode_gejala = 'G14'")[0];
$gjl15 = query("SELECT * FROM gejala WHERE kode_gejala = 'G15'")[0];
$gjl16 = query("SELECT * FROM gejala WHERE kode_gejala = 'G16'")[0];
$gjl17 = query("SELECT * FROM gejala WHERE kode_gejala = 'G17'")[0];
$gjl18 = query("SELECT * FROM gejala WHERE kode_gejala = 'G18'")[0];
$gjl19 = query("SELECT * FROM gejala WHERE kode_gejala = 'G19'")[0];
$gjl20 = query("SELECT * FROM gejala WHERE kode_gejala = 'G20'")[0];
$gjl21 = query("SELECT * FROM gejala WHERE kode_gejala = 'G21'")[0];
$gjl22 = query("SELECT * FROM gejala WHERE kode_gejala = 'G22'")[0];
$gjl23 = query("SELECT * FROM gejala WHERE kode_gejala = 'G23'")[0];
$gjl24 = query("SELECT * FROM gejala WHERE kode_gejala = 'G24'")[0];

// $pasien= query("SELECT FROM login WHERE id = $id")[0];
// $pasien = query("SELECT * FROM login WHERE id = '$_SESSION[loginKlien]'")[0];
$pasien = query("SELECT * FROM pengguna WHERE id = '$_SESSION[loginKlien]'")[0];
// $tl = query("SELECT * FROM pengaduan WHERE id = $id")[0];


?>

<doctype html>
	<html lang="en">

	<head>
		<!--  meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/login.css">
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap.js"></script>

		<title>Halaman Konsultasi</title>
	</head>

	<body>
		<div class="container mt-5">
			<div class="alert alert-dark">
				<h1 class="konsul">HALAMAN KONSULTASI</h1>
				<form target="_blank" method="post" action="">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" name="nama" value="<?= $pasien['nama']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-10">
							<input type="text" readonly name="jk" class="form-control-plaintext" value="<?= $pasien['jk']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Umur</label>
						<div class="col-sm-10">
							<input type="text" readonly name="umur" class="form-control-plaintext" value="<?= $pasien['umur']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Konsultasi</label>
						<div class="col-sm-10">
							<input type="text" readonly name="tgl" class="form-control-plaintext" value="<?= $pasien['tgl']; ?>">
						</div>
					</div>
					<a class="btn btn-danger" style="width: 100px;" href="logout.php">Logout</a>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Gejala</th>
								<th scope="col">Jawaban</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<th scope="row">1</th>
								<td>Apakah anda <?php echo $gjl1["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl1["id"]; ?>" type="radio" name="yt1" value="0.4"> <label for="ya<?= $gjl1["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl1["id"]; ?>" type="radio" name="yt1" value="0"> <label for="tidak<?= $gjl1["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">2</th>
								<td>Apakah anda <?php echo $gjl2["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl2["id"]; ?>" type="radio" name="yt2" value="0.6"> <label for="ya<?= $gjl2["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl2["id"]; ?>" type="radio" name="yt2" value="0"> <label for="tidak<?= $gjl2["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">3</th>
								<td>Apakah anda <?php echo $gjl3["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl3["id"]; ?>" type="radio" name="yt3" value="0.8"> <label for="ya<?= $gjl3["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl3["id"]; ?>" type="radio" name="yt3" value="0"> <label for="tidak<?= $gjl3["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">4</th>
								<td>Apakah anda <?php echo $gjl4["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl4["id"]; ?>" type="radio" name="yt4" value="0.4"> <label for="ya<?= $gjl4["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl4["id"]; ?>" type="radio" name="yt4" value="0"> <label for="tidak<?= $gjl4["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">5</th>
								<td>Apakah anda <?php echo $gjl5["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl5["id"]; ?>" type="radio" name="yt5" value="0.6"> <label for="ya<?= $gjl5["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl5["id"]; ?>" type="radio" name="yt5" value="0"> <label for="tidak<?= $gjl5["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">6</th>
								<td>Apakah anda <?php echo $gjl6["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl6["id"]; ?>" type="radio" name="yt6" value="0.8"> <label for="ya<?= $gjl6["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl6["id"]; ?>" type="radio" name="yt6" value="0"> <label for="tidak<?= $gjl6["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">7</th>
								<td>Apakah anda <?php echo $gjl7["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl7["id"]; ?>" type="radio" name="yt7" value="0.6"> <label for="ya<?= $gjl7["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl7["id"]; ?>" type="radio" name="yt7" value="0"> <label for="tidak<?= $gjl7["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">8</th>
								<td>Apakah anda <?php echo $gjl8["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl8["id"]; ?>" type="radio" name="yt8" value="0.8"> <label for="ya<?= $gjl8["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl8["id"]; ?>" type="radio" name="yt8" value="0"> <label for="tidak<?= $gjl8["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">9</th>
								<td>Apakah anda <?php echo $gjl9["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl9["id"]; ?>" type="radio" name="yt9" value="1"> <label for="ya<?= $gjl9["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl9["id"]; ?>" type="radio" name="yt9" value="0"> <label for="tidak<?= $gjl9["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">10</th>
								<td>Apakah anda <?php echo $gjl10["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl10["id"]; ?>" type="radio" name="yt10" value="0.8"> <label for="ya<?= $gjl10["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl10["id"]; ?>" type="radio" name="yt10" value="0"> <label for="tidak<?= $gjl10["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">11</th>
								<td>Apakah anda <?php echo $gjl11["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl11["id"]; ?>" type="radio" name="yt11" value="0.6"> <label for="ya<?= $gjl11["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl11["id"]; ?>" type="radio" name="yt11" value="0"> <label for="tidak<?= $gjl11["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">12</th>
								<td>Apakah anda <?php echo $gjl12["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl12["id"]; ?>" type="radio" name="yt12" value="1"> <label for="ya<?= $gjl12["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl12["id"]; ?>" type="radio" name="yt12" value="0"> <label for="tidak<?= $gjl12["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">13</th>
								<td>Apakah anda <?php echo $gjl13["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl13["id"]; ?>" type="radio" name="yt13" value="0.4"> <label for="ya<?= $gjl13["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl13["id"]; ?>" type="radio" name="yt13" value="0"> <label for="tidak<?= $gjl13["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">14</th>
								<td>Apakah anda <?php echo $gjl14["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl14["id"]; ?>" type="radio" name="yt14" value="0.4"> <label for="ya<?= $gjl14["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl14["id"]; ?>" type="radio" name="yt14" value="0"> <label for="tidak<?= $gjl14["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">15</th>
								<td>Apakah anda <?php echo $gjl15["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl15["id"]; ?>" type="radio" name="yt15" value="1"> <label for="ya<?= $gjl15["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl15["id"]; ?>" type="radio" name="yt15" value="0"> <label for="tidak<?= $gjl15["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">16</th>
								<td>Apakah anda <?php echo $gjl16["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl16["id"]; ?>" type="radio" name="yt16" value="0.6"> <label for="ya<?= $gjl16["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl16["id"]; ?>" type="radio" name="yt16" value="0"> <label for="tidak<?= $gjl16["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">17</th>
								<td>Apakah anda <?php echo $gjl17["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl17["id"]; ?>" type="radio" name="yt17" value="0.6"> <label for="ya<?= $gjl17["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl17["id"]; ?>" type="radio" name="yt17" value="0"> <label for="tidak<?= $gjl17["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">18</th>
								<td>Apakah anda <?php echo $gjl18["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl18["id"]; ?>" type="radio" name="yt18" value="0.6"> <label for="ya<?= $gjl18["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl18["id"]; ?>" type="radio" name="yt18" value="0"> <label for="tidak<?= $gjl18["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">19</th>
								<td>Apakah anda <?php echo $gjl19["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl19["id"]; ?>" type="radio" name="yt19" value="0.8"> <label for="ya<?= $gjl19["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl19["id"]; ?>" type="radio" name="yt19" value="0"> <label for="tidak<?= $gjl19["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">20</th>
								<td>Apakah anda <?php echo $gjl20["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl20["id"]; ?>" type="radio" name="yt20" value="0.6"> <label for="ya<?= $gjl20["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl20["id"]; ?>" type="radio" name="yt20" value="0"> <label for="tidak<?= $gjl20["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">21</th>
								<td>Apakah anda <?php echo $gjl21["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl21["id"]; ?>" type="radio" name="yt21" value="0.6"> <label for="ya<?= $gjl21["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl21["id"]; ?>" type="radio" name="yt21" value="0"> <label for="tidak<?= $gjl21["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">22</th>
								<td>Apakah anda <?php echo $gjl22["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl22["id"]; ?>" type="radio" name="yt22" value="0.6"> <label for="ya<?= $gjl22["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl22["id"]; ?>" type="radio" name="yt22" value="0"> <label for="tidak<?= $gjl22["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">23</th>
								<td>Apakah anda <?php echo $gjl23["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl23["id"]; ?>" type="radio" name="yt23" value="0.6"> <label for="ya<?= $gjl23["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl23["id"]; ?>" type="radio" name="yt23" value="0"> <label for="tidak<?= $gjl23["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row">24</th>
								<td>Apakah anda <?php echo $gjl24["ket_gejala"]; ?>?</td>
								<td>
									<input id="ya<?= $gjl24["id"]; ?>" type="radio" name="yt24" value="0.8"> <label for="ya<?= $gjl24["id"]; ?>">Ya</label>
									<input id="tidak<?= $gjl24["id"]; ?>" type="radio" name="yt24" value="0"> <label for="tidak<?= $gjl24["id"]; ?>">Tidak</label>
								</td>
							</tr>

							<tr>
								<th scope="row"></th>
								<td></td>
								<td>
									<button type="submit" class="btn-sm btn-primary" name="btn_diagnosa">DIAGNOSA</button>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

	</html>