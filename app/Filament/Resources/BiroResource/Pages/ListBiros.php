<?php

namespace App\Filament\Resources\BiroResource\Pages;

use App\Filament\Resources\BiroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBiros extends ListRecords
{
    protected static string $resource = BiroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
