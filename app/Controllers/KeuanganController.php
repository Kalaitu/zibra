<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\KaryawanModel;
use App\Models\PemesananModel;
use App\Models\PembayaranModel;
use App\Models\ProdukModel;
use App\Models\PromoModel;

class KeuanganController extends BaseController
{
    public function index()
    {
        $modelPromo = new PromoModel();
        $data = [
            'halaman' => 'Promo',
            'aktif1' => 'active',
            'aktif2' => '',
            'datapromo' => $modelPromo->findAll()
        ];
        return view('Keuangan/Promo/index', $data);
    }

    public function detail($id)
    {
        $modelPromo = new PromoModel();
        $data = [
            'halaman' => 'Promo',
            'aktif1' => 'active',
            'aktif2' => '',
            'datapromo' => $modelPromo->find($id)
        ];
        return view('Keuangan/Promo/detail', $data);
    }

    public function update()
    {
        $modelPromo = new PromoModel();
        $data = [
            'nama_promo' => $this->request->getPost('nama_promo'),
            'poin' => $this->request->getPost('poin'),
            'diskon' => $this->request->getPost('diskon'),
        ];
        $modelPromo->update($this->request->getPost('id_promo'), $data);
        return redirect()->to(base_url('keuangan/promo'));
    }
    
    public function transaksi()
    {
        $modelPembayaran = new PembayaranModel();
        $data = [
            'halaman' => 'Transaksi',
            'aktif1' => '',
            'aktif2' => 'active',
            'datatransaksi' => $modelPembayaran->findAll()
        ];
        return view('Keuangan/Transaksi/index', $data);
    }

    public function detailTransaksi($id)
    {
        $modelPemesanan = new PemesananModel();
        $data = [
            'halaman' => 'Transaksi',
            'aktif1' => '',
            'aktif2' => 'active',
            'datatransaksi' => $modelPemesanan->getProdukByKodePemesanann($id)
        ];
        return view('Keuangan/Transaksi/detail', $data);
    }
}
