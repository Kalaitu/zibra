<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\KasirModel;
use App\Models\CustomerModel;
use App\Models\ProdukModel;
use App\Models\PromoModel;

class CustomerController extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
        ];
        return view('Zibra/Index', $data);
    }
    public function produk_detail()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
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
    public function product()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
        ];
        return view('Zibra/Product', $data);
    }
    public function contact()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
        ];
        return view('Zibra/Contact', $data);
    }
    public function promo()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Zibra',
        ];
        return view('Zibra/Promo', $data);
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
