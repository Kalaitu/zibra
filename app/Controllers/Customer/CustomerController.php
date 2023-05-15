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
}
