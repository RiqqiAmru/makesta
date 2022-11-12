<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AllSeed extends Seeder
{
    public function run()
    {
        // tabel peserta
        $dataPeserta = [
            'nama' => 'Ikrom Ganteng',
            'nik' => '556065404654',
            'tempat_lahir'  => 'pekalongan',
            'tgl_lahir'     => '2004-09-09',
            'jns_kelamin'   => 'laki-laki',
            'alamat'        => 'wonoyoso',
            'ayah'          => 'muji',
            'ibu'           => 'fulan',
            'no_hp'         => '84565405436',
            'hobby'         => 'mabar',
            'instagram'     => 'ikromGanteng',
            'facebook'      => 'ikromGanteng',
            'twitter'       => 'ikromGanteng',
            'sd'            => 'SDN Wonoyoso',
            'sltp'          => 'MTS Wonoyoso',
            'slta'          => 'SMK Kedungwuni',
            'perguruan_tinggi'  => "STMIK WP",
            'pondok'        => 'Santri Gus Samsudin',
            'motto'         => 'hidup dengan Nuroh',
            'foto' => 'ikrom'
        ];
        $this->db->table("peserta")->insert($dataPeserta);

        // tabel materi
        $dataMateri = [
            ['nama_materi'   => 'Ke-Indonesia-an'],
            ['nama_materi'   => 'Ke-NU-an'],
            ['nama_materi'   => 'Ke-Aswaja-an'],
            ['nama_materi'   => 'Ke-Organisasi-an'],
            ['nama_materi'   => 'Kepemimpinan'],
            ['nama_materi'   => 'IPNU & IPPNU'],
            ['nama_materi'   => 'Tradisi Amaliyah'],
        ];
        $this->db->table("materi")->insertBatch($dataMateri);
    }
}
