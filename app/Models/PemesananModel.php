<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table            = 'pemesanan';
    protected $primaryKey       = 'id_pemesanan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['kode_pemesanan', 'id_produk', 'id_user', 'tanggal_pemesanan', 'qty', 'status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $returnType = 'object';

    function cekKode($id)
    {
        $query = $this->db->table('pemesanan')
            ->select('pemesanan.*')
            ->where('pemesanan.id_user', $id)
            ->where('pemesanan.status', 'Keranjang')
            ->get();
        return $query->getRow();
    }

    function cekBarang($id, $idbarang)
    {
        $query = $this->db->table('pemesanan')
            ->select('pemesanan.*')
            ->where('pemesanan.id_user', $id)
            ->where('pemesanan.status', 'Keranjang')
            ->where('pemesanan.id_produk', $idbarang)
            ->get();
        return $query->getRow();
    }

    function getProdukByKodePemesanan($id)
    {
        $query = $this->db->table('pemesanan')
            ->select('pemesanan.*, produk.*, customer.*')
            ->join('produk', 'produk.id_produk = pemesanan.id_produk', 'left')
            ->join('customer', 'customer.id_user = pemesanan.id_user', 'left')
            ->where('pemesanan.kode_pemesanan', $id)
            ->get();
        return $query->getResultObject();
    }

    function getProdukByIdPemesanan($id)
    {
        $query = $this->db->table('pemesanan')
            ->select('pemesanan.*, produk.*')
            ->join('produk', 'produk.id_produk = pemesanan.id_produk', 'left')
            ->where('pemesanan.id_pemesanan', $id)
            ->get();
        return $query->getRow();
    }

    function updateByKodePesanan($id, $data)
    {
        $this->db->table('pemesanan')
            ->where('kode_pemesanan', $id)
            ->update($data);
    }
}
