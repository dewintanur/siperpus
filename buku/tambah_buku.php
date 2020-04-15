<?php
include '../koneksi.php';
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <h2>Tambah Data Buku</h2>
                </div>
                <div class="card-body">
                  <form  action="proses-tambah-buku.php" method="post">
                    <div class="form-group">
                      <label for="buku">Judul</label>
                      <input type="text" class="form-control" name="judul" id="buku" placeholder="Masukkan judul Buku">
                    </div>
                    <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukkan pengarang">
                    <small class="form-text text-muted">Contoh: Tere Liye</small>
                </div>
                      <div class="form-group">
                      <label for="penerbit">Penerbit</label>
                      <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan penerbit">
                  </div>
                  <div class="form-group">
                  <label for="ringkasan">Ringkasan</label>
                  <textarea name="ringkasan" rows="8" cols="80"></textarea>
              </div>
              <div class="form-group">
              <label for="cover">Cover</label>
              <input type="file" class="form-control" name="cover" id="cover" placeholder="Masukkan cover">
                    </div>
                    <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" class="form-control" name="stok" id="stok" placeholder="Masukkan stok">
                </div>

                <div class="form-group">
                <label for="id_kategori">Kategori </label>
                <select style="width : 100%" name="kategori">

                  <option value="">Pilih Kategori</option>
                  <?php $sl = mysqli_query($kon,"SELECT * FROM  kategori "); ?>
                  <?php while ($id_kategori =mysqli_fetch_assoc($sl)): ?>
                  <option value="<?php echo $id_kategori["id_kategori"];?>"><?php echo $id_kategori["kategori"];?></option>
                <?php endwhile; ?>
                </select>
            </div>
              <div>
                  <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>
