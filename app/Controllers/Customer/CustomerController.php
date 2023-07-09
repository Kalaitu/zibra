<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    function __construct()
    {
        $this->promo = new \App\Models\PromoModel();
        $this->produk = new \App\Models\ProdukModel();
        $this->pemesanan = new \App\Models\PemesananModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
            'aktif1' => 'active',
            'aktif2' => '',
            'aktif3' => '',
        ];
        $query = $this->produk->sudahSetHargaNewArival();
        $data['produknewarival'] = $query->getResult();
        $query = $this->produk->sudahSetHargaHotSales();
        $data['produkhotsales'] = $query->getResult();
        return view('Zibra/Index', $data);
    }
    public function product()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
        ];
        $query = $this->produk->sudahSetHarga();
        $data['produk'] = $query->getResult();
        return view('Zibra/Product', $data);
    }
    public function produk_detail($id)
    {
        $query = $this->produk->getProdukById($id);
        $data['produk'] = $query->getResult();
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'produk' => $data['produk']
        ];
        return view('Zibra/DetailProduk', $data);
    }
    public function checkout()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
        ];
        return view('Zibra/Checkout', $data);
    }
    public function cart()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
        ];
        return view('Zibra/Cart', $data);
    }
    public function contact()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => 'active',
        ];
        return view('Zibra/Contact', $data);
    }
    public function profile()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
            'aktif1' => 'active',
            'aktif2' => '',
            'aktif3' => '',
        ];
        return view('Zibra/Profile', $data);
    }

    function tambahkeranjang()
    {
        $currentDate = date('Ymdhis');
        $currentDate2 = date('Y-m-d');
        $query = $this->pemesanan->cekKode(session()->get('id_user'));
        $data['kodepemsanan'] = $query->getResult();
        if ($data['kodepemsanan'] == null) {
            $kode = 'ORDER' . '' . session()->get('id_user') . '' . $currentDate;
        } else {
            dd("KODE BARU");
            $kode = $data['kodepemsanan']->kode_permintaan;
        }
        $query = $this->pemesanan->cekBarang(session()->get('id_user'), $this->request->getPost('id_produk'));
        $data['cekproduk'] = $query->getResult();
        if ($data['cekproduk'] == null) {
            $data = [
                'kode_pemesanan' => $kode,
                'id_user' => session()->get('id_user'),
                'id_produk' => $this->request->getPost('id_produk'),
                'tanggal_pemesanan' => $currentDate2,
                'status' => 'Keranjang',
                'qty' => $this->request->getPost('qty')
            ];
            $this->pemesanan->insert($data);
            dd("cobaliat");
            $permintaanModel->createPermintaan($data);
            $barangModel = new ModelBarang();
            $dataBarang = $barangModel->getBarang($this->request->getPost('id_barang'));
            $stok = $dataBarang[0]->stok - $this->request->getPost('qty');
            $data2 = [
                'stok' => $stok
            ];
            $barangModel->update($this->request->getPost('id_barang'), $data2);
        } else {
            $qty = $cekbarang[0]->qty + $this->request->getPost('qty');
            $data = [
                'kode_permintaan' => $kode,
                'id_user' => session()->get('id_user'),
                'id_barang' => $this->request->getPost('id_barang'),
                'tanggal_permintaan' => $currentDate2,
                'status' => 'keranjang',
                'qty' => $qty
            ];
            $permintaanModel->update($cekbarang[0]->id_permintaan, $data);
            $barangModel = new ModelBarang();
            $dataBarang = $barangModel->getBarang($this->request->getPost('id_barang'));
            $stok = $dataBarang[0]->stok - $this->request->getPost('qty');
            $data2 = [
                'stok' => $stok
            ];
            $barangModel->update($this->request->getPost('id_barang'), $data2);
        }
        return redirect()->to('mitra/catalog')->with('success-kernjang', 'Data Keranjang Berhasi Ditambahkan');
    }
}
