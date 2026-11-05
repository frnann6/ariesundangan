<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInvitationGifts extends Migration
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
            'bank_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'account_number' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'account_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => 'bank',
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
        $this->forge->createTable('invitation_gifts');
    }

    public function down()
    {
        $this->forge->dropTable('invitation_gifts', true);
    }
}