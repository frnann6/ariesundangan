<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InvitationModel;
use App\Models\InvitationEventModel;
use App\Models\InvitationGalleryModel;
use App\Models\InvitationStoryModel;
use App\Models\InvitationGiftModel;

class Invitation extends BaseController
{
    private const TEMPLATES = [
        'undangan-1' => 'invitation/undangan-1',
    ];

    public function show($slug)
    {
        $invitationModel = new InvitationModel();
        $eventModel = new InvitationEventModel();
        $galleryModel = new InvitationGalleryModel();
        $storyModel = new InvitationStoryModel();
        $giftModel = new InvitationGiftModel();

        $invitation = $invitationModel->where('slug', $slug)->first();

        // Ambil data akad dan resepsi dari satu baris event undangan
        $event = $eventModel
            ->where('invitation_id', $invitation['id'])
            ->orderBy('event_date', 'ASC')
            ->orderBy('start_time', 'ASC')
            ->first();

        $hasEvent = $event !== null;
        $event = $event ?? [];
        $hasReception = !empty($event['reception_event_date'])
            || !empty($event['reception_start_time'])
            || !empty($event['reception_end_time'])
            || !empty($event['reception_venue'])
            || !empty($event['reception_address'])
            || !empty($event['reception_maps_url'])
            || !empty($event['reception_photo']);

        $photoName = $event['photo'] ?? $event['reception_photo'] ?? $invitation['cover_photo'] ?? null;
        $photoDirectory = !empty($event['photo']) || !empty($event['reception_photo'])
            ? 'img/event/'
            : 'img/cover-photo/';

        $eventPhotoUrl = $photoName
            ? base_url($photoDirectory . $invitation['slug'] . '/' . rawurlencode(basename($photoName)))
            : null;

        $akad = $this->prepareEventPart('Akad Nikah', $event, [
            'date' => 'event_date',
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'venue' => 'venue',
            'address' => 'address',
            'maps_url' => 'maps_url',
        ], $hasEvent);
        $reception = $this->prepareEventPart('Resepsi', $event, [
            'date' => 'reception_event_date',
            'start_time' => 'reception_start_time',
            'end_time' => 'reception_end_time',
            'venue' => 'reception_venue',
            'address' => 'reception_address',
            'maps_url' => 'reception_maps_url',
        ], $hasReception);

        $mainEventDate = $event['event_date'] ?? null;
        $mainEventStartTime = $event['start_time'] ?? '00:00:00';
        $mainEventTimestamp = $mainEventDate
            ? strtotime($mainEventDate . ' ' . $mainEventStartTime)
            : false;

        $galleryRows = $galleryModel->findByInvitation((int) $invitation['id']);
        $galleryImages = [];
        $galleryLayouts = ['gallery-item--tall', '', 'gallery-item--wide', '', 'gallery-item--tall', ''];

        foreach ($galleryRows as $index => $galleryRow) {
            $imageName = basename($galleryRow['image']);
            if ($imageName === '') {
                continue;
            }

            $galleryImages[] = [
                'url' => base_url(
                    'img/galleries/' . rawurlencode($invitation['slug']) . '/' . rawurlencode($imageName)
                ),
                'caption' => trim((string) ($galleryRow['caption'] ?? '')) ?: 'Foto galeri',
                'layout_class' => $galleryLayouts[$index % count($galleryLayouts)],
            ];
        }

        $storyPhotoName = $invitation['story_photo'] ?? null;
        $storyPhotoUrl = $storyPhotoName
            ? base_url(
                'img/stories/' . rawurlencode($invitation['slug']) . '/' . rawurlencode(basename($storyPhotoName))
            )
            : null;
        $stories = $storyModel->findByInvitation((int) $invitation['id']);
        $giftRows = $giftModel->findActiveByInvitation((int) $invitation['id']);
        $gifts = [];
        foreach ($giftRows as $gift) {
            $provider = $this->normalizeGiftProvider($gift);
            $gifts[] = [
                'provider' => $provider,
                'type' => $gift['type'] ?? 'bank',
                'bank_name' => $gift['bank_name'] ?? '',
                'account_number' => $gift['account_number'] ?? '',
                'account_name' => $gift['account_name'] ?? '',
                'display_name' => $this->giftDisplayName($gift, $provider),
                'logo_url' => $provider !== '' ? base_url('img/payments/' . $provider . '.png') : '',
            ];
        }

        $template = $invitation['template'] ?? 'undangan-1';
        $view = self::TEMPLATES[$template] ?? self::TEMPLATES['undangan-1'];

        return view($view, [
            'invitation' => $invitation,
            'hasEvent' => $hasEvent,
            'eventPhotoUrl' => $eventPhotoUrl,
            'akad' => $akad,
            'reception' => $reception,
            'galleryImages' => $galleryImages,
            'storyPhotoUrl' => $storyPhotoUrl,
            'stories' => $stories,
            'gifts' => $gifts,
            'formattedMainEventDate' => $this->formatIndonesianDate($mainEventDate),
            'countdownTarget' => $mainEventTimestamp !== false ? date(DATE_ATOM, $mainEventTimestamp) : '',
        ]);
    }

