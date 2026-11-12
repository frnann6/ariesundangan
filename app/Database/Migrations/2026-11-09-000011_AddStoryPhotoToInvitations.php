<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStoryPhotoToInvitations extends Migration
{
    public function up()
    {
        $this->forge->addColumn('invitations', [
            'story_photo' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('invitations', 'story_photo');
    }
}