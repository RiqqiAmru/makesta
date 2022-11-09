<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Partisipasi extends Migration
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
            'kehadiran' => [
                'type' => 'int',
                'default'   => 50
            ]
        ]);
        $this->forge->addForeignKey('peserta_id', 'peserta', 'peserta_id', 'cascade', 'cascade');
        $this->forge->addForeignKey('materi_id', 'materi', 'materi_id', 'cascade', 'cascade');
        $this->forge->createTable('kehadiran', true);
    }

    public function down()
    {
        $this->forge->dropTable('kehadiran', true);
    }
}
