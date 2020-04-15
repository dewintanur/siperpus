<?php

include '../koneksi.php';


 if(isset($_POST['simpan']))
{
  $id_buku = $_POST['id_buku'];
  $judul = $_POST['judul'];
  $penerbit = $_POST['penerbit'];
  $pengarang = $_POST['pengarang'];
  $ringkasan = $_POST['ringkasan'];
  $cover =$_POST['cover'];
  $stok = $_POST['stok'];
  $id_kategori = $_POST['kategori'];


  $sl = "UPDATE buku SET judul='$judul', penerbit='$penerbit', pengarang=' $pengarang',
     ringkasan='$ringkasan',cover='$cover', stok=$stok, id_kategori=$id_kategori where id_buku=$id_buku";
  $res = mysqli_query($kon,$sl);
  $count=mysqli_affected_rows($kon);
 if($count==1){
  echo "
  <script>
    alert('data berhasil diedit');
    document.location.href='index.php';
   </script>
  ";
}
;
}

?>
