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

    function __construct()
    {
        $this->karyawan = new \App\Models\ModelKaryawan();
        $this->user = new \App\Models\UserModel();
        $this->customer = new \App\Models\CustomerModel();
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
            'aktif5' => '',
            'aktif6' => ''
        ];
        return view('Manager/Dashboard/Dashboard', $data);
    }

    // TODO : MENU KARYAWAN
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
        $query = $this->karyawan->tampilSemua();
        $data['karyawan'] = $query->getResult();
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
            'aktif6' => ''
        ];
        return view('Manager/Karyawan/Create', $data);
    }

    public function insert_karyawan()
    {
        $this->user->insert([
            "username" => $this->request->getPost('username'),
            "password" => $this->request->getPost('password'),
            "role" => $this->request->getPost('role')
        ]);
        $query = $this->user->seleksi();
        $data['user'] = $query->getRow();
        $dataBerkas = $this->request->getFile('foto');
        $ekstensiFoto = $dataBerkas->getExtension();
        $fileName = "Karyawan" . $data['user']->id_user . '.' . $ekstensiFoto;
        $dataBerkas->move('karyawan', $fileName);
        $this->karyawan->insert([
            "id_user" => $data['user']->id_user,
            "nama_karyawan" => $this->request->getPost('nama_karyawan'),
            "foto_karyawan" => $fileName
        ]);
        return redirect()->to(base_url('manager/karyawan'));
    }

    function detail_karyawan($id)
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
        $query = $this->karyawan->tampilSatu($id);
        $data['karyawan'] = $query->getRow();
        return view('Manager/Karyawan/Detail', $data);
    }

    function update_karyawan()
    {
        $dataBerkas = $this->request->getFile('foto');
        if ($dataBerkas->getSize() == 0) {
            $this->karyawan->update($this->request->getPost('id_karyawan'), [
                "nama_karyawan" => $this->request->getPost('nama_karyawan'),
            ]);
            $this->user->update($data['fotolama']['id_user'], [
                "username" => $this->request->getPost('username'),
                "password" => $this->request->getPost('password'),
            ]);
        } else {
            $data['fotolama'] = $this->karyawan->find($this->request->getPost('id_karyawan'));
            unlink("karyawan/" . $data['fotolama']['foto_karyawan']);
            $ekstensiFoto = $dataBerkas->getExtension();
            $fileName = "Karyawan" . $this->request->getPost('id_karyawan') . '.' . $ekstensiFoto;
            $dataBerkas->move('karyawan', $fileName);
            $this->karyawan->update($this->request->getPost('id_karyawan'), [
                "nama_karyawan" => $this->request->getPost('nama_karyawan'),
                "foto_karyawan" => $fileName
            ]);
            $this->user->update($data['fotolama']['id_user'], [
                "username" => $this->request->getPost('username'),
                "password" => $this->request->getPost('password'),
            ]);
        }
        return redirect()->to(base_url('manager/karyawan'));
    }

    function delete_karyawan($id)
    {
        $data['karyawan'] = $this->karyawan->find($id);
        unlink("karyawan/" . $data['karyawan']['foto_karyawan']);
        $this->karyawan->delete($id);
        $this->user->delete($data['karyawan']['id_user']);
        return redirect()->to(base_url('manager/karyawan'));
    }

    // TODO : MENU CUSTOMER
    function customer()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Customer',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => 'active',
            'aktif4' => '',
            'aktif5' => '',
            'aktif6' => '',
        ];
        $data['customer'] = $this->customer->findAll();
        return view('Manager/Customer/Index', $data);
    }

    function detail_customer($id)
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Customer',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => 'active',
            'aktif4' => '',
            'aktif5' => '',
            'aktif6' => '',
        ];
        $data['customer'] = $this->customer->find($id);
        return view('Manager/Customer/Detail', $data);
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
            'aktif6' => '',
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
}
