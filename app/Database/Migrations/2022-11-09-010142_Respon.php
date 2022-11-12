<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Respon extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'peserta_id' => [
                'type'  => 'int'
            ],
            'materi_id' => [
                'type'  => 'int'
            ],
            'respon' => [
                'type' => 'int',
                'default'   => null,
                'null'  => true
            ]
        ]);
        $this->forge->addForeignKey('peserta_id', 'peserta', 'peserta_id', 'cascade', 'cascade');
        $this->forge->addForeignKey('materi_id', 'materi', 'materi_id', 'cascade', 'cascade');
        $this->forge->createTable('respon', true);
    }

    public function down()
    {
        $this->forge->dropTable('respon', true);
    }
}
