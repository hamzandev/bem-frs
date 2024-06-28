<?php

namespace App\Filament\Resources\DepartemenResource\Pages;

use App\Filament\Resources\DepartemenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDepartemens extends ListRecords
{
    protected static string $resource = DepartemenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
