<?php

class PegawaiController extends ControllerBase
{

    public function dataAction()
    {
        $this->view->pegawais = Pegawai::find();

    }
    public function detailAction($id_user)
    {
        $this->view->user = User::findFirstByIdUser($id_user);
    }
    public function tambahAction($id_user)
    {

    }
    public function tambahProsesAction()
    {
        $nama  = $this->request->getPost('nama');
        $nip  = $this->request->getPost('nip');
        $alamat  = $this->request->getPost('alamat');
        $umur  = $this->request->getPost('umur');
        $password  = $this->request->getPost('password');
        $konfirmasi_password  = $this->request->getPost('konfirmasi_password');
        $email  = $this->request->getPost('email');
        $hak_akses  = $this->request->getPost('hak_akses');

        if ($password != $konfirmasi_password) {
            $this->flashSession->error('password dan konfirmasi password tidak sesuai');
            $this->response->redirect('pegawai/tambah');
        }else{
            $user = new User();
            $cuser = User::find();
            $cuser = count($cuser);
            $cuser+= 1;
            $user->save(
                [
                    'id_user' => $cuser,
                    'nama' => $nama,
                    'nip' => $nip,
                    'password' => md5($password),
                    'email' => $email,
                    'hak_akses' => $hak_akses
                ]
            );
            $pegawai = new Pegawai();
            $pegawai->save(
                [
                    'id_user' => $cuser,
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'umur' => $umur,
                    'jabatan' => $hak_akses
                ]
            );
            $this->flashSession->success('pegawai '.$nama.' berhasil disimpan');
            $this->response->redirect('pegawai/data');
        }
    }
    public function editAction($id_user)
    {
        $this->view->pegawai = Pegawai::findFirstByIdUser($id_user);
        $this->view->user = User::findFirstByIdUser($id_user);
    }
    public function editProsesAction()
    {
        $id_user  = $this->request->getPost('id_user');
        $nama  = $this->request->getPost('nama');
        $nip  = $this->request->getPost('nip');
        $alamat  = $this->request->getPost('alamat');
        $umur  = $this->request->getPost('umur');
        $password  = $this->request->getPost('password');
        $konfirmasi_password  = $this->request->getPost('konfirmasi_password');
        $email  = $this->request->getPost('email');
        $hak_akses  = $this->request->getPost('hak_akses');

        $pegawai = Pegawai::findFirstByIdUser($id_user);
        $user = User::findFirstByIdUser($id_user);

        // if ($password != $konfirmasi_password) {
        //     $this->flashSession->error('password dan konfirmasi password tidak sesuai');
        //     $this->response->redirect('pegawai/tambah');
        // }else{
            $user->save(
                [
                    'nama' => $nama,
                    'nip' => $nip,
                    'password' => md5($password),
                    'email' => $email,
                    'hak_akses' => $hak_akses
                ]
            );
            $pegawai->save(
                [
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'umur' => $umur,
                    'jabatan' => $hak_akses
                ]
            );
            $this->flashSession->success('data pegawai berhasil di rubah');
            $this->response->redirect('pegawai/data');
        // }
    }
    public function hapusAction($id_user)
    {
        $this->view->user = User::findFirstByIdUser($id_user);
        $this->view->pegawai = Pegawai::findFirstByIdUser($id_user);
    }
    public function hapusProsesAction()
    {
        $id_user = $this->request->getPost('id_user');
        $pegawai = Pegawai::findFirstByIdUser($id_user);
        $user = User::findFirstByIdUser($id_user);
        $nip = $user->nip;
        if ($pegawai->delete()) {
            $user->delete();
            $this->flashSession->success('data pegawai dengan nip '.$user->nip.' berhasil di hapus');
            $this->response->redirect('pegawai/data');
        }
    }


}
