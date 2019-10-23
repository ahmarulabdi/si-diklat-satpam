<?php

class KesehatanController extends ControllerBase
{

    public function dataAction()
    {
        $this->view->kesehatans = Kesehatan::find();
    }
    public function dataLulusDetailAction($id_kesehatan)
    {

    }
    public function editAction($id_kesehatan)
    {
        $this->view->kesehatan = Kesehatan::findFirstByIdKesehatan($id_kesehatan);
    }
    public function editProsesAction()
    {
        $id_kesehatan = $this->request->getPost('id_kesehatan');
        $penyakit = $this->request->getPost('penyakit');
        $status = $this->request->getPost('status');
        $tensi = $this->request->getPost('tensi');

        $kesehatan = Kesehatan::findFirstByIdKesehatan($id_kesehatan);
        $kesehatan->save(
            [
                'penyakit' => $penyakit  ,
                'status' => $status,
                'tensi' => $tensi,
            ]
        );
        if ($kesehatan->save()) {
            $this->flashSession->success('Data berhasil diperbarui');
            $this->response->redirect('kesehatan/data');
        }else{
            $this->flashSession->error('Data gagal diperbarui');
            $this->response->redirect('kesehatan/data');
        }

    }
    public function redirectDaftarAction($id_pembayaran)
    {
        $kesehatan = Kesehatan::findFirstByIdPembayaran($id_pembayaran);
        if ($kesehatan != null) {
            $this->response->redirect('kesehatan/detailkesehatan/'.$id_pembayaran);
        }else{
            $this->response->redirect('kesehatan/daftar/'.$id_pembayaran);
        }
    }
    public function daftarAction($id_pembayaran)
    {
        $this->view->pembayaran = Pembayaran::findFirstByIdPembayaran($id_pembayaran);
    }
    public function detailKesehatanAction($id_pembayaran)
    {
        $this->view->kesehatan = Kesehatan::findFirstByIdPembayaran($id_pembayaran);
    }
    public function prosesDaftarAction()
    {
        $id_pembayaran = $this->request->getPost('id_pembayaran');
        $penyakit = $this->request->getPost('penyakit');
        $status = $this->request->getPost('status');
        $tensi = $this->request->getPost('tensi');
        $kesehatan = new Kesehatan();
        $bool = $kesehatan->save(
            [
                'id_pembayaran' => $id_pembayaran,
                'penyakit' => $penyakit,
                'status' => $status,
                'tensi' => $tensi,
                'kesehatan' => $kesehatan
            ]
        );
        if ($bool == true) {
            $pembayaran = Pembayaran::findFirstByIdPembayaran($id_pembayaran);
            $pembayaran->cek_kesehatan = 'sudah';
            $pembayaran->save();
            $this->flashSession->success('data kesehatan berhasil di input');
            $this->response->redirect('kesehatan/data');
        }else{
            $this->flashSession->error('data kesehatan gagal di input');
            $this->response->redirect('kesehatan/daftar');
        }
    }
}
