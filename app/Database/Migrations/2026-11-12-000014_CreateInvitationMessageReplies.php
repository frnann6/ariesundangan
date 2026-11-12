<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInvitationMessageReplies extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'invitation_message_id' => [
                'type'     => 'BIGINT',
                'unsigned' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'message' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('invitation_message_id');
        $this->forge->addForeignKey('invitation_message_id', 'invitation_messages', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('invitation_message_replies');
    }

    public function down()
    {
        $this->forge->dropTable('invitation_message_replies', true);
    }
}