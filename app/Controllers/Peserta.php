<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesertaModel;

class Peserta extends BaseController
{
    public function index()
    {
        $peserta = new PesertaModel();
        $data = [
            'semua' => $peserta->findAll(),
            'title' => 'Peserta'
        ];
        return view('peserta_view', $data);
    }
}
