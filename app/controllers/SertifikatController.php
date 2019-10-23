<?php

class SertifikatController extends ControllerBase
{

    public function dataAction()
    {
        $this->view->sertifikats = Sertifikat::find();
    }
    public function tambahAction()
    {
    }
    public function prosesTambahAction()
    {
        $periode = $this->request->getPost('periode');
        $sertifikat = new Sertifikat();
        $sertifikat->periode = $periode;
        if ($sertifikat->save()) {
            $this->response->redirect('sertifikat/data');
        }
    }

}
