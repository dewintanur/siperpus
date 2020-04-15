<?php
session_start();
if (!isset($_SESSION['id_petugas'])) {
  header("Location:http://localhost/siperpus/login/index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">
    <title>Siperpus</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><i class="fas fa-book-reader text-white mr-2">SIPERPUS</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="http://localhost/siperpus/index.php">Dashboard</a>
      <a class="nav-item nav-link" href="http://localhost/siperpus/buku/index.php">Buku</a>
      <a class="nav-item nav-link" href="http://localhost/siperpus/anggota/index.php">Anggota</a>
      <a class="nav-item nav-link" href="http://localhost/siperpus/transaksi/index.php">Peminjaman</a>
      <a class="nav-item nav-link" href="http://localhost/siperpus/login/logout.php">Logout</a>
    </div>
  </div>
</nav>
  </body>
</html>
