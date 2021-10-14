<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up(){
        $this->forge->addField([
            'id'    =>  [
                'type'          =>  'INT',
                'constraint'     =>  11,
                'unsigned'      =>  true,
                'auto_increment' =>  true,
            ],
            'id_barang' =>  [
                'type'=>'INT',
                'constraint'      => 11,
                'unsigned'       => true,
                'auto_increment'  => true,
            ],
            'id_pembeli'    =>  [
                'type'           => 'INT',
                'constraint'      => 11,
                'unsigned'       => true,
                'auto_increment'=>true,
            ],
            'jumlah'             => [
                'type'           => 'INT',
                'constraint'      => 11,
            ],
            'total_harga'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'create_by'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'create_date'=>[
                'type'=>'DATETIME'
            ],
            'update_by'=>[
                'type'=>'INT',
                'constraint'=>11,
                'null'=>TRUE,
            ],
            'update_date'=>[
                'type'=>'DATETIME',
                'null'=>TRUE,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_pembeli', 'User', 'id');
        $this->forge->addForeignKey('id_barang', 'Barang', 'id');
        $this->forge->createTable('Transaksi');

    }
    public function down(){
        $this->forge->dropTable('Transaksi');
    }
}