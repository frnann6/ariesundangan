<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInvitationStories extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'invitation_id' => [
                'type'     => 'BIGINT',
                'unsigned' => true,
            ],
            'year' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'sort_order' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'default'    => 0,
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('invitation_id');
        $this->forge->addForeignKey('invitation_id', 'invitations', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('invitation_stories');
    }

    public function down()
    {
        $this->forge->dropTable('invitation_stories', true);
    }
}