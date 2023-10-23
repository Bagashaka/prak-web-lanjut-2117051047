<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
            'type'           => 'INT',
            'constraint'     => 11,
            'unsigned'       => true,
            'auto_increment' => true,
            ],
            'nama' => [
                'type'      =>'VARCHAR',
                'constraint'=>'255',
            ],
            'npm' => [
                'type'       =>'VARCHAR',
                'constraint' =>'10'
            ],
            'id_kelas' =>[
                'type'       =>'INT',
                'constraint' =>5,
                'unsigned'   =>true,
            ], 
            'created_at' => [
                'type'=>'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'=>'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type'=>'DATETIME',
                'null' => true,
            ],        
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_kelas', 'kelas', 'id');
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user', true);
    }
}
