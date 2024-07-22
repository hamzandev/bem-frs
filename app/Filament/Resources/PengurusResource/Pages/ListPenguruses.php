<?php

namespace App\Filament\Resources\PengurusResource\Pages;

use App\Filament\Resources\PengurusResource;
use App\Imports\PengurusesImport;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;

class ListPenguruses extends ListRecords
{
    protected static string $resource = PengurusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Import Pengurus')->button()
                ->successNotification(
                    Notification::make()
                        ->success()
                        ->title('Import berhasil.')
                        ->body('Data Pengurus telah berhasil diimport.'),
                )
                ->form([
                    FileUpload::make('file')->required()->acceptedFileTypes(['application/vnd.ms-excel', 'text/csv', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']),
                ])
                ->action(function (array $data): void {
                    Excel::import(new PengurusesImport, public_path('storage/' . $data['file']));
                })->color('success'),

            Actions\CreateAction::make(),
        ];
    }

}
