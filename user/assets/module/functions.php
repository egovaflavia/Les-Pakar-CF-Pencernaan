<?php
error_reporting(0);
function t_hasil_konsul($data)
{
	global $conn;
	//data pasien
	$nama =  htmlspecialchars($data["nama"]);
	$jk = htmlspecialchars($data["jk"]);
	$umur = htmlspecialchars($data["umur"]);
	$tgl = htmlspecialchars($data["tgl"]);
	//data angka cf
	$yt1 = htmlspecialchars($data["yt1"]);
	$yt2 = htmlspecialchars($data["yt2"]);
	$yt3 = htmlspecialchars($data["yt3"]);
	$yt4 = htmlspecialchars($data["yt4"]);
	$yt5 = htmlspecialchars($data["yt5"]);
	$yt6 = htmlspecialchars($data["yt6"]);
	$yt7 = htmlspecialchars($data["yt7"]);
	$yt8 = htmlspecialchars($data["yt8"]);
	$yt9 = htmlspecialchars($data["yt9"]);
	$yt10 = htmlspecialchars($data["yt10"]);
	$yt11 = htmlspecialchars($data["yt11"]);
	$yt12 = htmlspecialchars($data["yt12"]);
	$yt13 = htmlspecialchars($data["yt13"]);
	$yt14 = htmlspecialchars($data["yt14"]);
	$yt15 = htmlspecialchars($data["yt15"]);
	$yt16 = htmlspecialchars($data["yt16"]);
	$yt17 = htmlspecialchars($data["yt17"]);
	$yt18 = htmlspecialchars($data["yt18"]);
	$yt19 = htmlspecialchars($data["yt19"]);
	$yt20 = htmlspecialchars($data["yt20"]);
	$yt21 = htmlspecialchars($data["yt21"]);
	$yt22 = htmlspecialchars($data["yt22"]);
	$yt23 = htmlspecialchars($data["yt23"]);
	$yt24 = htmlspecialchars($data["yt24"]);
	// exit;


	// $rule =(($penyakit * $yt1)+($penyakit * $yt2)+($penyakit * $yt3)+($penyakit * $yt4)+($penyakit * $yt5)+($penyakit * $yt6)+($penyakit * $yt7)+($penyakit * $yt8)+($penyakit * $yt9)+($penyakit * $yt10)+($penyakit * $yt11)+($penyakit * $yt12))*100;
	$penyakit1 = 0.23;
	$penyakit2 = 0.44;
	$penyakit3 = 0.52;
	$penyakit4 = 0.76;
	$penyakit5 = 0.18;
	$penyakit6 = 0.60;
	$penyakit7 = 0.80;

	//perulangan pertama
	$rule1 = ($penyakit1 * max($yt1, $yt2, $yt3, $yt4)) * 100;

	$rule2 = ($penyakit2 * max($yt1, $yt3, $yt4, $yt5)) * 100;

	$rule3 = ($penyakit3 * max($yt1, $yt2, $yt4, $yt6, $yt7, $yt8)) * 100;

	$rule4 = ($penyakit4 * max($yt1, $yt3, $yt7, $yt8, $yt9, $yt10, $yt11)) * 100;

	$rule5 = ($penyakit5 * max($yt12, $yt13, $yt14)) * 100;

	$rule6 = ($penyakit6 * max($yt15, $yt16, $yt17, $yt18)) * 100;

	$rule7 = ($penyakit7 * max($yt17, $yt18, $yt19, $yt20, $yt21, $yt22, $yt23, $yt24)) * 100;


	$kd = uniqid("DGNS-");
	$tglSkrng = date('Y-m-d');
	if ($yt1 != 0 && $yt2 != 0 && $yt3 != 0 && $yt4 != 0) {
		$solusi = 'S01';
		$query = "INSERT INTO `hasil_konsul` (`kode_diagnosa`, `nama`, `jk`, `umur`, `tgl`, `tingkat_kepastian`, `kode_solusi`) VALUES ('$kd','$nama','$jk','$umur','$tglSkrng','$rule1','$solusi')";
		mysqli_query($conn, $query);

		// echo $query;
		// exit;
		return mysqli_affected_rows($conn);
	} elseif ($yt1 != 0 && $yt3 != 0 && $yt4 != 0 && $yt5 != 0) {
		$solusi = 'S02';
		$query2 = "INSERT INTO `hasil_konsul` (`kode_diagnosa`, `nama`, `jk`, `umur`, `tgl`, `tingkat_kepastian`, `kode_solusi`) VALUES ('$kd','$nama','$jk','$umur','$tglSkrng','$rule2','$solusi')";
		mysqli_query($conn, $query2);

		// echo $query2;
		// exit;
		return mysqli_affected_rows($conn);
	} elseif ($yt1 != 0 && $yt2 != 0 && $yt4 != 0 && $yt6 != 0 && $yt7 != 0 && $yt8 != 0) {
		$solusi = 'S03';
		$query2 = "INSERT INTO `hasil_konsul` (`kode_diagnosa`, `nama`, `jk`, `umur`, `tgl`, `tingkat_kepastian`, `kode_solusi`) VALUES ('$kd','$nama','$jk','$umur','$tglSkrng','$rule3','$solusi')";
		mysqli_query($conn, $query2);

		// echo $query2;
		// exit;
		return mysqli_affected_rows($conn);
	} elseif ($yt1 != 0 && $yt3 != 0 && $yt7 != 0 && $yt8 != 0 && $yt9 != 0 && $yt10 != 0 && $yt11 != 0) {
		$solusi = 'S04';
		$query2 = "INSERT INTO `hasil_konsul` (`kode_diagnosa`, `nama`, `jk`, `umur`, `tgl`, `tingkat_kepastian`, `kode_solusi`) VALUES ('$kd','$nama','$jk','$umur','$tglSkrng','$rule4','$solusi')";
		mysqli_query($conn, $query2);

		// echo $query2;
		// exit;
		return mysqli_affected_rows($conn);
	} elseif ($yt12 != 0 && $yt13 != 0 && $yt14 != 0) {
		$solusi = 'S05';
		$query2 = "INSERT INTO `hasil_konsul` (`kode_diagnosa`, `nama`, `jk`, `umur`, `tgl`, `tingkat_kepastian`, `kode_solusi`) VALUES ('$kd','$nama','$jk','$umur','$tglSkrng','$rule5','$solusi')";
		mysqli_query($conn, $query2);

		// echo $query2;
		// exit;
		return mysqli_affected_rows($conn);
	} elseif ($yt15 != 0 && $yt16 != 0 && $yt17 != 0 && $yt18 != 0) {
		$solusi = 'S06';
		$query2 = "INSERT INTO `hasil_konsul` (`kode_diagnosa`, `nama`, `jk`, `umur`, `tgl`, `tingkat_kepastian`, `kode_solusi`) VALUES ('$kd','$nama','$jk','$umur','$tglSkrng','$rule6','$solusi')";
		mysqli_query($conn, $query2);

		// echo $query2;
		// exit;
		return mysqli_affected_rows($conn);
	} elseif ($yt17 != 0 && $yt18 != 0 && $yt19 != 0 && $yt20 != 0 && $yt21 != 0 && $yt22 != 0 && $yt23 != 0 && $yt24 != 0) {
		$solusi = 'S07';
		$query2 = "INSERT INTO `hasil_konsul` (`kode_diagnosa`, `nama`, `jk`, `umur`, `tgl`, `tingkat_kepastian`, `kode_solusi`) VALUES ('$kd','$nama','$jk','$umur','$tglSkrng','$rule7','$solusi')";
		mysqli_query($conn, $query2);

		// echo $query2;
		// exit;
		return mysqli_affected_rows($conn);
	}
	// query insert data


}
