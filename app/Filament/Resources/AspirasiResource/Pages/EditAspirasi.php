<?php

namespace App\Filament\Resources\AspirasiResource\Pages;

use App\Filament\Resources\AspirasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAspirasi extends EditRecord
{
    protected static string $resource = AspirasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
