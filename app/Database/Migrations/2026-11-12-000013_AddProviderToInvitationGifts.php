<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProviderToInvitationGifts extends Migration
{
    public function up()
    {
        $fields = [
            'provider' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => true,
                'after'      => 'invitation_id',
            ],
            'sort_order' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
                'after'      => 'type',
            ],
            'is_active' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
                'after'      => 'sort_order',
            ],
        ];

        $this->forge->addColumn('invitation_gifts', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('invitation_gifts', ['provider', 'sort_order', 'is_active']);
    }
}
