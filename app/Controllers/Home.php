<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct()
    {
        $this->user = new \App\Models\UserModel();
    }
    public function index()
    {
        return redirect()->to(base_url('zibra'));
    }
    public function login()
    {
        return view('sign-in');
    }
    public function proses_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $query = $this->user->login($username, $password);
        $data['user'] = $query->getRow();
        if ($data == NULL) {
            dd("KOSONG");
        } else {
            session()->setFlashdata('login-berhasil', 'login-berhasil');
            session()->set([
                'id_user' => $data['user']->id_user,
                'id_karyawan' => $data['user']->id_karyawan,
                'nama_karyawan' => $data['user']->nama_karyawan
            ]);
            if ($data['user']->role == "Manager") {
                dd("manager");
            } else if ($data['user']->role == "Kasir") {
                return redirect()->to(base_url('kasir'));
            } else if ($data['user']->role == "Staff Gudang") {
                return redirect()->to(base_url('gudang'));
            } else if ($data['user']->role == "Staff Keuangan") {
                dd("Keuangan");
            } else {
                dd('CUstomer');
            }
            dd("BERHASIL");
        }
        return view('sign-in');
    }
}
