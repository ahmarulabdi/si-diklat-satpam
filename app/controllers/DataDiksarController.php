<?php

class DataDiksarController extends ControllerBase
{

    public function dataAction()
    {
        $data_diksar = DataDiksar::find();
        $this->view->data_diksar = $data_diksar;
        $arr_data_kesehatan = [];
        $arr_data_pembayaran = [];
        $arr_data_pendaftaran = [];
        foreach ($data_diksar as $value) {
            $data_kesehatan = Kesehatan::findFirstByIdKesehatan($value->id_kesehatan);
            $data_pembayaran = Pembayaran::findFirstByIdPembayaran($data_kesehatan->id_pembayaran);
            $data_pendaftaran = Pendaftaran::findFirstByIdPendaftaran($data_pembayaran->id_pendaftaran);
            array_push($arr_data_kesehatan,$data_kesehatan);
            array_push($arr_data_pembayaran,$data_pembayaran);
            array_push($arr_data_pendaftaran,$data_pendaftaran);
        }
        $this->view->arr_data_kesehatan = $arr_data_kesehatan;
        $this->view->arr_data_pembayaran = $arr_data_pembayaran;
        $this->view->arr_data_pendaftaran = $arr_data_pendaftaran;

    }
    public function daftarDiksarAction($id_kesehatan)
    {
        $this->view->id_kesehatan = $id_kesehatan;
        $this->view->sertifikats = Sertifikat::find();
    }
    public function daftarProsesAction()
    {
        $nilai = $this->request->getPost('nilai');
        $id_kesehatan = $this->request->getPost('id_kesehatan');
        $id_sertifikat = $this->request->getPost('id_sertifikat');
        $data_diksar = new DataDiksar();
        $data_diksar->nilai = $nilai;
        $data_diksar->id_kesehatan = $id_kesehatan;
        $data_diksar->id_sertifikat = $id_sertifikat;
        if ($nilai < 70) {
            $data_diksar->status = 'tidak_lulus';
        }else {
            $data_diksar->status = 'lulus';
        }
        if ($data_diksar->save()) {
            $kesehatan = Kesehatan::findFirstByIdKesehatan($id_kesehatan);
            $kesehatan->cek_data_diksar = 'sudah';
            $kesehatan->save();
            $this->response->redirect('data_diksar/data');
        }
    }

}
