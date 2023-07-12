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

    public function getAllCustomer()
    {
        $query = $this->db->table('customer')
            ->select('customer.*')
            ->get();
        return $query->getResultObject();
    }

    public function detDetailCustomer($id)
    {
        $query = $this->db->table('customer')
            ->select('customer.*')
            ->where('id_customer', $id)
            ->get();
        return $query->getRow();
    }

    function getByIdUser($id)
    {
        $query = $this->db->table('customer')
            ->select('customer.*')
            ->where('id_user', $id)
            ->get();
        return $query->getRow();
    }

    function getByKodeReveral($id)
    {
        $query = $this->db->table('customer')
            ->select('customer.*')
            ->where('kode_reveral', $id)
            ->get();
        return $query->getRow();
    }
}
