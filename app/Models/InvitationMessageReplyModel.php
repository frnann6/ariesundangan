<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitationMessageReplyModel extends Model
{
    protected $table = 'invitation_message_replies';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['invitation_message_id', 'name', 'message'];

    public function findByMessageIds(array $messageIds): array
    {
        if ($messageIds === []) {
            return [];
        }

        return $this->select('id, invitation_message_id, name, message, created_at')
            ->whereIn('invitation_message_id', array_map('intval', $messageIds))
            ->orderBy('created_at', 'ASC')
            ->orderBy('id', 'ASC')
            ->findAll();
    }
}