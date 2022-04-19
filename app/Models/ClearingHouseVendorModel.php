<?php

namespace App\Models;

use CodeIgniter\Model;

class ClearingHouseVendorModel extends Model
{

    protected $table            = 'clearing_house_vendor';
    protected $useTimestamps    = false;

    protected $allowedFields = [
        'id', 'kode_satker_pengirim', 'judul', 'kategori', 'uraian', 'berkas', 'status', 'slug', 'jawaban', 'id_cs', 'lampiran'
    ];


    public function getClearingHouseBySlug($slug)
    {
        return $this->select('clearing_house.*, nama_satker, kode_satker, nomor_telepon_satker, alamat_satker, image_satker, email')->join('users', 'clearing_house.kode_satker_pengirim = users.kode_satker')->where(['slug' => $slug])->findAll();
    }

    public function getClearingHouseBySatker($kode_satker)
    {
        return $this->where(['kode_satker_pengirim' => $kode_satker])->findAll();
    }


    public function getAllClearingHouse()
    {
        return $this->select('clearing_house.*, nama_satker, kode_satker, image_satker')->join('users', 'clearing_house.kode_satker_pengirim = users.kode_satker')->findAll();
    }

    // public function getUsulan($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['slug' => $slug])->first();
    // }



    // public function getUsulanByStatusVerifikasi($status_verifikasi)
    // {
    //     return $this->where(['status_verifikasi' => $status_verifikasi])->findAll();
    // }
}
