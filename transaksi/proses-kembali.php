<?php
include '../koneksi.php';
include 'fungsi-transaksi.php';

if(isset($_POST['simpan'])){
$id_pinjam = $_POST['id_pinjam'];
$id_buku = $_POST['id_buku'];
$tgl_kembali = $_POST['tgl_kembali'];
// var_dump($tgl_kembali);die;

if ($tgl_kembali==null) {
  $count =mysqli_affected_rows($kon);
} else {

  $sql = "UPDATE detail_pinjam SET tgl_kembali='$tgl_kembali',
             status='kembali' WHERE id_pinjam=$id_pinjam";
  $res = mysqli_query($kon, $sql);
  $count = mysqli_affected_rows($kon);
}
  $stok_update = ambilStok($kon, $id_buku)+1;

if($count == 1)
{
      updateStok($kon, $id_buku, $stok_update);
      $denda = hitungDenda($kon, $id_pinjam, $tgl_kembali);

      $sql = "UPDATE peminjaman SET denda=$denda WHERE id_pinjam=$id_pinjam";
      $res = mysqli_query($kon, $sql);

      header("Location: detail.php?id_pinjam=$id_pinjam");
 exit;}
else {
  header("Location: detail.php?id_pinjam=$id_pinjam");
}

}
else
{
    header("Location: index.php");
}

?>
