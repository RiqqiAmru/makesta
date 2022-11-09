<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostTest extends Migration
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
            'post_test' => [
                'type' => 'int'
            ]
        ]);
        $this->forge->addForeignKey('peserta_id', 'peserta', 'peserta_id', 'cascade', 'cascade');
        $this->forge->addForeignKey('materi_id', 'materi', 'materi_id', 'cascade', 'cascade');
        $this->forge->createTable('post_test', true);
    }

    public function down()
    {
        $this->forge->dropTable('post_test', true);
    }
}
