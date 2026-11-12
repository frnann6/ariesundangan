<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitationMessageModel extends Model
{
    protected $table = 'invitation_messages';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['invitation_id', 'name', 'message', 'attendance'];

    public function findRecentByInvitation(int $invitationId): array
    {
        return $this->select('id, name, message, attendance, created_at')
            ->where('invitation_id', $invitationId)
            ->orderBy('created_at', 'DESC')
            ->findAll(50);
    }
}