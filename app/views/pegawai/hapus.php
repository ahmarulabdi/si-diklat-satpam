<div class="panel panel-danger">
  <div class="panel-heading">
    <h3>Konfirmasi penghapusan</h3>
  </div>
  <div class="panel-body">
      <h4>Data pegawai dengan nip : <?= $user->nip ?>, atas nama <?= $pegawai->nama ?> akan dihapus dari sistem.
          Pegawai tidak bisa lagi menggunakan sistem</h4>
  </div>
  <div class="panel-footer">
      <form class="" action="../hapusproses" method="post">
          <input type="hidden" name="id_user" value="<?= $user->id_user ?>">
          <a href="../data" type="button" class="btn btn-default">
            kembali
        </a>
          <button type="submit" class="btn btn-danger">
              Hapus
          </button>
      </form>
  </div>
</div>
