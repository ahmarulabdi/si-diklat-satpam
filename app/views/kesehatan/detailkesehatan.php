<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><a onclick="history.back(-1)" type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-arrow-left"></span>
  </a> Data kesehatan</h4>
        </div>
        <div class="panel-body">
            <style media="screen">
                th{
                    width: 20%
                }
            </style>
            <table class="table table-hover">
                <tr>
                    <th>Penyakit</th>
                    <td>: <?= $kesehatan->penyakit ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>: <?= $kesehatan->status ?></td>
                </tr>
                <tr>
                    <th>Tensi</th>
                    <td>: <?= $kesehatan->tensi ?></td>
                </tr>
            </table>
        </div>
        <div class="panel-footer">

        </div>
    </div>
</div>
