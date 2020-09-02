<?php
// error_reporting(0);
function tGejala($data)
{
	global $conn;

	$kode_gejala =  htmlspecialchars($data["kode_gejala"]);
	$ket_gejala = htmlspecialchars($data["ket_gejala"]);
	$angka_cf = htmlspecialchars($data["angka_cf"]);

	//query insert data
	$query = "INSERT INTO gejala (`kode_gejala`, `ket_gejala`, `angka_cf`) VALUES ('$kode_gejala','$ket_gejala','$angka_cf')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function tPenyakit($data)
{
	global $conn;

	$kode_penyakit =  htmlspecialchars($data["kode_penyakit"]);
	$nm_penyakit = htmlspecialchars($data["nm_penyakit"]);
	$ket = htmlspecialchars($data["ket"]);

	//query insert data
	$query = "INSERT INTO penyakit (`kode_penyakit`, `nm_penyakit`, `ket`) VALUES ('$kode_penyakit','$nm_penyakit','$ket')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tSolusi($data)
{
	global $conn;

	$kode_solusi =  htmlspecialchars($data["kode_solusi"]);
	$ket_solusi = htmlspecialchars($data["ket_solusi"]);

	//query insert data
	$query = "INSERT INTO solusi (`kode_solusi`, `ket_solusi`, `nm_penyakit`) VALUES ('$kode_solusi','$ket_solusi')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// Edit
function edit_gejala($data)
{
	global $conn;

	$id =  htmlspecialchars($data["idgj"]);
	$kode_gejala =  htmlspecialchars($data["kdgj"]);
	$ket_gejala = htmlspecialchars($data["ketgj"]);
	$angka_cf = htmlspecialchars($data["angj"]);

	//query insert data
	$query = "UPDATE gejala SET 
					kode_gejala = '$kode_gejala',
					ket_gejala = '$ket_gejala',
					angka_cf = '$angka_cf'
					WHERE id='$id'";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function edit_solusi($data)
{
	global $conn;

	$id =  htmlspecialchars($data["ids"]);
	$kode_solusi =  $data["kds"];
	$ket_solusi = $data["kets"];

	//query insert data
	$query = "UPDATE solusi SET 
					kode_solusi = '$kode_solusi',
					ket_solusi = '$ket_solusi'
					WHERE id='$id'";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// Hapus
function hapusGejala($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM gejala WHERE id = $id");
	return mysqli_affected_rows($conn);
}
function hapusSolusi($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM solusi WHERE id = $id");
	return mysqli_affected_rows($conn);
}
