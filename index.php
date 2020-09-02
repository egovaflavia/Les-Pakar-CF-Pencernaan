<?php

session_start();

require 'koneksi.php';
require 'functions.php';

if (isset($_SESSION["loginAdmin"])) {
    header("Location: admin/");
    exit;
}
if (isset($_SESSION["loginKlien"])) {
    header("Location: user/");
    exit;
}

if (isset($_POST["btn_login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $level = $_POST["level"];

    // echo "<script>
    //                     alert('$username!');
    //                   </script>";

    if ($level == "admin") {
        $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username='$username' AND level= '$level'");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if (password_verify($password, $row["password"])) {

                $_SESSION["loginAdmin"] = $row["id"];
                echo "<script> document.location.href = 'admin/index.php'; </script>";
                exit;
            } else {
                echo "<script>
                    alert('Password Anda Salah!');
                     </script>";
            }
        } else {
            echo "<script>
                    alert('Username tidak ditemukan!');
                  </script>";
        }
    }
    if ($level == "klien") {
        $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username='$username' AND level= '$level'");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if (password_verify($password, $row["password"])) {

                $_SESSION["loginKlien"] = $row["id"];
                // echo"<script>
                //     alert('$_SESSION[loginKlien]');
                //   </script>";
                echo "<script> document.location.href = 'user/'; </script>";
                exit;
            } else {
                echo "<script>
                    alert('Password Anda Salah!');
                     </script>";
            }
        } else {
            echo "<script>
                    alert('Username tidak ditemukan!');
                  </script>";
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SISTEM PAKAR</title>
    <link rel="stylesheet" type="text/css" href="assets/login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>

<body>
    <div class="head">
        <div class="h1">
            SISTEM PAKAR PENYAKIT PADA SALURAN PENCERNAAN
        </div>
    </div>

    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>
        <form method="post" action="">
            <!-- <label id="username">Username</label> -->
            <input id="uname" type="text" name="username" class="form_login" placeholder="Username" required autofocus><br>
            <input type="password" name="password" class="form_login" placeholder="Password" required>
            <input id="klien" type="radio" name="level" value="klien" checked> <label for="klien">
                Pasien</label>&nbsp;&nbsp;
            <input id="admin" type="radio" name="level" value="admin"> <label for="admin"> Admin</label>
            <br><br>
            <button name="btn_login" class="tombol_login">LOGIN</button>
            <br><br>
            <!-- <button type="button" class="tombol_login" data-toggle="modal" data-target="#exampleModalScrollable">REGISTER
            </button> -->
            <small>Belum punya akun ? <a href="regis.php" style="color: blue"><u>Register Sekarang</u></a></small>
        </form>
    </div>

    <!-- Modal Register -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Silahkan Registrasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Konfirmasi Password</label>
                            <input type="password" name="password2" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="level" value="klien" class="form-control" hidden>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label><br>
                            <input type="radio" name="jk" value="Laki-laki" checked> Laki-laki
                            <input type="radio" name="jk" value="Perempuan"> Perempuan
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Umur</label>
                            <input type="text" name="umur" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="tgl" class="form-control" value="<?= date('d-m-Y'); ?>" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="regis" class="btn btn-primary">DAFTAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>