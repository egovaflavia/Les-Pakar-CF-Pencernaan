<?php
// error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "db_pencernaan");
// $conn = mysqli_connect("localhost", "id14429699_root", "EetuGuRfH5w5+bAo", "id14429699_db_pencernaan");
function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
