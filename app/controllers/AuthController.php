<?php

class AuthController extends \Phalcon\Mvc\Controller
{
    public function initialize()
    {
        $this->ses_username = $this->session->get('ses_username');
        if ($this->ses_username != null){
            $this->response->redirect('');
        }
    }
    public function loginFormAction(){

    }
    public function loginProsesAction(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $password = md5($password);
        $user = User::findFirstByNip($username);
        $pegawai = Pegawai::findFirstByIdUser($user->id_user);


        if ($user->nip == $username && $user->password == $password){
            $this->session->set('ses_username',$user->nip);
            $this->session->set('ses_hak_akses',$user->hak_akses);
            $this->session->set('ses_nama',$pegawai->nama);

            if($this->session->get('ses_hak_akses') == 'administrator'){
				$this->response->redirect('pegawai/data');
			}else{
				$this->response->redirect('');
			}
        }else{
            $this->flashSession->warning('Login gagal, username dan password tidak ditemukan');
            $this->response->redirect('auth/loginform');
        }
    }
    public function logoutAction(){
        $this->session->destroy();
        $this->response->redirect('auth/loginform');
    }

    public function daftarDiksarAction()
    {

    }
    public function daftarDiksarProsesAction()
    {
         $umur = $this->request->getPost('umur');
         $nama = $this->request->getPost('nama');
         $jenis_kelamin = $this->request->getPost('jenis_kelamin');
         $agama = $this->request->getPost('agama');
         $tempat_lahir = $this->request->getPost('tempat_lahir');
         $tanggal_lahir = $this->request->getPost('tanggal_lahir');
         $tinggi = $this->request->getPost('tinggi');
         $alamat = $this->request->getPost('alamat');
         $riwayat_sekolah = $this->request->getPost('riwayat_sekolah');
         $berat = $this->request->getPost('berat');

         // $now = date_create();
         // $tanggal_lahir = date_create($tanggal_lahir);
         // $selisih = date_diff($now,$tanggal_lahir);
         // $umur = $selisih->y;

        $size = Pendaftaran::find();


        if (count($size) >= 1) {
            $cpendaftaran = Pendaftaran::findFirst(
                [
                    'order' => 'id_pendaftaran DESC'
                ]
            );
            $id_pendaftaran = $cpendaftaran->id_pendaftaran;
            $id_pendaftaran += 1;
        }else{
            $id_pendaftaran = 1;
        }

        $pendaftaran = new Pendaftaran();

        $pendaftaran->save(
            [
                'id_pendaftaran' => $id_pendaftaran,
                'nama' =>$nama,
                'umur' =>$umur,
                'jenis_kelamin' =>$jenis_kelamin,
                'agama' =>$agama,
                'tempat_lahir' =>$tempat_lahir,
                'tanggal_lahir' =>$tanggal_lahir,
                'tinggi' =>$tinggi,
                'alamat' =>$alamat,
                'riwayat_sekolah' =>$riwayat_sekolah,
                'berat' =>$berat,
                'status_bayar' => 'belum_bayar'
            ]
        );

        if ($pendaftaran->save()) {
            $this->flashSession->success('berhasil melakukan proses pendaftaran dengan Id Pendaftaran '.$id_pendaftaran.',
            silahkan cek data pendaftaran anda dengan memasukkan Id Pendaftaran. harap disimpan Id pendaftaran anda');
            $this->response->redirect('auth/daftardiksar');
        }
    }
    public function hasilPencarianAction()
    {
        $id_pendaftaran = $this->request->getPost('id_pendaftaran');
        $pendaftaran = Pendaftaran::findFirstByIdPendaftaran($id_pendaftaran);
        if ($pendaftaran == null) {
            $this->flashSession->warning('Data yang anda cari tidak di temukan');
            $this->response->redirect('auth/daftardiksar');
        }
        $this->view->pendaftaran = $pendaftaran;
        $pembayaran = Pembayaran::findFirstByIdPendaftaran($pendaftaran->id_pendaftaran);
        $this->view->pembayaran = $pembayaran;
        $kesehatan = Kesehatan::findFirstByIdPembayaran($pembayaran->id_pembayaran);
        $this->view->kesehatan = $kesehatan;
        $data_diksar = DataDiksar::findFirstByIdKesehatan($kesehatan->id_kesehatan);
        $this->view->data_diksar = $data_diksar;
    }


}
