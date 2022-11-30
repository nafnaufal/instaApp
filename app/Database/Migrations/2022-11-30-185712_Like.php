<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Like extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'like' => [
                'type' => 'INT',
                'constraint' => '2',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'id_user' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'id_post' => ['type' => 'int', 'constraint' => 5, 'unsigned' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_post', 'post', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('like');
    }

    public function down()
    {
        $this->forge->dropTable('like');
    }
}
