<div class="panel panel-default">
  <div class="panel-heading">
    <h4>
        <a href="../data" type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-arrow-left"></span>
      </a>
         Detail</h4>
  </div>
  <div class="panel-body">
      <ul class="list-group list-unstyled">
          <li class="list-group-item">
              <strong>email :</strong>
              <p><?= $user->email ?></p>
          </li>
          <li class="list-group-item">
              <strong>nip :</strong>
              <p><?= $user->nip ?></p>
          </li>
          <li class="list-group-item">
              <strong>hak akses :</strong>
              <p><?= $user->hak_akses ?></p>
          </li>
      </ul>
  </div>
  <div class="panel-footer">

  </div>
</div>
