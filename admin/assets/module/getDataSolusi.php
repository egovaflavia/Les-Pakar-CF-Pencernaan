<?php
	require "koneksi.php";

	$id = $_POST['ids'];
	$data = query("SELECT * FROM solusi WHERE id = '$id'")[0];

	$id = $data["id"];
	$kode_solusi = $data["kode_solusi"];
	$ket_solusi = $data["ket_solusi"];

	$dArray = array();
	$dArray[0] = $id;
	$dArray[1] = $kode_solusi;
	$dArray[2] = $ket_solusi;

	echo json_encode($dArray);
	exit();
	
?>
