<?php

namespace App\Filament\Resources\PengurusDetailResource\Pages;

use App\Filament\Resources\PengurusDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengurusDetails extends ListRecords
{
    protected static string $resource = PengurusDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
