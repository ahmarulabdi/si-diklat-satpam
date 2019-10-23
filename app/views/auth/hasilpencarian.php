<style media="screen">
    th {
        width: 40%
    }
</style>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>
                    <a class="btn btn-default" href="daftardiksar"><span class="glyphicon glyphicon-arrow-left"></span></a>
                     Hasil pencarian dengan Id Pendaftaran <?= $pendaftaran->id_pendaftaran ?>
                </h4>
        </div>
        <div class="panel-body">
            <div class="col-md-6">
                <h4>Data Pendaftaran</h4>
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>
                            nama
                        </th>
                        <td>:
                            <?= $pendaftaran->nama ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            alamat
                        </th>
                        <td>:
                            <?= $pendaftaran->alamat ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            tempat lahir
                        </th>
                        <td>:
                            <?= $pendaftaran->tempat_lahir ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            tanggal lahir
                        </th>
                        <td>:
                            <?= date('d-m-Y' ,strtotime($pendaftaran->tanggal_lahir)) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            agama
                        </th>
                        <td>:
                            <?= $pendaftaran->agama ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            jenis kelamin
                        </th>
                        <td>
                            :
                            <?php if($pendaftaran->jenis_kelamin == 'L'): ?> Laki-laki
                            <?php else: ?> Perempuan
                            <?php endif; ?>
                        </td>

                    </tr>
                    <tr>
                        <th>
                            umur
                        </th>
                        <td>:
                            <?= $pendaftaran->umur ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            berat
                        </th>
                        <td>:
                            <?= $pendaftaran->berat ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            tinggi
                        </th>
                        <td>:
                            <?= $pendaftaran->tinggi ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            riwayat sekolah
                        </th>
                        <td>:
                            <?= $pendaftaran->riwayat_sekolah ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            status bayar
                        </th>
                        <td>:
                            <?php if ($pendaftaran->status_bayar == 'belum_bayar'): ?> Belum bayar
                            <?php else: ?> sudah bayar
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <h4>Data Pembayaran</h4>
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>tanggal pembayaran</th>
                        <td>: 
                            <?= date('d-m-Y' ,strtotime($pembayaran->tanggal)) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>jumlah pembayaran</th>
                        <td>: <?= $pembayaran->jumlah ?></td>
                    </tr>
                </table>
                <h4>Data Kesehatan</h4>
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>penyakit</th>
                        <td>: <?= $kesehatan->penyakit ?></td>
                    </tr>
                    <tr>
                        <th>status</th>
                        <td>: <?= $kesehatan->status ?></td>
                    </tr>
                    <tr>
                        <th>tensi</th>
                        <td>: <?= $kesehatan->tensi ?></td>
                    </tr>
                </table>
                <h4>Data Diksar</h4>
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>nilai</th>
                        <td>: <?= $data_diksar->nilai ?></td>
                    </tr>
                    <tr>
                        <th>status</th>
                        <td>: <?= $data_diksar->status ?></td>
                    </tr>
                </table>
            </div>
            <div id="p1">
                <img src="<?= $this->url->getStatic('public/images/cop.png') ?>" alt="" style="margin-bottom:20px">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th colspan="2"><h4>Data Pendaftaran</h4></th>
                    </tr>
                    <tr>
                        <th>
                            nama
                        </th>
                        <td>
                            <?= $pendaftaran->nama ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            alamat
                        </th>
                        <td>
                            <?= $pendaftaran->alamat ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            tempat lahir
                        </th>
                        <td>
                            <?= $pendaftaran->tempat_lahir ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            tanggal lahir
                        </th>
                        <td>
                            <?= $pendaftaran->tanggal_lahir ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            agama
                        </th>
                        <td>
                            <?= $pendaftaran->agama ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            jenis kelamin
                        </th>
                        <td>
                            :
                            <?php if($pendaftaran->jenis_kelamin == 'L'): ?> Laki-laki
                            <?php else: ?> Perempuan
                            <?php endif; ?>
                        </td>

                    </tr>
                    <tr>
                        <th>
                            umur
                        </th>
                        <td>
                            <?= $pendaftaran->umur ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            berat
                        </th>
                        <td>
                            <?= $pendaftaran->berat ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            tinggi
                        </th>
                        <td>
                            <?= $pendaftaran->tinggi ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            riwayat sekolah
                        </th>
                        <td>
                            <?= $pendaftaran->riwayat_sekolah ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            status bayar
                        </th>
                        <td>
                            <?php if ($pendaftaran->status_bayar == 'belum_bayar'): ?> Belum bayar
                            <?php else: ?> sudah bayar
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2"><h4>Data Pembayaran</h4></th>
                    </tr>
                    <tr>
                        <th>tanggal pembayaran</th>
                        <td> <?= $pembayaran->tanggal ?></td>
                    </tr>
                    <tr>
                        <th>jumlah pembayaran</th>
                        <td> <?= $pembayaran->jumlah ?></td>
                    </tr>
                    <tr>
                        <th colspan="2"><h4>Data Kesehatan</h4></th>
                    </tr>
                    <tr>
                        <th>penyakit</th>
                        <td> <?= $kesehatan->penyakit ?></td>
                    </tr>
                    <tr>
                        <th>status</th>
                        <td> <?= $kesehatan->status ?></td>
                    </tr>
                    <tr>
                        <th>tensi</th>
                        <td> <?= $kesehatan->tensi ?></td>
                    </tr>
                    <tr>
                        <th colspan="2"><h4>Data Diksar</h4></th>
                    </tr>
                    <tr>
                        <th>nilai</th>
                        <td> <?= $data_diksar->nilai ?></td>
                    </tr>
                    <tr>
                        <th>status</th>
                        <td> <?= $data_diksar->status ?></td>
                    </tr>
                </table>
            </div>
            <div id="p2">
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
                        <u><?= strtoupper($pendaftaran->nama) ?></u>
                    </h2>
                    <div class="text text-center">
                        <i>telah lulus melakukan pendidikan pelatihan satpam di PT. Rajaperkasa Sakti</i>
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
        </div>
        <div class="panel-footer">

        </div>
    </div>
<button onclick="printContent('p1')" class="btn btn-success  btn-block glyphicon glyphicon-print">Data</button>
<script>
    $('#p1').hide();
    $('#p2').hide();
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>
