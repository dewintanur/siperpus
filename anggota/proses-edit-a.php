<?php

include '../koneksi.php';


 if(isset($_POST['simpan']))
{
  $id_anggota = $_POST['id_anggota'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $telp = $_POST['telp'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id_level = 3;

  $sl = "UPDATE anggota SET nama='$nama', kelas='$kelas', telp='$telp',
     username='$username',password='$password', id_level='$id_level' where id_anggota=$id_anggota";
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
