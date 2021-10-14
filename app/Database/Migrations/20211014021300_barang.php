<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends \CodeIgniter\Database\Migration {
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'contraint'=>11,
                'unsigned'=>True,
                'auto_incement'=>TRUE,
            ],
            'nama'=>[
                'type'=>'TEXT',
                'contraint'=>100,
            ],
            'harga'=>[
                'type'=>'INT',
                'contraint'=>11,
            ],
            'stok'=>[
                'type'=>'INT',
                'contraint'=>11,
            ],
            'gambar'=>[
                'type'=>'TEXT',
            ],
            'create_by'=>[
                'type'=>'INT',
                'contraint'=>11,
            ],
            'create_date'=>[
                'type'=>'DATETIME',
            ],
            'update_by'=>[
                'type'=>'INT',
                'contraint'=>11,
                'null'=>TRUE,
            ],
            'update_date'=>[
                'type'=>'DATETIME',
                'null'=>TRUE,
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('barang');

    }
    public function down(){
        $this->forge->dropTable('barang');
    }
}
?>