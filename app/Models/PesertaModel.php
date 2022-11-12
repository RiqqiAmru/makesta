<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'peserta';
    protected $primaryKey       = 'peserta_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama', 'nik', 'tempat_lahir', 'tgl_lahir', 'jns_kelamin', 'alamat', 'ayah', 'ibu', 'no_hp', 'hobby', 'instagram', 'facebook', 'sd', 'sltp', 'slta', 'perguruan_tinggi', 'pondok', 'motto', 'foto'
    ];

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
}
