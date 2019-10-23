<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Data Pembayaran</h4>
      </div>
      <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>nama</th>
                    <th>tanggal</th>
                    <th>jumlah</th>
                    <th>cek kesehatan</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pembayarans as $pembayaran): ?>
                    <tr>
                        <td><?= $pembayaran->nama?></td>
                        <td><?= $pembayaran->tanggal?></td>
                        <td><?= $pembayaran->jumlah?></td>
                        <td><?= $pembayaran->cek_kesehatan?></td>
                        <td>
                            <?php if ($pembayaran->cek_kesehatan == 'sudah'): ?>
                                <a class="btn btn-xs btn-info" href="../kesehatan/redirectdaftar/<?= $pembayaran->id_pembayaran ?>"><span class="glyphicon glyphicon-zoom-in"></span> detail kesehatan</a>
                            <?php else: ?>
                                <a class="btn btn-xs btn-danger" href="../kesehatan/redirectdaftar/<?= $pembayaran->id_pembayaran ?>"><span class="glyphicon glyphicon-plus"></span> kesehatan</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      </div>
      <div class="panel-footer">

      </div>
    </div>

</div>
