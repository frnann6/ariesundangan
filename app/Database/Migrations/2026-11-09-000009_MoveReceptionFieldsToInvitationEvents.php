<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MoveReceptionFieldsToInvitationEvents extends Migration
{
    private array $receptionFields = [
        'reception_photo' => [
            'type'       => 'VARCHAR',
            'constraint' => 100,
            'null'       => true,
        ],
        'reception_event_date' => [
            'type' => 'DATE',
            'null' => true,
        ],
        'reception_start_time' => [
            'type' => 'TIME',
            'null' => true,
        ],
        'reception_end_time' => [
            'type' => 'TIME',
            'null' => true,
        ],
        'reception_venue' => [
            'type'       => 'VARCHAR',
            'constraint' => 100,
            'null'       => true,
        ],
        'reception_address' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'reception_maps_url' => [
            'type'       => 'VARCHAR',
            'constraint' => 255,
            'null'       => true,
        ],
    ];

    public function up()
    {
        $this->forge->addColumn('invitation_events', $this->receptionFields);
        $this->forge->dropColumn('invitations', array_keys($this->receptionFields));
    }

    public function down()
    {
        $this->forge->addColumn('invitations', $this->receptionFields);
        $this->forge->dropColumn('invitation_events', array_keys($this->receptionFields));
    }
}
