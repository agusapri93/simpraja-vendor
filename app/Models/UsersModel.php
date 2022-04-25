<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{

    protected $table = 'users';
    protected $useTimestamps = true;

    protected $allowedFields = ['id', 'password_hash', 'nama', 'image', 'email', 'alamat', 'nomor_telepon'];

    public function getUsersByKodeVendor($kode_vendor)
    {
        return $this->where(['kode_vendor' => $kode_vendor])->findAll();
    }
}
