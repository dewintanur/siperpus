<?php
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <h2>Tambah Data Anggota</h2>
                </div>
                <div class="card-body">
                  <form  action="proses-tambah.php" method="post">
                    <div class="form-group">
                      <label for="anggota">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama" id="anggota" placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukkan kelas">
                    <small class="form-text text-muted">Contoh: XRPL2</small>
                </div>
                <div class="form-group">
                    <label for="telp">Nomor Telepon</label>
                    <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukkan nomor telepon">
                    <small class="form-text text-muted">Contoh: 111-222-3333</small>
                  </div>
                  <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username">
                  </div>
                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
                  </div>

                  <button type="submit" class="btn btn-primary" 
                          name="simpan">Simpan</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>
