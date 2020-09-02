<?php
require "koneksi.php";

$id = $_POST['idh'];
$data = query("SELECT * FROM hasil_konsul WHERE id = '$id'")[0];

$id                = $data["id"];
$kode_diagnosa     = $data["kode_diagnosa"];
$nama              = $data["nama"];
$jk                = $data["jk"];
$umur              = $data["umur"];
$tgl               = $data["tgl"];
$tingkat_kepastian = $data["tingkat_kepastian"];
$kode_solusi = $data["kode_solusi"];

$dArray = array();
$dArray[0]      = $id;
$dArray[1]      = $kode_diagnosa;
$dArray[2]      = $nama;
$dArray[3]      = $jk;
$dArray[4]      = $umur;
$dArray[5]      = $tgl;
$dArray[6]      = $tingkat_kepastian;
$dArray[7]      = $kode_solusi;

echo json_encode($dArray);
exit();
