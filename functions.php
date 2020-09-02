<?php

function tUser($data)
{
	global $conn;
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$nama =  htmlspecialchars($data["nama"]);
	$level =  htmlspecialchars($data["level"]);
	$jk =  htmlspecialchars($data["jk"]);
	$umur =  htmlspecialchars($data["umur"]);
	$tgl =  htmlspecialchars($data["tgl"]);

	//apabila ada data yang sama dengan admin
	// $result = mysqli_query($conn, "SELECT username FROM users WHERE
	// 			username = '$username'");
	// if (mysqli_fetch_assoc($result)) {
	// 	echo "<script>
	// 	alert ('Username sudah ada');
	// 			</script>";
	// 	return false;
	// }

	if ($password !== $password2) {
		echo "<script>
		alert('password tidak terkonfirmasi');
	</script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);
	$query = "INSERT INTO pengguna (`username`, `password`, `nama`, `level`, `jk`, `umur`, `tgl`) VALUES ( '$username', '$password', '$nama', '$level','$jk','$umur','$tgl')";
	// echo $query;
	// exit;
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
