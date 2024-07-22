<?php

namespace App\Filament\Resources\PengurusResource\Pages;

use App\Filament\Resources\PengurusResource;
use App\Models\PengurusDetail;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePengurus extends CreateRecord
{
    protected static string $resource = PengurusResource::class;

    protected function afterCreate(): void
    {
        // Runs after the form fields are saved to the database.
        $pengurus_id = $this->record->id;
        PengurusDetail::create([
            'pengurus_id' => $pengurus_id
        ]);
    }
}
