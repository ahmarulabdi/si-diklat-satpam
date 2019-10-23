<div class="panel panel-default">
  <div class="panel-heading">
    <h4>Data sertifikat</h4>
  </div>
  <div class="panel-body">
      <?php $this->flashSession->Output() ?>
      <a href="tambah" class="btn btn-success">Tambah Sertikat</a>
      <table class="table table-hover" id="example">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Periode</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($sertifikats as $sertifikat): ?>
                  <tr>
                      <td><?= $sertifikat->id_sertifikat ?></td>
                      <td><?= $sertifikat->periode ?></td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
  </div>
  <div class="panel-footer">

  </div>
</div>
