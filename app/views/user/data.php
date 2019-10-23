<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Data User</h3>
  </div>
  <div class="panel-body">
      <?php $this->flashSession->Output() ?>
      <a href="tambah" class="btn btn-primary">Tambah User</a>
      <table class="table table-hover">
          <thead>
              <tr>
                  <th>nama</th>
                  <th>nip</th>
                  <th>email</th>
                  <th>hak akses</th>
                  <th>aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($users as $user): ?>
                  <tr>
                      <td><?= $user->nama ?></td>
                      <td><?= $user->nip ?></td>
                      <td><?= $user->email ?></td>
                      <td><?= $user->hak_akses ?></td>
                      <td>
                          <a type="button" class="btn btn-success btn-sm" href="<?= $this->url->get('') ?>">
                            pegawai
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
