<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTemplateToInvitations extends Migration
{
    public function up()
    {
        $this->forge->addColumn('invitations', [
            'template' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'default'    => 'undangan-1',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('invitations', 'template');
    }
}