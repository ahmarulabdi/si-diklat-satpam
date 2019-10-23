<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Daftar Diksar</h4>
      </div>
      <form class="" action="../daftarproses" method="post">
          <div class="panel-body">
              <input type="hidden" name="id_kesehatan" value="<?= $id_kesehatan ?>">
              <div class="form-group">
                <label for="">Nilai</label>
                <input type="number" name="nilai" class="form-control" id="" placeholder="Nilai diksar...">
              </div>
              <div class="form-group">
                <label for="">Periode</label>
                <select class="form-control" name="id_sertifikat">
                    <?php foreach ($sertifikats as $sertifikat): ?>
                        <option value="<?= $sertifikat->id_sertifikat ?>"><?= $sertifikat->periode ?></option>
                    <?php endforeach; ?>
                </select>
              </div>
          </div>
          <div class="panel-footer">
              <button type="submit" class="btn btn-success">
                  Data diksar
              </button>
              <button type="reset" class="btn btn-danger">
                  Reset
              </button>
          </div>
      </form>
    </div>

</div>
