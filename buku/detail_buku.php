<?php
include '../aset/header.php';

include '../koneksi.php';
$id_buku = $_GET['id_buku'];

$sql = "SELECT * FROM buku WHERE id_buku = '$id_buku' ";
$res = mysqli_query($kon, $sql,);
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
            <h2>Detail Buku</h2>
            <hr class="bg-light">
                <table class="table table-bordered">
                  <tr>
                        <td><strong>Judul</strong></td>
                        <td><?= $detail['judul'] ?></td>
                  </tr>
                        <tr>
                          <td><strong>Penerbit</strong></td>
                          <td><?= $detail['penerbit'] ?></td>
                        </tr>
                        <tr>
                          <td><strong>Pengarang</strong></td>
                          <td><?= $detail['pengarang'] ?></td>
                        </tr>
                        <tr>
                          <td><strong>Cover</strong></td>
                          <td><img src="<?= $detail['cover'] ?>"</td>
                        </tr>
                        <tr>
                          <td><strong>Stok</strong></td>
                          <td><?= $detail['stok'] ?></td>
                        </tr>
                        <tr>
                          <td><strong>Kategori</strong></td>
                          <td><?= $detail['id_kategori'] ?></td>
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
