<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'          => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'nama'   => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'email'   => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'password'   => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_telp'   => [
                'type'       => 'VARCHAR',
                'constraint' => '18',
            ],
            'alamat' => [
                'type'       => 'TEXT',
            ],
            'is_admin' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0
            ],
            'created_at'    => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'     => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at'    => [
                'type' => 'DATETIME',
                'null' => true,
            ]

        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('email');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropKey('users', 'id');
        $this->forge->dropKey('users', 'email');
        $this->forge->dropTable('users');
    }
}
