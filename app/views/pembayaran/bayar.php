<div class="panel panel-success">
    <div class="panel-heading">
        <h4>Data Pembayaran</h4>
    </div>
    <form class="" action="../prosesbayar" method="post">
        <div class="panel-body">
            <div class="row">
                <input type="hidden" name="id_pendaftaran" value="<?= $pendaftaran->id_pendaftaran ?>">
                <input type="hidden" name="nama" value="<?= $pendaftaran->nama ?>">
                <div class="form-group col-md-4">
                    <label for="">tanggal</label>
                    <input type="date" class="form-control" id="" placeholder="Tanggal pembayaran..." name="tanggal">
                </div>
            </div>
            <div class="form-group">
                <label for="">Jumlah</label>
                <input type="number" class="form-control" id="" placeholder="Jumlah pembayaran..." name="jumlah">
            </div>
        </div>
        <div class="panel-footer">
            <button class="btn btn-success" type="submit" >
              submit
            </button>
            <button class="btn btn-danger" type="reset" >
              reset
            </button>
        </div>
    </form>
</div>
