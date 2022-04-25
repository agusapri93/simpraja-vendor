<?php

namespace App\Controllers;

class UploadClearing extends BaseController
{
    protected $attachmentClearingModel;

    public function unggah_clearing()
    {
        $identifier     = $this->request->getVar('identifier');
        $reference      = $this->request->getVar('reference');
        $token          = $this->request->getVar('token');
        $file_baru      = $this->request->getFile('file-clearing');
        $nama_file_baru = 'Attachment clearing-' . $reference . '-' . random_string('crypto') . '.' . $file_baru->getClientExtension();
        $file_baru->move('upload/attachment_clearing/', $nama_file_baru);

        $this->attachmentClearingModel->save([
            'token'         => $token,
            'identifier'    => $identifier,
            'reference'     => $reference,
            'nama_file'     => $nama_file_baru
        ]);
    }

    public function hapus_clearing()
    {
        $token      = $this->request->getVar('token');
        $attachment = $this->attachmentClearingModel->getDetailByToken($token);
        unlink(FCPATH . 'upload/attachment_clearing/' . $attachment['nama_file']);
        $this->attachmentClearingModel->where('token', $token)->delete();
    }

    // public function ubah_clearing()
    // {
    //     $reference = $this->request->getVar('reference');
    //     $file_ralisasi = $this->attachmentClearingModel->getAttachmentByReference($reference);

    //     $mocks = [];
    //     foreach ($file_ralisasi as $files) {
    //         $mock['size']   = filesize(FCPATH . 'upload/attachment_clearing/' . $files['nama_file']);
    //         $mock['name']   = $files['nama_file'];
    //         $mock['url']    = base_url() . '/upload/attachment_clearing/' . $files['nama_file'];
    //         $mock['token']  = $files['token'];
    //         $mocks[]        = $mock;
    //     }

    //     return $this->response->setJSON($mocks);
    // }
}
