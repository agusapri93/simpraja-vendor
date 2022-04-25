<?php

namespace App\Controllers;

class Clearinghouse extends BaseController
{
    protected $clearingHouseModel;

    public function index()
    {
        $clearing = $this->clearingHouseModel->getClearingHouseByKodeVendor(user()->kode_vendor);

        $data = [
            'clearing' => $clearing
        ];

        return view('clearing/show-all', $data);
    }

    public function save()
    {
        $judul              = $this->request->getVar('judul');
        $id_pengirim        = $this->request->getVar('id-pengirim');
        $nama_pengirim      = $this->request->getVar('nama-pengirim');
        $email_pengirim     = $this->request->getVar('email-pengirim');
        $telepon_pengirim   = $this->request->getVar('telepon-pengirim');
        $alamat_pengirim    = $this->request->getVar('alamat-pengirim');
        $terlapor           = $this->request->getVar('terlapor');
        $satker_terlapor    = $this->request->getVar('satker-terlapor');
        $kategori           = $this->request->getVar('kategori');
        $reference          = $this->request->getVar('reference');
        $uraian             = $this->request->getVar('uraian');

        $this->clearingHouseModel->save([
            'kode_pengirim'         => $id_pengirim,
            'nama_pengirim'         => $nama_pengirim,
            'email_pengirim'        => $email_pengirim,
            'telepon_pengirim'      => $telepon_pengirim,
            'alamat_pengirim'       => $alamat_pengirim,
            'terlapor'              => $terlapor,
            'satker_terlapor'       => $satker_terlapor,
            'judul'                 => $judul,
            'kategori'              => $kategori,
            'uraian'                => $uraian,
            'reference_attachment'  => $reference,
            'slug'                  => random_string('crypto', 30),
            'status'                => 'Belum Dijawab'
        ]);

        return redirect()->back();
    }

    public function detail($slug)
    {
        $detail                 = $this->clearingHouseModel->getClearingHouseBySlug($slug);
        $attachment_clearing    = $this->attachmentClearingModel->getAttachmentByReference($detail['reference_attachment']);
        $attachment_jawaban     = $this->attachmentCsModel->getAttachmentByReference($detail['reference_jawaban']);

        $data = [
            'detail'                => $detail,
            'attachment_clearing'   => $attachment_clearing,
            'attachment_jawaban'    => $attachment_jawaban,
        ];

        return view('clearing/detail', $data);
    }
}
