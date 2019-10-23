<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Tambah Pegawai</h3>
  </div>
  <div class="panel-body">
      <?php $this->flashSession->Output() ?>
      <form class="" action="tambahproses" method="post">
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="">nama :</label>
                      <input class="form-control" type="text" name="nama" value="">
                  </div>
                  <div class="form-group">
                      <label for="">nip :</label>
                      <input class="form-control" type="number" name="nip" value="">
                  </div>
                  <div class="form-group">
                      <label for="">alamat :</label>
                      <input class="form-control" type="text" name="alamat" value="">
                  </div>
                  <div class="form-group">
                      <label for="">umur :</label>
                      <input class="form-control" type="number" name="umur" value="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="">password :</label>
                      <input class="form-control" type="password" name="password" value="">
                  </div>
                  <div class="form-group">
                      <label for="">konfirmasi password :</label>
                      <input class="form-control" type="password" name="konfirmasi_password" value="">
                  </div>
                  <div class="form-group">
                      <label for="">email :</label>
                      <input type="email" name="email" value="" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">hak akses :</label>
                      <select class="form-control" name="hak_akses">
                          <option value="bagian_umum">Bagian Umum</option>
                          <option value="bagian_kesehatan">Bagian Kesehatan</option>
                      </select>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <button type="submit" class="btn btn-success">
                      Tambah
                  </button>
                  <button type="reset" class="btn btn-danger">
                      Reset
                  </button>
              </div>
          </div>
      </form>
  </div>
  <div class="panel-footer">

  </div>
</div>