    private function prepareEventPart(string $title, array $event, array $fields, bool $hasData): array
    {
        $eventDate = $event[$fields['date']] ?? null;
        $startTime = $event[$fields['start_time']] ?? null;
        $endTime = $event[$fields['end_time']] ?? null;
        $mapsUrl = (string) ($event[$fields['maps_url']] ?? '');
        $mapsScheme = strtolower((string) parse_url($mapsUrl, PHP_URL_SCHEME));

        if (!in_array($mapsScheme, ['http', 'https'], true)) {
            $mapsUrl = '';
        }

        $formattedStartTime = $startTime ? date('H:i', strtotime($startTime)) : '';
        $formattedEndTime = $endTime ? date('H:i', strtotime($endTime)) : '';
        $time = $formattedStartTime;
        if ($formattedEndTime !== '') {
            $time .= ($time !== '' ? ' - ' : '') . $formattedEndTime;
        }

        return [
            'title' => $title,
            'date' => $this->formatIndonesianDate($eventDate),
            'time' => $time,
            'venue' => $event[$fields['venue']] ?? '-',
            'address' => $event[$fields['address']] ?? null,
            'maps_url' => $mapsUrl,
            'has_data' => $hasData,
        ];
    }

    private function formatIndonesianDate(?string $date): string
    {
        if (!$date) {
            return '';
        }

        $timestamp = strtotime($date);
        if ($timestamp === false) {
            return '';
        }

        $days = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu',
        ];
        $months = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];

        return $days[date('l', $timestamp)] . ', '
            . date('j', $timestamp) . ' '
            . $months[date('F', $timestamp)] . ' '
            . date('Y', $timestamp);
    }

    private function normalizeGiftProvider(array $gift): string
    {
        $provider = strtolower(trim((string) ($gift['provider'] ?? '')));
        if ($provider !== '') {
            return preg_replace('/[^a-z0-9_-]/', '', $provider);
        }

        $name = strtolower(trim((string) ($gift['bank_name'] ?? '')));
        $map = [
            'bca' => 'bca',
            'bank central asia' => 'bca',
            'mandiri' => 'mandiri',
            'bank mandiri' => 'mandiri',
            'bri' => 'bri',
            'bank bri' => 'bri',
            'bank rakyat indonesia' => 'bri',
            'bni' => 'bni',
            'bank bni' => 'bni',
            'bank negara indonesia' => 'bni',
            'bsi' => 'bsi',
            'bank syariah indonesia' => 'bsi',
            'seabank' => 'seabank',
            'sea bank' => 'seabank',
            'jago' => 'jago',
            'bank jago' => 'jago',
            'jago syariah' => 'jago_syariah',
            'bank jago syariah' => 'jago_syariah',
            'gopay' => 'gopay',
            'go-pay' => 'gopay',
            'ovo' => 'ovo',
            'dana' => 'dana',
            'shopeepay' => 'shopeepay',
            'shopee pay' => 'shopeepay',
            'linkaja' => 'linkaja',
            'link aja' => 'linkaja',
        ];

        if (isset($map[$name])) {
            return $map[$name];
        }

        foreach ($map as $key => $value) {
            if ($key !== '' && str_contains($name, $key)) {
                return $value;
            }
        }

        return '';
    }

    private function giftDisplayName(array $gift, string $provider): string
    {
        $name = trim((string) ($gift['bank_name'] ?? ''));
        if ($name !== '') {
            return $name;
        }

        $labels = [
            'bca' => 'BCA',
            'mandiri' => 'Bank Mandiri',
            'bri' => 'BRI',
            'bni' => 'BNI',
            'bsi' => 'BSI',
            'seabank' => 'SeaBank',
            'jago' => 'Bank Jago',
            'jago_syariah' => 'Bank Jago Syariah',
            'gopay' => 'GoPay',
            'ovo' => 'OVO',
            'dana' => 'DANA',
            'shopeepay' => 'ShopeePay',
            'linkaja' => 'LinkAja',
        ];

        return $labels[$provider] ?? strtoupper($provider);
    }

}
