<?php

namespace App\Controllers\Gudang;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\KasirModel;
use App\Models\CustomerModel;
use App\Models\ProdukModel;
use App\Models\PromoModel;

class GudangController extends BaseController
{
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
        return view('Gudang/Dashboard/Dashboard', $data);
    }

    public function produk()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Produk',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => 'active',
            'aktif4' => '',
            'aktif5' => '',
        ];
        return view('Gudang/Produk/Index', $data);
    }

    public function create_produk()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Produk',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => 'active',
            'aktif4' => '',
            'aktif5' => '',
        ];
        return view('Gudang/Produk/Create', $data);
    }

    function insert_produk()
    {
    }

    function detail_produk()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Produk',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => 'active',
            'aktif4' => '',
            'aktif5' => '',
        ];
        return view('Gudang/Produk/Detail', $data);
    }

    function update_produk()
    {
    }
}
