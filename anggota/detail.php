<?php
include '../aset/header.php';

include '../koneksi.php';
$id_anggota = $_GET['id_anggota'];

$sql = "SELECT*FROM anggota WHERE id_anggota = '$id_anggota'";

// $sql = "SELECT * FROM anggota INNER JOIN level ON anggota.id_anggota = level.id_level WHERE  id_anggota = '$id_anggota'";
$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
    <div class="row mt-4">
        <div class="col-md-7">
            <h2>Detail Anggota</h2>
            <hr class="bg-light">
                <table class="table table-bordered">
                    <tr>
                      <td><strong>Nama</strong></td>
                      <td><?= $detail['nama'] ?></td>
                    </tr>
                    <tr>
                      <td><strong>Kelas</strong></td>
                      <td><?= $detail['kelas'] ?></td>
                    </tr>
                    <tr>
                      <td><strong>Nomor telepon</strong></td>
                      <td><?= $detail['telp'] ?></td>
                    </tr>
                    <tr>
                      <td><strong>Username</strong></td>
                      <td><?= $detail['username'] ?></td>
                    </tr>
                    <tr>
                      <td><strong>Password</strong></td>
                      <td><?= $detail['password'] ?></td>
                    </tr>
                      <tr>
                        <td class="text-right" colspan="2">
                        <a href="index.php" class="btn btn-success"> <i class="fa fa-angle-double-left"></i> Kembali </a>

                         </td>
                      </tr>
                </table>
        </div>
    </div>
</div>

</body>
</html>

<?php
include '../aset/footer.php';
?>
