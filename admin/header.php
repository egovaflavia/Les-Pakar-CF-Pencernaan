<?php

session_start();

if (!isset($_SESSION["loginAdmin"])) {
  header("Location: ../");
}

require 'assets/module/koneksi.php';
require 'assets/module/funtions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Datepicker -->
  <link rel="stylesheet" type="text/css" href="../assets/datepicker/css/bootstrap-datepicker3.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.js"></script>

  <title>Halaman Admin</title>
</head>

<body style="background-image: url(../img/bg.png);">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">MENU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Data Gejala</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tPenyakit.php">Data Penyakit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tSolusi.php">Data Solusi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dPasien.php">Data Pasien</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tLaporan.php">Laporan Konsultasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="alert alert-dark">