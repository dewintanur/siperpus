<?php

include '../koneksi.php';
include '../aset/header.php';

$id_anggota = $_GET['id_anggota'];
// $sql = "SELECT * FROM anggota INNER JOIN level ON anggota.id_anggota = level.id_level WHERE  id_anggota = '$id_anggota'";
$sql = "SELECT*FROM anggota WHERE id_anggota='$id_anggota'";
$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_assoc($res);
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Anggota</h3>
                </div>
                <div class="card-body">
                <form method="post" action="proses-edit-a.php">
                  <div class="form-group">
                         <label for="anggota">Nama</label>
                        <input type="text" name="nama" value="<?= $detail['nama'] ?>" class="form-control" >
                        </div>

                        <div class="form-group">
                         <label for="buku">Kelas</label>
                         <input type="text" name="kelas" value="<?= $detail['kelas'] ?>" class="form-control" >
                        </div>

                        <div class="form-group">
                         <label for="buku">No Telepon</label>
                         <input type="text" name="telp" value="<?= $detail['telp'] ?>" class="form-control" >
                        </div>
                        <div class="form-group">
                         <label for="buku">Username</label>
                         <input type="text" name="username"value="<?= $detail['username'] ?>" class="form-control" >
                        </div>
                        <div class="form-group">
                         <label for="buku">Password</label>
                         <input type="text" name="password" value="<?= $detail['password'] ?>" class="form-control" >
                        </div>


                        <?php
                        ?>
                        <div class="form-group">
                           <input type="hidden" name="id_anggota" value="<?= $id_anggota ?>">
                           <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Simpan</button>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include '../aset/footer.php';

?>
