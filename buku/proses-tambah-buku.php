<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
  $judul = $_POST['judul'];
  $penerbit = $_POST['penerbit'];
  $pengarang = $_POST['pengarang'];
  $ringkasan = $_POST['ringkasan'];
  $cover =$_POST['cover'];
  $stok = $_POST['stok'];
  $id_kategori = $_POST['kategori'];

  $sl =mysqli_query ($kon,"INSERT INTO buku (judul,penerbit,pengarang, ringkasan,cover, stok,id_kategori)
  VALUES ( '$judul','$penerbit', '$pengarang','$ringkasan','$cover','$stok','$id_kategori')");
if($sl > 0){
  echo "
  <script>
    alert('data berhasil');
    document.location.href='index.php';
   </script>
  ";
}
;
}

?>
