<?php

namespace App\Controllers;

use App\Models\InvitationMessageModel;
use App\Models\InvitationMessageReplyModel;
use App\Models\InvitationModel;

class InvitationMessages extends BaseController
{
    public function index(string $slug)
    {
        $invitation = (new InvitationModel())->where('slug', $slug)->first();
        if ($invitation === null) {
            return $this->response->setStatusCode(404)->setJSON([
                'error' => 'Undangan tidak ditemukan.',
            ]);
        }

        $messageRows = (new InvitationMessageModel())->findRecentByInvitation((int) $invitation['id']);
        $replyRows = (new InvitationMessageReplyModel())->findByMessageIds(
            array_column($messageRows, 'id')
        );
        $repliesByMessage = [];

        foreach ($replyRows as $reply) {
            $repliesByMessage[$reply['invitation_message_id']][] = $reply;
        }

        $messages = [];
        foreach ($messageRows as $message) {
            $message['replies'] = $repliesByMessage[$message['id']] ?? [];
            $messages[] = $this->formatMessage($message);
        }

        return $this->response->setJSON(['messages' => $messages]);
    }

    public function create(string $slug)
    {
        $invitation = (new InvitationModel())->where('slug', $slug)->first();
        if ($invitation === null) {
            return $this->response->setStatusCode(404)->setJSON([
                'error' => 'Undangan tidak ditemukan.',
            ]);
        }

        $input = $this->request->getJSON(true);
        if (!is_array($input)) {
            return $this->response->setStatusCode(400)->setJSON([
                'error' => 'Format pesan tidak valid.',
            ]);
        }

        $name = trim((string) ($input['name'] ?? ''));
        $message = trim((string) ($input['message'] ?? ''));
        $attendance = (string) ($input['attendance'] ?? '');

        if (
            $name === '' || mb_strlen($name) > 60
            || $message === '' || mb_strlen($message) > 500
            || !in_array($attendance, ['hadir', 'tidak_hadir'], true)
        ) {
            return $this->response->setStatusCode(422)->setJSON([
                'error' => 'Nama, pesan, atau konfirmasi kehadiran tidak valid.',
            ]);
        }

        $model = new InvitationMessageModel();
        $messageId = $model->insert([
            'invitation_id' => (int) $invitation['id'],
            'name' => $name,
            'message' => $message,
            'attendance' => $attendance,
        ]);

        if ($messageId === false) {
            return $this->response->setStatusCode(500)->setJSON([
                'error' => 'Pesan gagal disimpan. Silakan coba lagi.',
            ]);
        }

        $savedMessage = $model->find($messageId);

        return $this->response->setStatusCode(201)->setJSON([
            'message' => 'Pesan berhasil dikirim.',
            'data' => $this->formatMessage($savedMessage),
        ]);
    }

    public function createReply(string $slug, int $messageId)
    {
        $invitation = (new InvitationModel())->where('slug', $slug)->first();
        if ($invitation === null) {
            return $this->response->setStatusCode(404)->setJSON([
                'error' => 'Undangan tidak ditemukan.',
            ]);
        }

        $parentMessage = (new InvitationMessageModel())
            ->where('invitation_id', (int) $invitation['id'])
            ->find($messageId);
        if ($parentMessage === null) {
            return $this->response->setStatusCode(404)->setJSON([
                'error' => 'Pesan yang akan dibalas tidak ditemukan.',
            ]);
        }

        $input = $this->request->getJSON(true);
        if (!is_array($input)) {
            return $this->response->setStatusCode(400)->setJSON([
                'error' => 'Format balasan tidak valid.',
            ]);
        }

        $name = trim((string) ($input['name'] ?? ''));
        $message = trim((string) ($input['message'] ?? ''));
        if ($name === '' || mb_strlen($name) > 60 || $message === '' || mb_strlen($message) > 500) {
            return $this->response->setStatusCode(422)->setJSON([
                'error' => 'Nama dan balasan wajib diisi (maksimal 60 dan 500 karakter).',
            ]);
        }

        $model = new InvitationMessageReplyModel();
        $replyId = $model->insert([
            'invitation_message_id' => $messageId,
            'name' => $name,
            'message' => $message,
        ]);

        if ($replyId === false) {
            return $this->response->setStatusCode(500)->setJSON([
                'error' => 'Balasan gagal disimpan. Silakan coba lagi.',
            ]);
        }

        return $this->response->setStatusCode(201)->setJSON([
            'message' => 'Balasan berhasil dikirim.',
            'data' => $this->formatReply($model->find($replyId)),
        ]);
    }

    private function formatMessage(array $message): array
    {
        return [
            'id' => (int) $message['id'],
            'name' => $message['name'],
            'message' => $message['message'],
            'attendance' => $message['attendance'],
            'created_at' => !empty($message['created_at'])
                ? date(DATE_ATOM, strtotime($message['created_at']))
                : null,
            'replies' => array_map(
                fn (array $reply): array => $this->formatReply($reply),
                $message['replies'] ?? []
            ),
        ];
    }

    private function formatReply(array $reply): array
    {
        return [
            'name' => $reply['name'],
            'message' => $reply['message'],
            'created_at' => !empty($reply['created_at'])
                ? date(DATE_ATOM, strtotime($reply['created_at']))
                : null,
        ];
    }
}