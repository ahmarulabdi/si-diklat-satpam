<div class="page-content">
    <div class="row">
	<br/><br/><br/><br/>
        <div class="col-md-6 col-md-offset-3">
            <div class="login-wrapper">
                <div class="box">
                    <div class="content-wrap">
                        <h4>
                            SISTEM INFORMASI
                        </h4>
                        <h4>
                            <strong>
                                <span class="text text-info">
                                    DIKLAT SATPAM
                                </span>
                            </strong>
                        </h4>
                        <?php $this->flashSession->Output(); ?>
                        <form action="loginproses" method="post">
                            <input class="form-control" type="text" placeholder="Nip..." name="username">
                            <input id="password" class="form-control" type="password" placeholder="Password..." name="password">

                            <div class="action">
                                <button class="btn btn-success signup" type="submit" >Login</button>
                                <button class="btn btn-danger signup" type="reset" >Reset</button>
                                <?= date("ymdhis") ?>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="already">
                </div>
            </div>
        </div>
    </div>
</div>
