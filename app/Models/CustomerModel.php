<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table            = 'customer';
    protected $primaryKey       = 'id_customer';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_user', 'nama_customer', 'nomor_telepon', 'alamat_customer', 'point', 'kode_reveral', 'foto_customer', 'kode_referal_register'];

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

    public function getJumlah()
    {
        $query = $this->db->table('customer')
            ->selectCount('customer.id_customer')
            ->get();
        return $query->getRow();
    }

    public function getPoint($id)
    {
        $query = $this->db->table('customer')
            ->select('customer.*')
            ->where('customer.kode_reveral', $id)
            ->get();
        return $query->getRow();
    }

    public function detDetailCustomer($id)
    {
        $query = $this->db->table('customer')
            ->select('customer.*')
            ->where('id_customer', $id)
            ->get();
        return $query->getRow();
    }

    public function getPenggunaRef($id)
    {
        $query = $this->db->table('customer')
            ->select('customer.*')
            ->where('kode_referal_register', $id)
            ->get();
        return $query->getResultObject();
    }

    public function updatePointsByReferralCode($kode, $point)
    {
        $db = \Config\Database::connect();
        $db->table('customer')
            ->where('customer.kode_reveral', $kode)
            ->update(['point' => $point]);
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
