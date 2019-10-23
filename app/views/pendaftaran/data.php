<div class="panel panel-default">
  <div class="panel-heading">
    <h4>Data Pendaftaran</h4>
  </div>
  <div class="panel-body">
      <?php $this->flashSession->Output() ?>
      <table class="table table-hover table-bordered" id="example">
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
                  <th>Status bayar</th>
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
                      <td><?= date('d-m-Y',strtotime($pendaftaran->tanggal_lahir)) ?></td>
                      <td><?= $pendaftaran->tinggi ?></td>
                      <td><?= $pendaftaran->alamat ?></td>
                      <td><?= $pendaftaran->riwayat_sekolah ?></td>
                      <td><?= $pendaftaran->berat ?></td>
                      <td>
                          <?php if ($pendaftaran->status_bayar == 'belum_bayar'): ?>
                              <span class="text text-warning">Belum bayar</span>
                          <?php else: ?>
                              <span  class="text text-success">sudah bayar</span>
                          <?php endif; ?>
                      </td>
                      <td>
                          <?php if ($pendaftaran->status_bayar == 'belum_bayar'): ?>
                              <a href="../pembayaran/bayar/<?= $pendaftaran->id_pendaftaran ?>" class="btn btn-info btn-sm"> bayar</a>
                          <?php else: ?>
                              <a href="../pembayaran/detailbayar/<?= $pendaftaran->id_pendaftaran ?>" class="btn btn-success btn-sm">detail</a>
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
