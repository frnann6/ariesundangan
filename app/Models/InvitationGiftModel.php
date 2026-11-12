<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitationGiftModel extends Model
{
    protected $table            = 'invitation_gifts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'invitation_id',
        'provider',
        'bank_name',
        'account_number',
        'account_name',
        'type',
        'sort_order',
        'is_active',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function findActiveByInvitation(int $invitationId): array
    {
        return $this->where('invitation_id', $invitationId)
            ->groupStart()
                ->where('is_active', 1)
                ->orWhere('is_active', null)
            ->groupEnd()
            ->orderBy('sort_order', 'ASC')
            ->orderBy('id', 'ASC')
            ->findAll();
    }
}
