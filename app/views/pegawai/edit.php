<div class="panel panel-default">
  <div class="panel-heading">
    <h4>
        <a class="btn btn-default" href="../data"><span class="glyphicon glyphicon-arrow-left"></span></a>
        edit pegawai
    </h4>
  </div>
  <div class="panel-body">
      <?php $this->flashSession->Output() ?>
      <form class="" action="../editproses" method="post">
          <div class="row">
              <div class="col-md-6">
                  <input type="hidden" name="id_user" value="<?= $user->id_user ?>">
                  <div class="form-group">
                      <label for="">nama :</label>
                      <input class="form-control" type="text" name="nama" value="<?= $pegawai->nama ?>">
                  </div>
                  <div class="form-group">
                      <label for="">nip :</label>
                      <input class="form-control" type="number" name="nip" value="<?= $user->nip ?>">
                  </div>
                  <div class="form-group">
                      <label for="">alamat :</label>
                      <input class="form-control" type="text" name="alamat" value="<?= $pegawai->alamat ?>">
                  </div>
                  <div class="form-group">
                      <label for="">umur :</label>
                      <input class="form-control" type="number" name="umur" value="<?= $pegawai->umur ?>">
                  </div>
              </div>
              <div class="col-md-6">
                  <!-- <div class="form-group">
                      <label for="">password :</label>
                      <input class="form-control" type="password" name="password" value="<?= $user->password ?>">
                  </div>
                  <div class="form-group">
                      <label for="">konfirmasi password :</label>
                      <input class="form-control" type="password" name="konfirmasi_password" value="">
                  </div> -->
                  <div class="form-group">
                      <label for="">email :</label>
                      <input type="email" name="email"  class="form-control" value="<?= $user->email ?>">
                  </div>
                  <div class="form-group">
                      <label for="">hak akses :</label>
                      <select class="form-control" name="hak_akses">
                          <option <?php if($user->hak_akses == 'bagian_umum'):?> selected <?php endif; ?> value="bagian_umum">Bagian Umum</option>
                          <option <?php if($user->hak_akses == 'bagian_kesehatan'):?> selected <?php endif; ?> value="bagian_kesehatan">Bagian Kesehatan</option>
                      </select>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <button type="submit" class="btn btn-success">
                      Edit
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
