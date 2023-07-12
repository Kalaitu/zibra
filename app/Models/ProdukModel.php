<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table            = 'produk';
    protected $primaryKey       = 'id_produk';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_produk', 'foto_produk', 'deskripsi_produk', 'harga_produk', 'status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getAllProduk()
    {
        $query = $this->db->table('produk')
            ->select('produk.*')
            ->get();
        return $query->getResultObject();
    }

    public function getDetailProduk($id)
    {
        $query = $this->db->table('produk')
            ->select('produk.*')
            ->where('id_produk', $id)
            ->get();
        return $query->getRow();
    }

    public function getHotSalesProduk()
    {
        $query = $this->db->table('produk')
            ->select('produk.*')
            ->where('status', 'Hot Sales')
            ->get();
        return $query->getResultObject();
    }

    public function getNewArivalProduk()
    {
        $query = $this->db->table('produk')
            ->select('produk.*')
            ->where('status', 'New Arival')
            ->get();
        return $query->getResultObject();
    }

    public function getRegulerProduk()
    {
        $query = $this->db->table('produk')
            ->select('produk.*')
            ->where('status', 'Reguler')
            ->get();
        return $query->getResultObject();
    }

    public function sudahSetHargaNewArival()
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM produk WHERE harga_produk != '0' AND status = 'New Arival' LIMIT 8");
        return $query;
    }

    public function sudahSetHargaHotSales()
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM produk WHERE harga_produk != '0' AND status = 'Hot Sales' LIMIT 8");
        return $query;
    }

    public function sudahSetHarga()
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM produk WHERE harga_produk != '0'");
        return $query;
    }

    function getProdukById($kode)
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM produk WHERE id_produk = '$kode'");
        return $query;
    }
}
