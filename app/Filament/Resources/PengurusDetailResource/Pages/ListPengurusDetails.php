<?php

namespace App\Filament\Resources\PengurusDetailResource\Pages;

use App\Filament\Resources\PengurusDetailResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;

class ListPengurusDetails extends ListRecords
{
    protected static string $resource = PengurusDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->createAnother(false)
                ->modalWidth('7xl')
                ->label('Buat Biodata Pengurus')
                ->icon('heroicon-o-plus-circle')
                ->successRedirectUrl(route('filament.admin.resources.pengurus-details.index'))
                ->successNotification(
                    Notification::make()
                        ->success()
                        ->title('Detail Pengurus disimpan!')
                        ->body('Biodata detail pengurus sudah berhasil disimpan.'),
                )
        ];
    }
}
