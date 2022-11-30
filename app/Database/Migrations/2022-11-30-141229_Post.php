<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
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
            'path' => [
                'type'       => 'VARCHAR',
                'constraint' => '1000',
            ],
            'caption' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'likes' => [
                'type' => 'int',
                'null' => 12,
            ],
            'comments' => [
                'type' => 'int',
                'null' => 12,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'id_user'=> ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('post');
    }

    public function down()
    {
        $this->forge->dropTable('post');
    }
}
