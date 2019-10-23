<?php

class UserController extends ControllerBase
{

    public function dataAction()
    {
        $user = User::find(
            [
                // 'conditions' => 'hak_akses like "administrator"'
            ]
        );
        $this->view->users = $user;
    }
    public function tambahAction()
    {
        # code...
    }
    public function tambahProsesAction()
    {
        $nama  = $this->request->getPost('nama');
        $nip  = $this->request->getPost('nip');
        $password  = $this->request->getPost('password');
        $konfirmasi_password  = $this->request->getPost('konfirmasi_password');
        $email  = $this->request->getPost('email');
        $hak_akses  = $this->request->getPost('hak_akses');

        if ($password != $konfirmasi_password) {
            $this->flashSession->error('password dan konfirmasi password tidak sesuai');
            $this->response->redirect('user/tambah');
        }else{
            $user = new User();
            $cuser = User::find();
            $cuser = count($cuser);
            $cuser+= 1;
            $user->save(
                [
                    'id_user' => $cuser,
                    'nama' => $nama,
                    'email' => $email,
                    'nip' => $nip,
                    'password' => md5($password),
                    'hak_akses' => $hak_akses
                ]
            );
            var_dump($user->save());
            if ($user->save()) {
                $this->flashSession->success('User '.$nama.' berhasil disimpan');
                $this->response->redirect('user/data');
            }
        }
    }

}
