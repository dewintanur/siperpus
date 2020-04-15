<?php
include '../koneksi.php';
$id=$_GET["id_pinjam"];
$query = mysqli_query($kon,"DELETE FROM detail_pinjam WHERE id_pinjam='$id'");
$query= mysqli_query($kon,"DELETE FROM peminjaman WHERE id_pinjam='$id'");
if (isset($query)) {
  echo
  "
  <script>
      alert('data berhasil dihapus yeayy!');
      document.location.href='index.php';
  </script>
  ";
}
else {
  header("Location : index.php");
  exit;
}
 ?>
