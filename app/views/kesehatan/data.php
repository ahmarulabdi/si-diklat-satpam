<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4>Data Kesehatan</h4>
      </div>
      <div class="panel-body">
          <?php $this->flashSession->Output() ?>
          <table class="table table-hover" id="example">
              <thead>
                  <tr>
                      <th>nama</th>
                      <th>Penyakit</th>
                      <th>Status</th>
                      <th>Tensi</th>
                      <th>Cek Data Diksar</th>
                      <?php if ($this->session->get('ses_hak_akses') == 'bagian_umum'): ?>
                      <th>Aksi</th>
                      <?php endif; ?>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($kesehatans as $kesehatan): ?>
                      <tr>
                          <td><?php
                              $pembayaran = Pembayaran::findFirstByIdPembayaran($kesehatan->id_pembayaran);
                              echo $pembayaran->nama;
                              ?>
                            </td>
                          <td><?= $kesehatan->penyakit ?></td>
                          <td><?= $kesehatan->status ?></td>
                          <td><?= $kesehatan->tensi ?></td>
                          <td><?= $kesehatan->cek_data_diksar ?></td>
                          <?php if ($this->session->get('ses_hak_akses') == 'bagian_umum'): ?>
                              <td>
                                      <a class="btn btn-primary btn-sm" href="edit/<?= $kesehatan->id_kesehatan ?>">
                                        <span class="glyphicon glyphicon-edit"></span>
                                      </a>
                                      <a class="btn btn-success btn-sm" href="<?= $this->url->get('data_diksar/daftardiksar/'.$kesehatan->id_kesehatan) ?>"><span class="glyphicon glyphicon-book"></span> diksar</a>
                              </td>
                      <?php endif; ?>
                      </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>
      <div class="panel-footer">

      </div>
    </div>

</div>
