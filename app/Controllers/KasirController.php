<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\KaryawanModel;
use App\Models\PemesananModel;
use App\Models\ProdukModel;


class KasirController extends BaseController
{
    public function index()
    {
        $modelKaryawan = new KaryawanModel();
        $modelKaryawanModel = new KaryawanModel();
        $data = [
            'halaman' => 'Dashboard',
            'aktif1' => 'active',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
            'datakaryawan' => $modelKaryawanModel->getDetailKaryawan(session()->get('id_karyawan'))
        ];
        return view('Kasir/Dashboard/index', $data);
    }

    public function produk()
    {
        $modelProduk = new ProdukModel();
        $modelKaryawanModel = new KaryawanModel();
        $data = [
            'halaman' => 'Produk',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
            'dataproduk' => $modelProduk->getAllProduk(),
            'datakaryawan' => $modelKaryawanModel->getDetailKaryawan(session()->get('id_karyawan'))
        ];
        return view('Kasir/Produk/index', $data);
    }
    
    public function transaksi()
    {
        $modelPemesanan = new PemesananModel();
        $modelKaryawanModel = new KaryawanModel();
        $data = [
            'halaman' => 'Transaksi',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => 'active',
            'datatransaksi' => $modelPemesanan->getProdukByKodePemesanan2(),
            'datakaryawan' => $modelKaryawanModel->getDetailKaryawan(session()->get('id_karyawan'))
        ];

        return view('Kasir/Transaksi/index', $data);
    }

    public function detailTransaksi($id)
    {
        $modelPemesanan = new PemesananModel();
        $modelKaryawanModel = new KaryawanModel();
        $data = [
            'halaman' => 'Transaksi',
            'aktif2' => '',
            'aktif3' => 'active',
            'datatransaksi' => $modelPemesanan->getProdukByKodePemesanann($id),
            'datakaryawan' => $modelKaryawanModel->getDetailKaryawan(session()->get('id_karyawan'))
        ];
        return view('Kasir/Transaksi/detail', $data);
    }

    public function konfirmasi()
    {
        $modelPemesanan = new PemesananModel();
        $data = [
            'status' => 'Selesai'
        ];
        $modelPemesanan->updateByKodePesanan($this->request->getPost('kode_pemesanan'), $data);
        session()->setFlashdata('tambahkaryawan', 'tambah-berhasil');
        return redirect()->to(base_url('kasir/transaksi'));
    }
}
