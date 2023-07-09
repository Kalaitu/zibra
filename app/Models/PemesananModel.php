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

    public function seleksi()
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1");
        return $query;
    }

    public function login($username, $password)
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        return $query;
    }

    function cekKode($id)
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM pemesanan WHERE id_user = '$id'");
        return $query;
    }

    function cekBarang($id, $id2)
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM pemesanan WHERE id_user = '$id' AND id_produk='$id2'");
        return $query;
    }
}
