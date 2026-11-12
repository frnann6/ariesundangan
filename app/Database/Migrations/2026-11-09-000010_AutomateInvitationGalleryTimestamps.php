<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AutomateInvitationGalleryTimestamps extends Migration
{
    public function up()
    {
        $table = $this->db->escapeIdentifiers($this->db->DBPrefix . 'invitation_galleries');
        $createdAt = $this->db->escapeIdentifiers('created_at');
        $updatedAt = $this->db->escapeIdentifiers('updated_at');

        $this->db->query(
            "ALTER TABLE {$table} "
                . "MODIFY {$createdAt} DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, "
                . "MODIFY {$updatedAt} DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        );
    }

    public function down()
    {
        $table = $this->db->escapeIdentifiers($this->db->DBPrefix . 'invitation_galleries');
        $createdAt = $this->db->escapeIdentifiers('created_at');
        $updatedAt = $this->db->escapeIdentifiers('updated_at');

        $this->db->query(
            "ALTER TABLE {$table} "
                . "MODIFY {$createdAt} DATETIME NOT NULL, "
                . "MODIFY {$updatedAt} DATETIME NOT NULL"
        );
    }
}