<?php

namespace App\Models;

use CodeIgniter\Model;

class ClearingHouseModel extends Model
{

    protected $table            = 'clearing';
    protected $useTimestamps    = true;

    protected $allowedFields = [
        'id', 'kode_pengirim', 'nama_pengirim', 'email_pengirim', 'telepon_pengirim', 'alamat_pengirim', 'terlapor', 'satker_terlapor',
        'judul', 'kategori', 'uraian', 'reference_attachment', 'reference_jawaban', 'status', 'slug', 'jawaban', 'id_cs', 'nama_cs',
    ];


    public function getClearingHouseBySlug($slug)
    {
        return $this->where(['slug' => $slug])->first();
    }

    public function getClearingHouseByKodeVendor($kode_pengirim)
    {
        return $this->where(['kode_pengirim' => $kode_pengirim])->findAll();
    }

    public function getAllClearingHouse()
    {
        return $this->select('clearing.*, nama, kode_vendor, image')->join('users', 'clearing.kode_pengirim = users.kode_satker')->findAll();
    }

    public function countAnswered($kode_pengirim)
    {
        return count($this->where(['status' => 'Terjawab'], ['kode_pengirim' => $kode_pengirim])->findAll());
    }

    public function countUnanswered($kode_pengirim)
    {
        return count($this->where(['status' => 'Belum Dijawab'], ['kode_pengirim' => $kode_pengirim])->findAll());
    }

    public function countAll($kode_pengirim)
    {
        return count($this->where(['kode_pengirim' => $kode_pengirim])->findAll());
    }
}
