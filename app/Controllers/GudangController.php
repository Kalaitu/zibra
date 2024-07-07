<?php

namespace App\Controllers;

use App\Models\KaryawanModel;
use App\Models\ProdukModel;
use App\Models\UserModel;

class GudangController extends BaseController
{
    public function index()
    {
        $modelProduk = new ProdukModel();
        $modelKaryawanModel = new KaryawanModel();
        $data = [
            'halaman' => 'Produk',
            'aktif1' => 'active',
            'aktif2' => '',
            'dataproduk' => $modelProduk->getAllProduk(),
            'datakaryawan' => $modelKaryawanModel->getDetailKaryawan(session()->get('id_karyawan'))
        ];
        return view('Gudang/Produk/index', $data);
    }

    public function create()
    {
        $modelKaryawanModel = new KaryawanModel();
        $data = [
            'halaman' => 'Produk',
            'aktif1' => 'active',
            'aktif2' => '',
            'datakaryawan' => $modelKaryawanModel->getDetailKaryawan(session()->get('id_karyawan'))
        ];
        return view('Gudang/Produk/create', $data);
    }

    public function add()
    {
        $dataBerkas = $this->request->getFile('fotoproduk');
        $filename = $dataBerkas->getRandomName();
        $dataBerkas->move('produk/', $filename);
        $data = [
            'nama_produk' => $this->request->getPost('namaproduk'),
            'harga_produk' => $this->request->getPost('hargaproduk'),
            'deskripsi_produk' => $this->request->getPost('deskripsiproduk'),
            'statusproduk' => $this->request->getPost('statusproduk'),
            'foto_produk' => $filename
        ];
        $modelProduk = new ProdukModel();
        $modelProduk->insert($data);
        session()->setFlashdata('tambahproduk', 'tambah-berhasil');
        return redirect()->to(base_url('gudang'));
    }

    public function detail($id)
    {
        $modelKaryawanModel = new KaryawanModel();
        $modelProduk = new ProdukModel();
        $data = [
            'halaman' => 'Produk',
            'aktif1' => 'active',
            'aktif2' => '',
            'dataproduk' => $modelProduk->getDetailProduk($id),
            'datakaryawan' => $modelKaryawanModel->getDetailKaryawan(session()->get('id_karyawan'))
        ];
        return view('Gudang/Produk/detail', $data);
    }

    public function update()
    {
        $dataBerkas = $this->request->getFile('fotoproduk');
        if ($dataBerkas->getSize() == 0) {
            $data = [
                'nama_produk' => $this->request->getPost('namaproduk'),
                'harga_produk' => $this->request->getPost('hargaproduk'),
                'deskripsi_produk' => $this->request->getPost('deskripsiproduk'),
                'statusproduk' => $this->request->getPost('statusproduk')
            ];
        } else {
            $filename = $dataBerkas->getRandomName();
            $dataBerkas->move('produk/', $filename);
            $data = [
                'nama_produk' => $this->request->getPost('namaproduk'),
                'harga_produk' => $this->request->getPost('hargaproduk'),
                'deskripsi_produk' => $this->request->getPost('deskripsiproduk'),
                'statusproduk' => $this->request->getPost('statusproduk'),
                'foto_produk' => $filename
            ];
        }
        $modelProduk = new ProdukModel();
        $modelProduk->update($this->request->getPost('id_produk'), $data);
        session()->setFlashdata('updateproduk', 'update-berhasil');
        return redirect()->to(base_url('gudang'));
    }

    public function profile()
    {
        $modelKaryawan = new KaryawanModel();
        $data = [
            'halaman' => 'Profile',
            'aktif1' => '',
            'aktif2' => 'active',
            'datakaryawan' => $modelKaryawan->getDetailKaryawan(session()->get('id_karyawan'))
        ];
        return view('Gudang/Profile/index', $data);
    }

    public function updateProfile()
    {
        $modelKaryawan = new KaryawanModel();
        $modelUser = new UserModel();
        $dataBerkas = $this->request->getFile('foto_karyawan');
        if ($dataBerkas->getSize() == 0) {
            $data = [
                'nama_karyawan' => $this->request->getPost('nama_karyawan'),
                'nomor_telpon' => $this->request->getPost('nomor_telpon'),
                'alamat_karyawan' => $this->request->getPost('alamat_karyawan'),
            ];
        } else {
            $filename = $dataBerkas->getRandomName();
            $dataBerkas->move('karyawan/', $filename);
            $data = [
                'nama_karyawan' => $this->request->getPost('nama_karyawan'),
                'nomor_telpon' => $this->request->getPost('nomor_telpon'),
                'alamat_karyawan' => $this->request->getPost('alamat_karyawan'),
                'foto_karyawan' => $filename
            ];
        }
        $datauser = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        ];
        $modelKaryawan->update(session()->get('id_karyawan'), $data);
        $modelUser->update(session()->get('id_user'), $datauser);
        session()->setFlashdata('updatekaryawan', 'update-berhasil');
        return redirect()->to(base_url('gudang/profile'));
    }
}
