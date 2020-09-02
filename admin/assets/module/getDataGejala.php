<?php

	require "koneksi.php";

	$id = $_POST['idg'];
	$data = query("SELECT * FROM gejala WHERE id = '$id'")[0];

	$id = $data["id"];
	$kode_gejala = $data["kode_gejala"];
	$ket_gejala = $data["ket_gejala"];
	$angka_cf = $data["angka_cf"];
	

	$dArray = array();
	$dArray[0] = $id;
	$dArray[1] = $kode_gejala;
	$dArray[2] = $ket_gejala;
	$dArray[3] = $angka_cf;
	

	echo json_encode($dArray);
	exit();
