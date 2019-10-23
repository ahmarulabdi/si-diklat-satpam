<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>
            <a class="btn btn-default" onclick="history.back(-1)"><span class="glyphicon glyphicon-arrow-left"></span></a>
            Detail Bayar
        </h4>
      </div>
      <div class="panel-body">
          <style media="screen">
              th{
                  width: 40%
              }
          </style>
          <table class="table">
              <tr>
                  <th>nama pembayar</th>
                  <td>: <?= $pembayaran->nama ?></td>
              </tr>
              <tr>
                  <th>tanggal pembayaran</th>
                  <td>: <?= date('d-m-Y',strtotime($pembayaran->tanggal)) ?></td>
              </tr>
              <tr>
                  <th>jumlah</th>
                  <td>: Rp. <?= $pembayaran->jumlah ?></td>
              </tr>
          </table>
      </div>
      <div class="panel-footer">

      </div>
    </div>

</div>
