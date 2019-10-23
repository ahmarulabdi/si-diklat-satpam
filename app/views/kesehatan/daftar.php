<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><a class="btn btn-default"  onclick="history.back(-1)"><span class="glyphicon glyphicon-arrow-left"></span></a>
                Isi Data Kesehatan</h4>
        </div>
        <form class="" action="../prosesdaftar" method="post">
            <div class="panel-body">
                <?php $this->flashSession->Output() ?>
                <input type="hidden" name="id_pembayaran" value="<?= $pembayaran->id_pembayaran ?>">
                <div class="form-group">
                    <label for="">Penyakit</label>
                    <input type="text" class="form-control" id="" placeholder="Penyakit yang di derita" name="penyakit">
                    <p class="help-block">Apabila tidak ada penyakit, maka boleh dikosongkan</p>
                </div>
                <div class="form-group ">
                    <label for="penyakit">Status</label>
                    <select class="form-control" name="status">
                        <option  value="pelatihan khusus">Pelatihan khusus</option>
                        <option  value="pelatihan normal">Pelatihan normal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tensi</label>
                    <input type="number" class="form-control" id="" placeholder="Tensi badan" name="tensi">
                </div>
            </div>
            <div class="panel-footer">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success btn-sm">
                        daftar kesehatan
                      </button>
                </div>
            </div>
        </form>
    </div>

</div>
