<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class CustomerController extends BaseController
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
    public function produk_detail()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
            'aktif1' => 'active',
            'aktif2' => '',
            'aktif3' => '',
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
        ];
        return view('Zibra/Profile', $data);
    }
}
