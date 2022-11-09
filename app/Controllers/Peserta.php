<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesertaModel;

class Peserta extends BaseController
{
    protected $peserta;
    public function __construct()
    {
        $this->peserta = new PesertaModel();
        helper('inflector');
        helper('form');
    }
    public function index()
    {

        $data = [
            'peserta' => $this->peserta->findAll(),
            'title' => 'Peserta'
        ];
        return view('peserta/index', $data);
    }
    public function cari()
    {

        $data = [
            'peserta' => $this->peserta->where('nama', $_POST['table_search']),
            'title' => 'Peserta'
        ];
        return view('peserta/index', $data);
    }
}
