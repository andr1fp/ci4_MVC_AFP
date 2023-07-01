<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ListKabLampung;

class Lampung extends BaseController
{

    protected $listKab;
    
    public function __construct()
    {
        $this->listKab = new ListKabLampung();
    }

    public function index()
    {
        $data['kabupaten'] = $this->listKab->getKabupaten();
        return view('lampung/index', $data);
    }
}
