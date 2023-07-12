<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['username', 'password', 'role'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function login($username, $password)
    {
        $query = $this->db->table('user')
            ->select('user.*')
            ->where('username', $username)
            ->where('password', $password)
            ->get();
        return $query->getRow();
    }

    public function getLastUser()
    {
        return $this->orderBy('id_user', 'desc')->limit(1)->first();
    }
}
