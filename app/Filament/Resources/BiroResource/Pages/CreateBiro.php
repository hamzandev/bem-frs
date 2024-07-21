<?php

namespace App\Filament\Resources\BiroResource\Pages;

use App\Filament\Resources\BiroResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBiro extends CreateRecord
{
    protected static string $resource = BiroResource::class;

    protected static string $view = 'filament.resources.biro-resource.pages.custom-create-biro';
}
