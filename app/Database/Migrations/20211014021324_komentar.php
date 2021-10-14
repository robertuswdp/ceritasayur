<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends \CodeIgniter\Database\Migration {
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'contraint'=>11,
                'unsigned'=>True,
                'auto_incement'=>TRUE,
            ],
            'id_barang'=>[
                'type'=>'INT',
                'unsigned'=>True,
                'auto_incement'=>TRUE,
            ],
            'id_user'=>[
                'type'=>'INT',
                'contraint'=>11,
                'unsigned'=>True,
                'auto_incement'=>TRUE,
            ],
            'komentar'=>[
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
        $this->forge->addForeignKey('id_user', 'user', 'id');
        $this->forge->addForeignKey('id_barang', 'barang', 'id');
        $this->forge->createTable('komentar');

    }
    public function down(){
        $this->forge->dropTable('komentar');
    }
}
?>