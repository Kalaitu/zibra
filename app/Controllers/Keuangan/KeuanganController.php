<?php

namespace App\Controllers\Keuangan;

use App\Controllers\BaseController;

class KeuanganController extends BaseController
{
    function __construct()
    {
        $this->promo = new \App\Models\PromoModel();
        $this->produk = new \App\Models\ProdukModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Dashboard',
            'aktif1' => 'active',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => ''
        ];
        $data['promo'] = $this->promo->findAll();
        return view('Keuangan/Promo/Index', $data);
    }

    function detail_promo($id)
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Promo',
            'aktif1' => 'active',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => ''
        ];
        $data['promo'] = $this->promo->find($id);
        return view('Keuangan/Promo/Detail', $data);
    }

    function update_promo()
    {
        $dataBerkas = $this->request->getFile('foto');
        if ($dataBerkas->getSize() == 0) {
            $this->promo->update($this->request->getPost('id_promo'), [
                "nama_promo" => $this->request->getPost('nama_promo'),
                "deskripsi_promo" => $this->request->getPost('deskripsi_promo'),
                "poin" => $this->request->getPost('poin'),
                "diskon" => $this->request->getPost('diskon'),
            ]);
        } else {
            $data['fotolama'] = $this->promo->find($this->request->getPost('id_promo'));
            unlink("promo/" . $data['fotolama']['foto_promo']);
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('promo', $fileName);
            $this->promo->update($this->request->getPost('id_promo'), [
                "nama_promo" => $this->request->getPost('nama_promo'),
                "deskripsi_promo" => $this->request->getPost('deskripsi_promo'),
                "poin" => $this->request->getPost('poin'),
                "diskon" => $this->request->getPost('diskon'),
                "foto_promo" => $fileName
            ]);
        }
        return redirect()->to(base_url('keuangan'));
    }

    function produk()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Produk',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
        ];
        $data['produk'] = $this->produk->findAll();
        return view('Keuangan/Produk/Index', $data);
    }

    function detail_produk($id)
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Produk',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
        ];
        $data['produk'] = $this->produk->find($id);
        return view('Keuangan/Produk/Detail', $data);
    }

    function update_produk()
    {
        $this->produk->update($this->request->getPost('id_produk'), [
            "harga_produk" => $this->request->getPost('harga_produk'),
            "status" => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('keuangan/produk'));
    }

    function transaksi()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Transaksi',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => 'active',
        ];
        return view('Keuangan/Transaksi/Index', $data);
    }

    function detail_transaksi()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Transaksi',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => 'active',
        ];
        return view('Keuangan/Transaksi/Detail', $data);
    }
    function report()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Report',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => 'active',
        ];
        return view('Keuangan/Report/Index', $data);
    }

    function detail_report()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Report',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => 'active',
        ];
        return view('Keuangan/Report/Detail', $data);
    }
}
