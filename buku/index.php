<?php
include '../koneksi.php';
$skl="SELECT * FROM buku";

$res=mysqli_query($kon,$skl);
$buku=array();

while ($data = mysqli_fetch_assoc($res)) {
  $buku[]=$data;
}
 ?>
<?php
include '../aset/header.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>buku</title>
    <style>
  a[name="tambah"]{
   padding-left: 700px;
  }
    </style>
  </head>
<center>

</center>

  <body>
     <div class="container">
       <div class="row mt-4">
         <div class="col-md">
           <div class="card">
             <div class="card-header">
          <h2 class="card-title"><i class="fas fa-book"></i>Data Buku
          <a href="tambah_buku.php" class="badge badge-succes" name = "tambah"> Tambah Buku</a>

     </h2>
      </div>
      <div class="card-body">
        <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Pengarang</th>

          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <?php
      $no =1;
      foreach ($buku as $b) {
        ?>
        <tr>
          <th scope="row"><?=$no?></th>
          <td><?=$b['judul']?></td>
          <td><?=$b['pengarang']?></td>
          <td>
              <a href="detail_buku.php?id_buku=<?= $b['id_buku']?>&judul=<?$b['judul']?>" class="badge badge-succes">Detail</a>
              <a href="form-edit.php?id_buku=<?=$b['id_buku']?>" class="badge badge-warning">Edit</a>
              <a href="hapus_buku.php?id_buku=<?= $b['id_buku']?>" class="badge badge-danger">Hapus</a>
            </td>
          </tr>
          <?php
          $no++;
    }
           ?>
           </table>
      </div>
    </div>
     </div>
      </div>
       </div>

  </body>
</html>
 <?php
include '../aset/footer.php';
 ?>
