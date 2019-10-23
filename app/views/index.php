<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SI Diklat Satpam</title>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= $this->url->get('js/jquery-3.2.1.min.js') ?>"></script>
    <!-- Bootstrap -->
    <link href="<?= $this->url->get('bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?= $this->url->get('css/styles.css')?>" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= $this->url->get('js/jquery.js') ?>"></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>" />
</head>

<body>

        <nav class="navbar navbar-default navbar-fixtop" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <a class="navbar-brand" href="<?= $this->url->get('index/index') ?>">SI Diklat Satpam</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php if ($this->session->ses_username != null ): ?>
                    <div class="collapse navbar-collapse" id="navbar ">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="<?= $this->url->get('index/index') ?>">Home</a></li>
                            <?php if ($this->session->ses_hak_akses == 'administrator'): ?>
                                <li><a href="<?= $this->url->get('pegawai/data') ?>">Data Pegawai</a></li>
                            <?php elseif ($this->session->ses_hak_akses == 'bagian_umum'): ?>
                                <li class=""><a href="<?= $this->url->get('pendaftaran/data') ?>"><i class="glyphicon glyphicon-home"></i> Data Pendaftaran</a></li>
                                <li class=""><a href="<?= $this->url->get('kesehatan/data') ?>"><i class="glyphicon glyphicon-plus"></i> Data Kesehatan</a></li>
                                <li class=""><a href="<?= $this->url->get('data_diksar/data') ?>"><i class="glyphicon glyphicon-user"></i> Data Diksar</a></li>
                                <li class=""><a href="<?= $this->url->get('sertifikat/data') ?>"><i class="glyphicon glyphicon-file"></i> Data Sertifikat</a></li>
                            <?php elseif ($this->session->ses_hak_akses == 'bagian_kesehatan'): ?>
                                <li class=""><a href="<?= $this->url->get('kesehatan/data') ?>"><i class="glyphicon glyphicon-plus"></i> Data Kesehatan</a></li>
                                <li class=""><a href="<?= $this->url->get('pembayaran/data') ?>"><i class="glyphicon glyphicon-ok"></i> Data Sudah Bayar</a></li>
                            <?php endif; ?>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $this->session->ses_username ?> <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                  <li><a>Wellcome <?= $this->session->get('ses_nama') ?></a></li>
                                  <li><a href="<?= $this->url->get('auth/logout') ?>">Logout</a></li>
                              </ul>
                            </li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="collapse navbar-collapse" id="navbar ">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= $this->url->get('auth/daftardiksar') ?>">Daftar diksar</a></li>
                            <li><a href="<?= $this->url->get('auth/loginform') ?>">Login</a></li>
                        </ul>
                    </div>
                <?php endif; ?>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $this->getContent(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery UI -->
    <script src="<?= $this->url->get('js/jquery-ui.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= $this->url->get('bootstrap/js/bootstrap.min.js') ?>"></script>

    <script src="<?= $this->url->get('vendors/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= $this->url->get('vendors/datatables/dataTables.bootstrap.js') ?>"></script>

    <script src="<?= $this->url->get('js/custom.js') ?>"></script>
    <script src="<?= $this->url->get('js/tables.js') ?>"></script>


     <!-- bootstrap-datetimepicker -->
    <link href="<?= $this->url->get('vendors/bootstrap-datetimepicker/datetimepicker.css') ?>" rel="stylesheet">
    <script src="<?= $this->url->get('vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js') ?>"></script>

</body>

</html>
