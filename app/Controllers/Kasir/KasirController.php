<?php

namespace App\Controllers\Kasir;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\KasirModel;
use App\Models\CustomerModel;
use App\Models\ProdukModel;
use App\Models\PromoModel;

class KasirController extends BaseController
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
        return view('Kasir/Dashboard/Dashboard', $data);
    }

    // TODO : MENU KASIR




    // TODO : MENU PRODUK 
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
        return view('Kasir/Produk/Index', $data);
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
        return view('Kasir/Produk/Create', $data);
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
        return view('Kasir/Produk/Detail', $data);
    }

    function update_produk()
    {
    }

    // TODO : MENU PROMO
    public function promo()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Promo',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => 'active',
            'aktif5' => '',
        ];
        return view('Kasir/Promo/Index', $data);
    }

    public function create_promo()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Promo',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => 'active',
            'aktif5' => '',
        ];
        return view('Kasir/Promo/Create', $data);
    }

    function insert_promo()
    {
    }

    function detail_promo()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Promo',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => 'active',
            'aktif5' => '',
        ];
        return view('Kasir/Promo/Detail', $data);
    }

    function update_promo()
    {
    }

    // TODO : MENU TRANSAKSI
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
        return view('Kasir/Transaksi/Index', $data);
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
        return view('Kasir/Transaksi/Detail', $data);
    }
}
