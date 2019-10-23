    <div class="panel panel-info">
        <div class="panel-heading">
            <h4>Pendaftaran Diklat Satpam</h4>
        </div>
        <div class="panel-body">
            <?php $this->flashSession->Output() ?>
            <div class="col-md-9">
                <form class="" action="daftardiksarproses" method="post">
                    <div class="form-group col-md-12">
                        <label for="">Nama :</label>
                        <input type="text" name="nama" class="form-control" id="" placeholder="Nama lengkap..." required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Alamat :</label>
                        <textarea type="text" name="alamat" class="form-control" id="" placeholder="Alamat lengkap..."></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="">Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir" class="form-control" id="" placeholder="Tempat lahir..." required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Umur :</label>
                        <input type="number" name="umur" class="form-control" id="" placeholder="Umur ..." required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Berat Badan :</label>
                        <input type="number" name="berat" class="form-control" id="" placeholder="Berat badan..." required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Tinggi Badan :</label>
                        <input type="number" name="tinggi" class="form-control" id="" placeholder="Tinggi badan..." required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Jenis Kelamin :</label>
                        <select class="form-control" name="jenis_kelamin">
                                <option value="L">laki-laki</option>
                                <option value="P">perempuan</option>
                            </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Agama :</label>
                        <select class="form-control" name="agama">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Riwayat Sekolah :</label>
                        <textarea type="text" name="riwayat_sekolah" class="form-control" id="" placeholder="Riwayat sekolah dari pendidikan dasar sampai terakhir..."></textarea>
                    </div>
                    <div class="btn-group col-md-12">
                        <button type="submit" class="btn btn-success">
                                daftar
                            </button>
                        <button type="reset" class="btn btn-danger">
                                reset
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 ">
                <form class="" action="hasilpencarian" method="post">
                        <div class="form-group">
                            <label for="">sudah mendaftar? cari disini</label>
                            <input type="number" class="form-control" name="id_pendaftaran" placeholder="Id pendaftaran... " required>
                        </div>
                        <button type="submit" class="btn btn-success pull-right"> <span class="glyphicon glyphicon-zoom-in"></span>
                            Pencarian
                        </button>
                </form>
            </div>
        </div>
        <div class="panel-footer">
        </div>
    </div>
<
