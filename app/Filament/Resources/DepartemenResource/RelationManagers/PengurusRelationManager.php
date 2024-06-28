<?php

namespace App\Filament\Resources\DepartemenResource\RelationManagers;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class PengurusRelationManager extends RelationManager
{
    protected static string $relationship = 'pengurus';

    public function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Informasi Pengurus')->schema([
                TextInput::make('nim')
                    ->required()
                    ->columnSpan(2)
                    ->numeric(),
                TextInput::make('nama')
                    ->required()
                    ->columnSpan(2),
                Select::make('gender')
                    ->options([
                        'L' => "Laki-Laki",
                        'P' => "Perempuan",
                    ])->required(),
                DatePicker::make('tanggal_lahir')->required(),
                Select::make('prodi_id')
                    ->label('Prodi')
                    ->required()
                    ->relationship('prodi', 'nama'),
                // Select::make('departemen_id')
                //     ->label('Departemen')
                //     ->required()
                //     ->relationship('departemen', 'nama')
                //     ->searchable(),
                TextInput::make('jabatan')->required(),
                TextInput::make('tahun_kepengurusan')
                    ->required()
                    ->numeric(),
            ])->columns(2)
            ->columnSpan(2),
            Section::make('Foto Personal')->schema([
                FileUpload::make('foto')->nullable(),
            ])->columnSpan(1)
        ])->columns(3);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
