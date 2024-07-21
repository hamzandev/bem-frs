<?php

namespace App\Filament\Resources\PengurusDetailResource\Pages;

use App\Filament\Resources\PengurusDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengurusDetail extends EditRecord
{
    protected static string $resource = PengurusDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
        ];
    }
}
