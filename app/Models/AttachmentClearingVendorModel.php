<?php

namespace App\Models;

use CodeIgniter\Model;

class AttachmentClearingModel extends Model
{

    protected $table = 'attachment_clearing_vendor';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id', 'nama_file', 'reference', 'identifier', 'token'
    ];

    public function getAttachmentByReference($reference)
    {
        return $this->where(['reference' => $reference])->findAll();
    }

    public function getAttachmentByIdentifier($identifier)
    {
        return $this->where(['identifier' => $identifier])->findAll();
    }

    public function getDetailByToken($token)
    {
        return $this->where(['token' => $token])->first();
    }
}
