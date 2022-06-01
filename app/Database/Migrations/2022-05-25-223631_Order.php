<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
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
            'kode_order'          => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'nama'          => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'no_tepl'   => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'waktu' => [
                'type' => 'DATETIME',
            ],
            'meja'   => [
                'type'       => 'TINYINT',
                'constraint' => '2',
            ],
            'pesanan' => [
                'type' => 'JSON'
            ],
            'status_order' => [
                'type'       => 'ENUM',
                'constraint' => ['pending','waiting', 'success'],
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
        $this->forge->addUniqueKey('kode_order');
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropKey('orders', 'id');
        $this->forge->dropKey('orders', 'kode_order');
        $this->forge->dropTable('orders');
    }
}
