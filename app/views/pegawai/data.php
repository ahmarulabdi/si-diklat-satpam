<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Data Pegawai</h3>
  </div>
  <div class="panel-body">
      <?php $this->flashSession->Output() ?>
        <a type="button" class="btn btn-primary" href="tambah">
            Tambah Pegawai
        </a>
        <table class="table table-hover" id="example">
            <thead>
                <tr>
                    <th>nama</th>
                    <th>alamat</th>
                    <th>umur</th>
                    <th>jabatan</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pegawais as $pegawai): ?>
                    <tr>
                        <td><?= $pegawai->nama ?></td>
                        <td><?= $pegawai->alamat ?></td>
                        <td><?= $pegawai->umur ?></td>
                        <td><?= $pegawai->jabatan ?></td>
                        <td>

                            <a href="detail/<?= $pegawai->id_user ?>" type="button" class="btn btn-default btn-sm" >
                               <span class="glyphicon glyphicon-zoom-in"></span>
                           </a>
                           <a href="hapus/<?= $pegawai->id_user ?>" class="btn btn-danger btn-sm">
                               <span class="glyphicon glyphicon-trash"></span>
                           </a>
                           <a href="edit/<?= $pegawai->id_user ?>" class="btn btn-primary btn-sm">
                               <span class="glyphicon glyphicon-edit"></span>
                           </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
  </div>
  <div class="panel-footer">

  </div>
</div>
