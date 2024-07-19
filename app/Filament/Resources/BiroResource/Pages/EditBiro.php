<?php

namespace App\Filament\Resources\BiroResource\Pages;

use App\Filament\Resources\BiroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBiro extends EditRecord
{
    protected static string $resource = BiroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
