<?php

namespace App\Filament\Imports;

use App\Filament\Resources\JabatanResource;
use App\Filament\Resources\ProdiResource;
use App\Models\Jabatan;
use App\Models\Pengurus;
use App\Models\Prodi;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class PengurusImporter extends Importer
{
    protected static ?string $model = Pengurus::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('nama')
                ->rules(['required']),
            ImportColumn::make('nim')
                ->rules(['required']),
            ImportColumn::make('jabatan')
                ->relationship(resolveUsing: function (string $state): ?Jabatan {
                    return Jabatan::query()
                        ->where('prodi', 'LIKE', $state)
                        ->first();
                }),
            ImportColumn::make('prodi')
                ->relationship(resolveUsing: function (string $state): ?Prodi {
                    return Prodi::query()
                        ->where('prodi', 'LIKE', $state)
                        ->first();
                }),
            ImportColumn::make('foto'),
        ];
    }

    public function resolveRecord(): ?Pengurus
    {
        // return Pengurus::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);
        // $prodi = ProdiResource::getEloquentQuery()->where('prodi', $data['category']['prodi'])->first();
        // $jabatan = JabatanResource::getEloquentQuery()->where('jabatan', $data['category']['jabatan'])->first();
        // if ($prodi && $jabatan) {
        //     return Item::create([
        //         'name' => $data['name'],
        //         'current_stock' => $data['stock'],
        //         'category_id' => $category->id,
        //     ]);
        // }

        // return new Item();

        return new Pengurus();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Berhasil meng-import data pengurus dan ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' telah diimport.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' gagal melakukan import.';
        }

        return $body;
    }

}
