<?php

namespace App\Filament\Resources\AspirasiCategoryResource\Pages;

use App\Filament\Resources\AspirasiCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAspirasiCategories extends ListRecords
{
    protected static string $resource = AspirasiCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-o-plus-circle')
                ->label('Kategori Aspirasi Baru'),
        ];
    }
}
