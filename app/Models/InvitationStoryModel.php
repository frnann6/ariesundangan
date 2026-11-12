<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitationStoryModel extends Model
{
    protected $table = 'invitation_stories';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = false;
    protected $allowedFields = [];

    public function findByInvitation(int $invitationId): array
    {
        return $this->where('invitation_id', $invitationId)
            ->orderBy('sort_order', 'ASC')
            ->orderBy('id', 'ASC')
            ->findAll();
    }
}