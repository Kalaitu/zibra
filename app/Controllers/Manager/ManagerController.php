<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\KasirModel;
use App\Models\CustomerModel;
use App\Models\ProdukModel;
use App\Models\PromoModel;

class ManagerController extends BaseController
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
        return view('Manager/Dashboard/Dashboard', $data);
    }

    // TODO : MENU KASIR
    public function karyawan()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Karyawan',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
            'aktif6' => '',
        ];
        return view('Manager/Karyawan/Index', $data);
    }

    public function create_karyawan()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Karyawan',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
        ];
        return view('Manager/Karyawan/Create', $data);
    }

    function insert_kasir()
    {
    }

    function detail_karyawan()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Karyawan',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
        ];
        return view('Manager/Karyawan/Detail', $data);
    }

    function update_kasir()
    {
    }


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
        return view('Manager/Produk/Index', $data);
    }

    public function create_produk()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Produk',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => 'active',
            'aktif5' => '',
        ];
        return view('Manager/Produk/Create', $data);
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
            'aktif4' => 'active',
            'aktif5' => '',
        ];
        return view('Manager/Produk/Detail', $data);
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
        return view('Manager/Promo/Index', $data);
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
        return view('Manager/Promo/Create', $data);
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
        return view('Manager/Promo/Detail', $data);
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
            'aktif5' => '',
            'aktif6' => 'active',
        ];
        return view('Manager/Transaksi/Index', $data);
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
            'aktif5' => '',
            'aktif6' => 'active',
        ];
        return view('Manager/Transaksi/Detail', $data);
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
            'aktif5' => '',
            'aktif6' => 'active',
        ];
        return view('Manager/Report/Index', $data);
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
            'aktif5' => '',
            'aktif6' => 'active',
        ];
        return view('Manager/Report/Detail', $data);
    }
    function customer()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Customer',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
            'aktif6' => '',
        ];
        return view('Manager/Customer/Index', $data);
    }

    function detail_customer()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Customer',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
        ];
        return view('Manager/Customer/Detail', $data);
    }
}
