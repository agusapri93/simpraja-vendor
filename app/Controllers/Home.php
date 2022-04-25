<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $clearingHouseModel;

    public function index()
    {
        $countAnswered      = $this->clearingHouseModel->countAnswered(user()->kode_vendor);
        $countunanswered    = $this->clearingHouseModel->countUnanswered(user()->kode_vendor);
        $countAll           = $this->clearingHouseModel->countAll(user()->kode_vendor);


        $data = [
            'answered'      => $countAnswered,
            'unanswered'    => $countunanswered,
            'all'           => $countAll
        ];

        return view('home/home', $data);
    }
}
