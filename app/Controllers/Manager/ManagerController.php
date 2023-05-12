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
            'judul' => 'Judul',
            'halaman' => 'Dashboard',
            'aktif1' => 'active',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => ''
        ];
        return view('Manager/Layout', $data);
    }

    // TODO : MENU KASIR
    public function kasir()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Kasir',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
        ];
        return view('Manager/Kasir/Index', $data);
    }

    public function create_kasir()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Kasir',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
        ];
        return view('Manager/Kasir/Create', $data);
    }

    function insert_kasir()
    {
    
    }

    function detail_kasir()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Kasir',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
            'aktif5' => '',
        ];
        return view('Manager/Kasir/Detail', $data);
    }

    function update_kasir()
    {

    }


    // TODO : MENU PRODUK 
    public function produk()
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
        return view('Manager/Produk/Index', $data);
    }

    public function create_produk()
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
        return view('Manager/Produk/Create', $data);
    }

    function insert_produk()
    {
    
    }

    function detail_produk()
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
            'aktif5' => 'active',
        ];
        return view('Manager/Transaksi/Detail', $data);
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
        return view('Manager/Transaksi/Detail', $data);
    }
}
