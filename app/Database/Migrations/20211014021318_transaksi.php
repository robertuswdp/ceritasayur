<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends \CodeIgniter\Database\Migration {
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
                'contraint'=>11,
                'unsigned'=>True,
                'auto_incement'=>TRUE,
            ],
            'id_pembeli'=>[
                'type'=>'INT',
                'contraint'=>11,
                'unsigned'=>True,
                'auto_incement'=>TRUE,
            ],
            'jumlah'=>[
                'type'=>'INT',
                'contraint'=>11,
            ],
            'total_harga'=>[
                'type'=>'INT',
                'contraint'=>11,
            ],
            'create_by'=>[
                'type'=>'INT',
                'contraint'=>11,
            ],
            'create_date'=>[
                'type'=>'DATETIME'
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
        $this->forge->addForeignKey('id_pembeli', 'user', 'id');
        $this->forge->addForeignKey('id_barang', 'barang', 'id');
        $this->forge->createTable('transaksi');

    }
    public function down(){
        $this->forge->dropTable('transaksi');
    }
}
?>