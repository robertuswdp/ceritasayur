<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends \CodeIgniter\Database\Migration {
    public function up(){
        $this->forge->addField([
            'id'        => [
                'type'          =>  'INT',
                'contraint'     =>  11,
                'unsigned'      =>  true,
                'auto_incement' =>  true,
            ],
            'username'  =>  [
                'type'=>'VARCHAR',
                'contraint'=>100,
            ],
            'password'  =>[
                'type'          => 'VARCHAR',
            ],
            'salt'      =>   [
                'type'          => 'TEXT',
            ],
            'avatar' =>[
                'type'          => 'TEXT',
                'null'          => true,
            ],
            'role'  =>  [
                'type'          =>  'INT',
                'contraint'     =>  1,
                'default'       =>1,
            ],
            'create_by' =>  [
                'type'          =>'INT',
                'contraint'     =>11,
            ],
            'create_date'   =>  [
                'type'=>'DATETIME',
            ],
            'update_by'=>[
                'type'          =>  'INT',
                'contraint'     =>  11,
                'null'          =>  true,
            ],
            'update_date'=>[
                'type'          =>  'DATETIME',
                'null'          =>  true,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('user');

    }
    public function down(){
        $this->forge->dropTable('user');
    }
}
?>