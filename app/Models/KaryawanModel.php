<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table            = 'karyawan';
    protected $primaryKey       = 'id_karyawan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_user', 'nama_karyawan', 'nomor_telpon', 'alamat_karyawan', 'foto_karyawan'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getByIdUser($id)
    {
        $query = $this->db->table('karyawan')
            ->select('karyawan.*')
            ->where('id_user', $id)
            ->get();
        return $query->getRow();
    }

    public function getAllKaryawan()
    {
        $query = $this->db->table('karyawan')
            ->select('karyawan.*, user.*')
            ->join('user', 'user.id_user = karyawan.id_user', 'left')
            ->get();
        return $query->getResultObject();
    }

    public function getDetailKaryawan($id)
    {
        $query = $this->db->table('karyawan')
            ->select('karyawan.*, user.*')
            ->join('user', 'user.id_user = karyawan.id_user', 'left')
            ->where('id_karyawan', $id)
            ->get();
        return $query->getRow();
    }

    public function tampilSatu($id)
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT karyawan.*, user.* FROM karyawan JOIN user ON karyawan.id_user = user.id_user WHERE karyawan.id_karyawan = '$id'");
        return $query;
    }

    public function seleksiIdUser($id)
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM karyawan WHERE id_user = '$id'");
        return $query;
    }
}
