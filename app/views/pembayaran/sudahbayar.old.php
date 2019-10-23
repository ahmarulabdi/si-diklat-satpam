<div class="panel panel-default">
  <div class="panel-heading">
    <h4>Data Calon Diksar Sudah Bayar</h4>
  </div>
  <div class="panel-body">
      <?php $this->flashSession->Output() ?>
      <table class="table table-hover" id="example">
          <thead>
              <tr>
                  <th>Nama</th>
                  <th>Umur</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Tinggi</th>
                  <th>Alamat</th>
                  <th>Riwayat Sekolah</th>
                  <th>Berat</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($pendaftarans as $pendaftaran): ?>
                  <tr>
                      <td><?= $pendaftaran->nama ?></td>
                      <td><?= $pendaftaran->umur ?></td>
                      <td>
                            <?php if($pendaftaran->jenis_kelamin == 'L'): ?>
                                Laki-laki
                            <?php else: ?>
                                Perempuan
                            <?php endif; ?>
                      </td>
                      <td><?= $pendaftaran->agama ?></td>
                      <td><?= $pendaftaran->tempat_lahir ?></td>
                      <td><?= $pendaftaran->tanggal_lahir ?></td>
                      <td><?= $pendaftaran->tinggi ?></td>
                      <td><?= $pendaftaran->alamat ?></td>
                      <td><?= $pendaftaran->riwayat_sekolah ?></td>
                      <td><?= $pendaftaran->berat ?></td>
                      <td>
                          <a href="../pembayaran/detailbayar/<?= $pendaftaran->id_pendaftaran ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-zoom-in"></span></a>
                      </td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
  </div>
  <div class="panel-footer">

  </div>
</div>
