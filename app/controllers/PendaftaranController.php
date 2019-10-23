<?php

class PendaftaranController extends ControllerBase
{

    public function dataAction()
    {
        $this->view->pendaftarans = Pendaftaran::find();
    }

}
