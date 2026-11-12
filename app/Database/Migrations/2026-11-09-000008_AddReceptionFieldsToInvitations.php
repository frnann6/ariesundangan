<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddReceptionFieldsToInvitations extends Migration
{
    public function up()
    {
        $this->forge->addColumn('invitations', [
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
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('invitations', [
            'reception_photo',
            'reception_event_date',
            'reception_start_time',
            'reception_end_time',
            'reception_venue',
            'reception_address',
            'reception_maps_url',
        ]);
    }
}
