<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comment extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'comment' => [
                'type' => 'TEXT',
                'constraint' => '1000',
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
        $this->forge->createTable('comment');
    }

    public function down()
    {
        $this->forge->dropTable('comment');
    }
}
