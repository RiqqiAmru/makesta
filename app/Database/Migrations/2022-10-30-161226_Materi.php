<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'materi_id' => [
                'type'  => 'int',
                'auto_increment'    => true
            ],
            'nama_materi'   => [
                'type'  => 'varchar',
                'constraint'    => 30
            ]
        ]);
        $this->forge->addPrimaryKey('materi_id');
        $this->forge->createTable('materi');
    }

    public function down()
    {
        $this->forge->dropTable('materi', true);
    }
}
