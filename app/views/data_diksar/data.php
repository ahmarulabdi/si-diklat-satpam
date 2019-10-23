<div class="panel panel-default">
  <div class="panel-heading">
    <h4>Data Diksar</h4>
  </div>
  <div class="panel-body">
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
                  <th>Berat</th>
                  <th>Alamat</th>
                  <th>Riwayat Sekolah</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php $i = 0; ?>
              <?php foreach ($data_diksar as $value): ?>
                  <tr>
                      <td><?= $arr_data_pendaftaran[$i]->nama ?></td>
                      <td><?= $arr_data_pendaftaran[$i]->umur ?></td>
                      <td><?= $arr_data_pendaftaran[$i]->jenis_kelamin ?></td>
                      <td><?= $arr_data_pendaftaran[$i]->agama ?></td>
                      <td><?= $arr_data_pendaftaran[$i]->tempat_lahir ?></td>
                      <td><?= date('d-m-Y',strtotime($arr_data_pendaftaran[$i]->tanggal_lahir)) ?></td>
                      <td><?= $arr_data_pendaftaran[$i]->tinggi ?></td>
                      <td><?= $arr_data_pendaftaran[$i]->berat ?></td>
                      <td><?= $arr_data_pendaftaran[$i]->alamat ?></td>
                      <td><?= $arr_data_pendaftaran[$i]->riwayat_sekolah ?></td>
                      <td>
                          <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $data_diksar->id_diksar?>viewDetail">
                              <span class="glyphicon glyphicon-zoom-in"></span>
                          </button>
                          <button onclick="printContent('<?= $arr_data_pendaftaran[$i]->id_pendaftaran ?>p1')" class="btn btn-info glyphicon glyphicon-file">Sertifikat</button>
                      </td>
                  </tr>
                  <div class="modal fade" id="<?= $data_diksar->id_diksar ?>viewDetail" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">

                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4>Detail Data</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Data Pembayaran</h4>
                            <ul class="list-group list-unstyled">
                                <li class="list-group-item">
                                    <strong>Tanggal Pembayaran</strong>:
                                    <?php echo date('d F Y',strtotime($arr_data_pembayaran[$i]->tanggal  )) ?>
                                </li>
                                <li class="list-group-item">
                                    <strong>Jumlah</strong>:
                                    <?= $arr_data_pembayaran[$i]->jumlah ?>
                                </li>
                            </ul>
                            <h4>Data Kesehatan</h4>
                            <ul class="list-group list-unstyled">
                                <li class="list-group-item">
                                    <strong>Penyakit</strong>:
                                    <?= $arr_data_kesehatan[$i]->penyakit ?>
                                </li>
                                <li class="list-group-item">
                                    <strong>Status</strong>:
                                    <?= $arr_data_kesehatan[$i]->status ?>
                                </li>
                                <li class="list-group-item">
                                    <strong>Tensi</strong>:
                                    <?= $arr_data_kesehatan[$i]->tensi ?>
                                </li>
                            </ul>
                            <h4>Data Diksar</h4>
                            <ul class="list-group list-unstyled">
                                <li class="list-group-item">
                                    <strong>Nilai</strong>:
                                    <?= $value->nilai ?>
                                </li>
                                <li class="list-group-item">
                                    <strong>Status</strong>:
                                    <?= $value->status ?>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="<?= $arr_data_pendaftaran[$i]->id_pendaftaran ?>p1">
                      <div class="text text-center">
                          <img src="<?= $this->url->getStatic('public/images/cop.png') ?>" alt="" style="margin-bottom:20px">
                      </div>
                      <div class="" style="margin-right:120px">
                          <span class="pull-right"><?php echo Date('d M Y'); ?></span>
                      </div>
                      <div style="text-align:center; margin-top:20px">
                          <h1 class="text text-center" style="margin-top:20px;margin-bottom:40px">
                              <b>
                                  <i>Sertifikat Diklat Satpam</i><br>
                              </u>
                          </h1>
                          <div class="text text-center">
                              <i>sertifikat ini menyatakan bahwa</i>
                          </div>
                          <h2 class="text text-center" style="margin-top:5px">
                              <u><?= strtoupper($arr_data_pendaftaran[$i]->nama) ?></u>
                          </h2>
                          <div class="text text-center">
                              <?php
                                $sertifikat = Sertifikat::findFirstByIdSertifikat($value->id_sertifikat);
                               ?>
                              <i>telah lulus melakukan pendidikan pelatihan satpam di PT. Rajaperkasa Sakti periode <?= $sertifikat->periode ?> </i>
                          </div>
                      </div>
                      <div class="text text-center col-md-4 col-md-offset-4">
                          <div style="margin-top:40px;">
                              <u><b>
                                  <h4>Direktur Utama</h4>
                                  </b>
                              </u>
                          </div>
                          <div style="margin-top:80px;">
                              <u><b>
                                  <h4>Mardison</h4>
                              </b>
                          </u>
                          </div>
                      </div>
                  </div>
                  <script>
                  $(document).ready(function () {
                      $('#<?= $arr_data_pendaftaran[$i]->id_pendaftaran ?>p1').hide();
                  });
                      function printContent(el) {
                          var restorepage = document.body.innerHTML;
                          var printcontent = document.getElementById(el).innerHTML;
                          document.body.innerHTML = printcontent;
                          window.print();
                          document.body.innerHTML = restorepage;
                      }
                  </script>
                  <?php $i += 1; ?>
              <?php endforeach; ?>
          </tbody>
      </table>
  </div>
  <div class="panel-footer">

  </div>
</div>
