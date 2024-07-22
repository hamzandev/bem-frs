<?php

namespace App\Filament\Resources\AspirasiCategoryResource\Pages;

use App\Filament\Resources\AspirasiCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAspirasiCategory extends EditRecord
{
    protected static string $resource = AspirasiCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
