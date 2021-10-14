<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>True,
                'auto_increment'=>TRUE,
            ],
            'nama'=>[
                'type'=>'TEXT',
                'constraint'=>100,
            ],
            'harga'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'stock'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'gambar'=>[
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
            'update_date'=>[
                'type'=>'DATETIME',
                'null'=>true,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('Barang');

    }
    public function down(){
        $this->forge->dropTable('Barang');
    }
}