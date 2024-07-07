<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\KaryawanModel;


class Home extends BaseController
{
    public function index()
    {
        return redirect()->to(base_url('zibra'));
    }
    public function login()
    {
        return view('sign-in');
    }
    public function loginproses()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $userModel = new UserModel();
        $customerModel = new CustomerModel();
        $karyawanModel = new KaryawanModel();
        $data = $userModel->login($username, $password);
        if (empty($data)) {
            session()->setFlashdata('login-gagal', 'login-gagal');
        } else {
            if ($data->role == "Manager") {
                session()->set([
                    'id_user' => 1,
                    'nama' => "Manager",
                    'statusmanager' => true,
                    'satuslogin' => 'login'
                ]);
                session()->setFlashdata('login-manager', 'login-berhasil');
            } else if ($data->role == "Kasir") {
                $datakaryawan = $karyawanModel->getByIdUser($data->id_user);
                session()->set([
                    'id_user' => $datakaryawan->id_user,
                    'id_karyawan' => $datakaryawan->id_karyawan,
                    'nama' => $datakaryawan->nama_karyawan,
                    'statuskaryawan' => true,
                    'satuslogin' => 'login'
                ]);
                session()->setFlashdata('login-kasir', 'login-berhasil');
            } else if ($data->role == "Staff Gudang") {
                $datakaryawan = $karyawanModel->getByIdUser($data->id_user);
                session()->set([
                    'id_user' => $datakaryawan->id_user,
                    'id_karyawan' => $datakaryawan->id_karyawan,
                    'nama' => $datakaryawan->nama_karyawan,
                    'statuskaryawan' => true,
                    'satuslogin' => 'login'
                ]);
                session()->setFlashdata('login-gudang', 'login-berhasil');
            } else if ($data->role == "Staff Keuangan") {
                $datakaryawan = $karyawanModel->getByIdUser($data->id_user);
                session()->set([
                    'id_user' => $datakaryawan->id_user,
                    'id_karyawan' => $datakaryawan->id_karyawan,
                    'nama' => $datakaryawan->nama_karyawan,
                    'statuskaryawan' => true,
                    'satuslogin' => 'login'
                ]);
                session()->setFlashdata('login-keuangan', 'login-berhasil');
            } else {
                $datacustomer = $customerModel->getByIdUser($data->id_user);
                session()->set([
                    'id_user' => $data->id_user,
                    'id_customer' => $datacustomer->id_customer,
                    'nama' => $datacustomer->nama_customer,
                    'statuscustomer' => true,
                    'satuslogin' => 'login',
                    'ref' => $datacustomer->kode_reveral,
                ]);
                session()->setFlashdata('login-customer', 'login-berhasil');
            }
        }
        return redirect()->to(base_url('login'));
    }
    public function register()
    {
        return view('sign-up');
    }

    public function cekreferal()
    {
        $refModel = new CustomerModel();
        return $this->response->setJSON($refModel->findAll());
    }

    public function registerproses()
    {
        $userModel = new UserModel();
        $customerModel = new CustomerModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $namalengkap = $this->request->getPost('namalengkap');
        $ref = $this->request->getPost('ref');
        $validationRules = [
            'username' => 'is_unique[user.username]',
        ];
        $validationMessages = [
            'username' => [
                'is_unique' => 'Username sudah digunakan.'
            ],
        ];
        $this->validate($validationRules, $validationMessages);
        if (!$this->validator->withRequest($this->request)->run()) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->with('register-gagal', 'Registrasi Gagal');
        }
        $data = [
            'username' => $username,
            'password' => $password,
            'role' => "Customer",
        ];
        $userModel->insert($data);
        $lastUser = $userModel->getLastUser();
        $kode = 'zibraidcustomer' . $lastUser['id_user'];
        $data = [
            'id_user' => $lastUser['id_user'],
            'nama_customer' => $namalengkap,
            'kode_reveral' => $kode,
            'nomor_telepon' => '000000000000',
            'alamat_customer' => '',
            'foto_customer' => 'dummyfoto.jpg',
            'kode_referal_register' => $ref
        ];
        $customerModel->insert($data);
        $bahan = $customerModel->getPoint($ref);
        $poinbaru = $bahan->point + 10;
        $customerModel->updatePointsByReferralCode($ref, $poinbaru);
        session()->setFlashdata('register-berhasil', 'register-berhasil');
        return redirect()->to(base_url('register'));
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url(''));
    }
}
