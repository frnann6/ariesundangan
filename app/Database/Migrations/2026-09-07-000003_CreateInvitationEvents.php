<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInvitationEvents extends Migration
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
            'photo' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'event_date' => [
                'type' => 'DATE',
            ],
            'start_time' => [
                'type' => 'TIME',
                'null' => true,
            ],
            'end_time' => [
                'type' => 'TIME',
                'null' => true,
            ],
            'venue' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'maps_url' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
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
        $this->forge->createTable('invitation_events');
    }

    public function down()
    {
        $this->forge->dropTable('invitation_events', true);
    }
}