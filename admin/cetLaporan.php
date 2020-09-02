<?php

require_once __DIR__ . "/../assets/pdf/vendor/autoload.php";
require "assets/module/koneksi.php";

$tgl = $_GET["tgl"];


$resHasil = query("SELECT * FROM hasil_konsul WHERE tgl LIKE '%$tgl%' ORDER BY id DESC ");

$potong = explode("-", $tgl);

if ($potong[0] == "01") {
	$bln = "Januari";
} elseif ($potong[0] == "02") {
	$bln = "Februari";
} elseif ($potong[0] == "03") {
	$bln = "Maret";
} elseif ($potong[0] == "04") {
	$bln = "April";
} elseif ($potong[0] == "05") {
	$bln = "Mei";
} elseif ($potong[0] == "06") {
	$bln = "Juni";
} elseif ($potong[0] == "07") {
	$bln = "Juli";
} elseif ($potong[0] == "08") {
	$bln = "Agustus";
} elseif ($potong[0] == "09") {
	$bln = "September";
} elseif ($potong[0] == "10") {
	$bln = "Oktober";
} elseif ($potong[0] == "11") {
	$bln = "November";
} else {
	$bln = "Desember";
}


$mpdf = new \Mpdf\Mpdf();

$html = "
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Diagnosa</title>
</head>
<body>

	<div style='width:60%;float: left;' align='center'>
		<p style='margin: 0px;font-size: 20px;' align='center'>Rumah Sakit Hermina Padang <br> dr. Monica Sari, SpPD </p>
	</div>
	<div style='width:19%;float: left;' align='center'>
		&nbsp;
	</div>

	<hr style='margin:0px;color:black;'> 
	<hr style='margin-top:1.5px;color:black;height:3px;'><br>
	
	<p style='font-weight: bold;font-size: 14px;margin: 0px;' align='center'>Laporan Diagnosa Bulan " . $bln . " " . $potong[1] . "</p><br>
	<table border='1' cellspacing='0' width='100%' style='font-size:12px;'>
		<thead>	
			<tr>
				<th style='padding:5px;'>No</th>
				<th style='padding:5px;'>Kode Diagnosa</th>
				<th style='padding:5px;'>Nama</th>
				<th style='padding:5px;'>Jenis Kelamin</th>
				<th style='padding:5px;'>Umur</th>
				<th style='padding:5px;'>Tingkat Kepastian</th>
			</tr>
		</thead>";
$no = 1;
foreach ($resHasil as $row) :
	$html .= "
		<tbody>
			<tr>
				<td style='padding:5px;text-align:center;'>" . $no . "</td>
				<td style='padding:5px;text-align:center;'>" . $row["kode_diagnosa"] . "</td>
				<td style='padding:5px;text-align:center;'>" . $row["nama"] . "</td>
				<td style='padding:5px;text-align:center;'>" . $row["jk"] . "</td>
				<td style='padding:5px;text-align:center;'>" . $row["umur"] . " Tahun</td>
				<td style='padding:5px;text-align:center;width: 100px;'>" . $row["tingkat_kepastian"] . " %</td>
			</tr>
		<tbody>";
	$no++;
endforeach;
$html .= "
	</table>
	<br>
	<div style='right:10px;width:200px;float:right;text-align:center;font-size:12px;'>
		<p>Padang, " . date("d-m-Y") . " </p><br><br><br>
		<p>dr. Monica Sari, SpPD</p>
	</div> 
</body>
</html>";

$mpdf->WriteHTML($html);
$mpdf->Output();
