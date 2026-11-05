<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InvitationModel;
use App\Models\InvitationEventModel;

class Invitation extends BaseController
{
    public function show($slug)
    {
        $invitationModel = new InvitationModel();
        $eventModel = new InvitationEventModel();

        $invitation = $invitationModel->where('slug', $slug)->first();

        // Ambil semua event milik undangan tersebut
        $events = $eventModel
            ->where('invitation_id', $invitation['id'])
            ->first();

        return view('invitation/undangan-1', [
            'invitation' => $invitation,
            'events' => $events
        ]);
    }
}
