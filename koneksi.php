<?php
$kon=mysqli_connect("localhost", "root","","db_perpus");

if (mysqli_connect_error()) {
  echo "Koneksi database gagal : ".mysqli_connect_error();
  // code...
}
 ?>
