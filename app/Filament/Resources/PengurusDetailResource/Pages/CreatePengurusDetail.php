<?php

namespace App\Filament\Resources\PengurusDetailResource\Pages;

use App\Filament\Resources\PengurusDetailResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;


class CreatePengurusDetail extends CreateRecord
{
    protected static string $resource = PengurusDetailResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }


    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Profil Pengurus Disimpan')
            ->body('Profil pengurus' . $this->record->pengurus->nama . ' telah disimpan.');
    }
}
