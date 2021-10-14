<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT' ,
                'constraint'=>11,
                'unsigned'=>True,
                'auto_increment'=>TRUE,
            ],
            'id_barang'=>[
                'type'=>'INT',
                'unsigned'=>True,
                'auto_increment'=>TRUE,
            ],
            'id_user'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>True,
                'auto_increment'=>TRUE,
            ],
            'komentar'=>[
                'type'=>'TEXT',
            ],
            'create_by'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'create_date'=>[
                'type'=>'DATETIME',
            ],
            'update_by'=>[
                'type'=>'INT',
                'constraint'=>11,
                'null'=>TRUE,
            ],
            'update_date' => [
                'type'  => 'DATETIME',
                'null'  =>  true,
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('id_user', 'User', 'id');
        $this->forge->addForeignKey('id_barang', 'Barang', 'id');
        $this->forge->createTable('Komentar');

    }
    public function down(){
        $this->forge->dropTable('Komentar');
    }
}