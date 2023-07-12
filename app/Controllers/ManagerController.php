<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\KaryawanModel;
use App\Models\ProdukModel;


class ManagerController extends BaseController
{
    public function index()
    {
        $modelKaryawan = new KaryawanModel();
        $data = [
            'halaman' => 'Dashboard',
            'aktif1' => 'active',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
        ];
        return view('Manager/Dashboard/index', $data);
    }

    public function karyawan()
    {
        $modelKaryawan = new KaryawanModel();
        $data = [
            'halaman' => 'Karyawan',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
            'datakaryawan' => $modelKaryawan->getAllKaryawan()
        ];
        return view('Manager/Karyawan/index', $data);
    }

    public function create()
    {
        $data = [
            'halaman' => 'Karyawan',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => ''
        ];
        return view('Manager/Karyawan/create', $data);
    }

    public function add()
    {
        $modelUser = new UserModel();
        $modelKaryawan = new KaryawanModel();
        $dataBerkas = $this->request->getFile('foto_karyawan');
        $filename = $dataBerkas->getRandomName();
        $dataBerkas->move('karyawan/', $filename);
        $datauser = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('role')
        ];
        $modelUser->insert($datauser);
        $dataiduser = $modelUser->getLastUser();
        $datakaryawan = [
            'id_user' => $dataiduser['id_user'],
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
            'nomor_telpon' => $this->request->getPost('nomor_telpon'),
            'alamat_karyawan' => $this->request->getPost('alamat_karyawan'),
            'foto_karyawan' => $filename
        ];
        $modelKaryawan->insert($datakaryawan);
        session()->setFlashdata('tambahkaryawan', 'tambah-berhasil');
        return redirect()->to(base_url('manager/karyawan'));
    }

    public function hapusKaryawan($id)
    {
        $modelKaryawan = new KaryawanModel();
        $modelUser = new UserModel();
        $datakaryawan = $modelKaryawan->getDetailKaryawan($id);
        $modelKaryawan->delete($datakaryawan->id_karyawan);
        $modelUser->delete($datakaryawan->id_user);
        return redirect()->to(base_url('manager/karyawan'));
    }

    public function customer()
    {
        $modelCustomer = new CustomerModel();
        $data = [
            'halaman' => 'Customer',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => 'active',
            'aktif4' => '',
            'aktif5' => '',
            'datacustomer' => $modelCustomer->getAllCustomer()
        ];
        return view('Manager/Customer/index', $data);
    }

    public function produk()
    {
        $modelProduk = new ProdukModel();
        $data = [
            'halaman' => 'Produk',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => 'active',
            'aktif5' => '',
            'dataproduk' => $modelProduk->getAllProduk()
        ];
        return view('Manager/Produk/index', $data);
    }
}
