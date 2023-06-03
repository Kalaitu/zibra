<?php

namespace App\Controllers\Keuangan;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\KasirModel;
use App\Models\CustomerModel;
use App\Models\ProdukModel;
use App\Models\PromoModel;

class KeuanganController extends BaseController
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
        return view('Keuangan/Promo/Index', $data);
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
        return view('Keuangan/Produk/Index', $data);
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
        return view('Keuangan/Produk/Create', $data);
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
        return view('Keuangan/Produk/Detail', $data);
    }

    function update_produk()
    {
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
