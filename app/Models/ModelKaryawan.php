<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKaryawan extends Model
{
    protected $table            = 'karyawan';
    protected $primaryKey       = 'id_karyawan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_user', 'nama_karyawan', 'foto_karyawan'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function tampilSemua()
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT karyawan.*, user.* FROM karyawan JOIN user ON karyawan.id_user = user.id_user");
        return $query;
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
