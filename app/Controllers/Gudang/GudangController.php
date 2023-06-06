<?php

namespace App\Controllers\Gudang;

use App\Controllers\BaseController;

class GudangController extends BaseController
{
    function __construct()
    {
        $this->produk = new \App\Models\ProdukModel();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Produk',
            'aktif1' => 'active',
        ];
        $data['produk'] = $this->produk->findAll();
        return view('Gudang/Produk/Index', $data);
    }

    public function create_produk()
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Produk',
            'aktif1' => 'active',
        ];
        return view('Gudang/Produk/Create', $data);
    }

    function insert_produk()
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getRandomName();
        $dataBerkas->move('produk', $fileName);
        $this->produk->insert([
            "nama_produk" => $this->request->getPost('nama_produk'),
            "deskripsi_produk" => $this->request->getPost('deskripsi_produk'),
            "harga_produk" => '0',
            "foto_produk" => $fileName
        ]);
        return redirect()->to(base_url('gudang'));
    }

    function detail_produk($id)
    {
        $data = [
            'judul' => 'ZIBRA.ID',
            'halaman' => 'Produk',
            'aktif1' => 'active',
        ];
        $data['produk'] = $this->produk->find($id);
        return view('Gudang/Produk/Detail', $data);
    }

    function update_produk()
    {
        $dataBerkas = $this->request->getFile('foto');
        if ($dataBerkas->getSize() == 0) {
            $this->produk->update($this->request->getPost('id_produk'), [
                "nama_produk" => $this->request->getPost('nama_produk'),
                "deskripsi_produk" => $this->request->getPost('deskripsi_produk'),
                "harga_produk" => '0',
            ]);
        } else {
            $data['fotolama'] = $this->produk->find($this->request->getPost('id_produk'));
            unlink("produk/" . $data['fotolama']['foto_produk']);
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('produk', $fileName);
            $this->produk->update($this->request->getPost('id_produk'), [
                "nama_produk" => $this->request->getPost('nama_produk'),
                "deskripsi_produk" => $this->request->getPost('deskripsi_produk'),
                "harga_produk" => '0',
                "foto_produk" => $fileName
            ]);
        }
        return redirect()->to(base_url('gudang'));
    }

    function delete_produk($id)
    {
        $data['produk'] = $this->produk->find($id);
        unlink("produk/" . $data['produk']['foto_produk']);
        $this->produk->delete($id);
        return redirect()->to(base_url('gudang'));
    }
}
