<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peserta extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'peserta_id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'nik' => [
                'type' => 'CHAR',
                'constraint' => 16
            ],
            'tempat_lahir' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'tgl_lahir' => [
                'type' => 'date',
            ],
            'jns_kelamin' => [
                'type' => 'enum',
                'constraint' => ['laki - laki', 'perempuan']
            ],
            'alamat' => [
                'type' => 'varchar',
                'constraint' => 100
            ],
            'ayah' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'ibu' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'no_hp' => [
                'type' => 'varchar',
                'constraint' => 20
            ],
            'hobby' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'instagram' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'facebook' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'twitter' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'sd' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'sltp' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'slta' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'perguruan_tinggi' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'pondok' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'motto' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'foto' => [
                'type' => 'varchar',
                'constraint' => 50,
                'default' => 'default.jpg'
            ],
        ]);
        $this->forge->addPrimaryKey('peserta_id');
        $this->forge->createTable("peserta", true);
    }

    public function down()
    {
        $this->forge->dropTable('peserta', true);
    }
}
