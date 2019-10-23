<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected $ses_username = null;
    protected $ses_hak_akses = null;
    protected $ses_nama = null;
    public function initialize()
    {
        $this->ses_username = $this->session->get('ses_username');
        $this->ses_hak_akses = $this->session->get('ses_hak_akses');
        $this->ses_nama = $this->session->get('ses_nama');
        if ($this->ses_username == null) {
            // jika user belum login
            $this->response->redirect('auth/loginform');
        }
    }
}
