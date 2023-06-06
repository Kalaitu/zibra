<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct()
    {
        $this->user = new \App\Models\UserModel();
        $this->customer = new \App\Models\CustomerModel();
        $this->karyawan = new \App\Models\ModelKaryawan();
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
        if ($data['user'] == NULL) {
            session()->setFlashdata('login-gagal', 'login-gagal');
            return redirect()->to(base_url('login'));
        } else {
            if ($data['user']->role == "Customer") {
                $query = $this->customer->seleksiIdUser($data['user']->id_user);
                $data['customer'] = $query->getRow();
                session()->set([
                    'id_user' => $data['customer']->id_user,
                    'id_customer' => $data['customer']->id_customer,
                    'nama_customer' => $data['customer']->nama_customer
                ]);
                session()->setFlashdata('login-customer', 'login-berhasil');
            } else {
                $query = $this->karyawan->seleksiIdUser($data['user']->id_user);
                $data['karyawan'] = $query->getRow();
                session()->set([
                    'id_user' => $data['karyawan']->id_user,
                    'id_karyawan' => $data['karyawan']->id_karyawan,
                    'nama_karyawan' => $data['karyawan']->nama_karyawan
                ]);
                if ($data['user']->role == "Manager") {
                    session()->setFlashdata('login-manager', 'login-berhasil');
                } else if ($data['user']->role == "Kasir") {
                    session()->setFlashdata('login-kasir', 'login-berhasil');
                } else if ($data['user']->role == "Staff Gudang") {
                    session()->setFlashdata('login-gudang', 'login-berhasil');
                } else {
                    session()->setFlashdata('login-keuangan', 'login-berhasil');
                }
            }
            return redirect()->to(base_url('login'));
        }
        return view('sign-in');
    }
}
