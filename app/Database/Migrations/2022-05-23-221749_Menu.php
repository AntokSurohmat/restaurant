<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
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
            'kode_menu'          => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'   => true,
            ],
            'nama_menu'   => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'harga_menu'   => [
                'type'       => 'VARCHAR',
                'constraint' => '6',
            ],
            'foto_menu' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'default'    => 'default.jpg',
            ],
            'deskripsi_menu'   => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
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
        $this->forge->addUniqueKey('kode_menu');
        $this->forge->createTable('menus');
    }

    public function down()
    {
        $this->forge->dropKey('menus', 'id');
        $this->forge->dropKey('menus', 'kode_menu');
        $this->forge->dropTable('menus');
    }
}
