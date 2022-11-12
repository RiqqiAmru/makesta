<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pretest extends Migration
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
            'pre_test' => [
                'type' => 'int'
            ]
        ]);
        $this->forge->addForeignKey('peserta_id', 'peserta', 'peserta_id', 'cascade', 'cascade');
        $this->forge->addForeignKey('materi_id', 'materi', 'materi_id', 'cascade', 'cascade');
        $this->forge->createTable('pre_test', true);
    }

    public function down()
    {
        $this->forge->dropTable('pre_test', true);
    }
}
