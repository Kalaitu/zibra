<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table            = 'customer';
    protected $primaryKey       = 'id_customer';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_user', 'nama_customer', 'nomor_telepon', 'alamat_customer', 'point', 'kode_reveral', 'foto_customer'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function seleksiIdUser($id)
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM customer WHERE id_user = '$id'");
        return $query;
    }
}
