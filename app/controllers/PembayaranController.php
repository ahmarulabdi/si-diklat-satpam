<?php

class PembayaranController extends ControllerBase
{
    public function bayarAction($id_pendaftaran)
    {
        $this->view->pendaftaran = Pendaftaran::findFirstByIdPendaftaran($id_pendaftaran);
    }
    public function prosesBayarAction()
    {
        $id_pendaftaran = $this->request->getPost('id_pendaftaran');
        $nama = $this->request->getPost('nama');
        $tanggal = $this->request->getPost('tanggal');
        $keterangan = $this->request->getPost('keterangan');
        $jumlah = $this->request->getPost('jumlah');

        $id_pembayaran = Pembayaran::find();
        if ($id_pembayaran != null) {
            $cpembayaran = Pembayaran::findFirst(
                [
                    'order' => 'id_pembayaran DESC'
                ]
            );
            $id_pembayaran = $cpembayaran->id_pembayaran + 1;
        }else {
            $id_pembayaran = 1;
        }
        $pembayaran = new Pembayaran();
        $bool = $pembayaran->save(
            [
                'id_pembayaran' => $id_pembayaran,
                'id_pendaftaran' => $id_pendaftaran,
                'nama' => $nama,
                'tanggal' => $tanggal,
                'jumlah' => $jumlah
            ]
        );
        if ($bool == true ) {
            $pendaftaran = Pendaftaran::findFirstByIdPendaftaran($id_pendaftaran);
            $pendaftaran->status_bayar = 'sudah_bayar';
            $pendaftaran->save();
            $this->flashSession->success('data pembayaran berhasil');
            $this->response->redirect('pendaftaran/data');
        }

    }
    public function detailBayarAction($id_pendaftaran)
    {
        $this->view->pembayaran = Pembayaran::findFirstByIdPendaftaran($id_pendaftaran);
    }
    public function dataAction()
    {
        $this->view->pembayarans = Pembayaran::find(
            [
                'order' => 'id_pembayaran DESC'
            ]
        );
    }

}
