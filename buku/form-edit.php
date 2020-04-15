<?php

include '../aset/header.php';
include '../koneksi.php';

$id_buku = $_GET['id_buku'];
$sql = mysqli_query ($kon,"SELECT * FROM buku WHERE id_buku = '$id_buku'");
$detail = mysqli_fetch_assoc($sql);
$query = mysqli_query($kon,"SELECT * FROM  kategori ");

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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Buku</h3>
                      </div>
                      <form  action="proses-edit.php" method="post">
                          <table class="table">
                                  <tr>
                                        <input type="hidden" name="id_buku" value="<?php echo $detail['id_buku'] ?>">
                                        <td><strong>Judul</strong></td>
                                        <td><input type="text" name = "judul" value="<?php echo $detail ["judul"] ?>"></td>
                                  </tr>
                                        <tr>
                                          <td><strong>Pengarang</strong></td>
                                          <td><input type="text" name = "pengarang" value="<?php echo $detail ["pengarang"] ?>"></td></td>
                                        </tr>
                                        <tr>
                                          <td><strong>Penerbit</strong></td>
                                          <td><input type="text" name = "penerbit" value="<?php echo $detail ["penerbit"] ?>"></td>
                                      </tr></td>

                                        <tr>
                                          <td><strong>Ringkasan</strong></td>
                                          <td>  <textarea name="ringkasan"><?php echo $detail ["ringkasan"] ?>
                                            </textarea></td>
                                        </tr></td>


                                        <tr>
                                          <td><strong>Cover</strong></td>
                                          <td><input type="file" name = "cover" value="<?php echo $detail ["cover"] ?>"></td></td>
                                          <td><img src="<?= $detail['cover'] ?>"</td>
                                        </tr>
                                        <tr>
                                          <td><strong>Stok</strong></td>
                                          <td><input type="number" name = "stok" value="<?php echo $detail ["stok"] ?>"></td></td>
                                        </tr>
                                        <tr>
                                          <td><strong>Kategori</strong></td>
                                          <td>  <select style="width : 100%" name="kategori">

                                            
                                                <?php
                                                 while ($kategori =mysqli_fetch_assoc($query)):
                                                    ?>
                                              <option value="<?php echo $kategori["id_kategori"];?>">
                                                <?php echo $kategori["kategori"];?></option>
                                            <?php endwhile; ?>
                                            </select></td>
                                        </tr>


                        </table>
                        <div class="">
                          <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>

                        </div>
                    </form>
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
