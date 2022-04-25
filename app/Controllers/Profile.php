<?php

namespace App\Controllers;

use Myth\Auth\Password;


class Profile extends BaseController
{

    protected $usersModel;


    public function index()
    {
        return view('profile/show');
    }

    public function edit()
    {
        return view('profile/edit');
    }

    public function change_password()
    {
        return view('profile/change_password');
    }

    public function update_profile()
    {
        $image_vendor = user()->image;
        $validationRule = [
            'avatar' => [
                'label' => 'Image File',
                'rules' => 'uploaded[avatar]'
                    . '|is_image[avatar]'
                    . '|mime_in[avatar,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[avatar,2000]',
            ],
        ];
        if (!$this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];
        } else {
            $avatar = $this->request->getFile('avatar');
            $image_vendor = $avatar->getRandomName();
            $avatar->move('upload/display_picture/', $image_vendor);
        }

        $this->usersModel->save(
            [
                'id'            => user_id(),
                'nama'          => $this->request->getVar('nama'),
                'nomor_telepon' => $this->request->getVar('nomor-telepon'),
                'alamat'        => $this->request->getVar('alamat'),
                'email'         => $this->request->getVar('email'),
                'image'         => $image_vendor,
            ]
        );

        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/profile');
    }


    public function update_password()
    {
        $password_lama          = $this->request->getVar('password-lama');
        $password_baru          = $this->request->getVar('password-baru');
        $konfirmasi_password    = $this->request->getVar('konfirmasi-password-baru');

        if (!password_verify(base64_encode(hash('sha384', $password_lama, true)), user()->password_hash)) {

            session()->setFlashdata('pesan', 'Password lama salah');
            return redirect()->to('/profile/change_password');
        } else {

            if ($password_baru === $konfirmasi_password) {

                $this->usersModel->save([
                    'id' => user_id(),
                    'password_hash' => Password::hash($password_baru)
                ]);
                session()->setFlashdata('pesan', 'Password berhasil diubah');
                return redirect()->to('/profile');
            } else {
                session()->setFlashdata('pesan', 'Eits, udah dikasih validasi di front end masih mau disikat juga.');
                return redirect()->to('/profile/change_password');
            }
        }
    }

    public function iseng()
    {
        dd(user()->getRoles());
    }
}
