<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4>Edit Data Kesehatan</h4>
        </div>
        <form class="" action="../editproses" method="post">
            <div class="panel-body">
                <div class="row">
                    <input type="hidden" class="form-control" name="id_kesehatan" value="<?= $kesehatan->id_kesehatan ?>">
                    <div class="form-group col-md-12">
                        <label for="penyakit">Penyakit</label>
                        <input type="text" class="form-control" name="penyakit" value="<?= $kesehatan->penyakit ?>">
                        <p class="help-block">Apabila tidak ada penyakit, maka boleh dikosongkan</p>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="penyakit">Status</label>
                        <select class="form-control" name="status">
                            <option <?php if ($kesehatan->status == 'pelatihan khusus'): ?>selected<?php endif; ?> value="pelatihan khusus">Pelatihan khusus</option>
                            <option <?php if ($kesehatan->status == 'pelatihan normal'): ?>selected<?php endif; ?> value="pelatihan normal">Pelatihan normal</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="penyakit">Tensi</label>
                        <input type="number" class="form-control" name="tensi" value="<?= $kesehatan->tensi ?>">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-success btn-sm">
                    Perbarui
                </button>
            </div>
        </form>
    </div>

</div>
