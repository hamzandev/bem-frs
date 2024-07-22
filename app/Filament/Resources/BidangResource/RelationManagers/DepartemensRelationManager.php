<?php

namespace App\Filament\Resources\BidangResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class DepartemensRelationManager extends RelationManager
{
    protected static string $relationship = 'departemens';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Departemen')->schema([
                    Forms\Components\TextInput::make('departemen')
                        ->required()->unique('departemens', 'departemen', ignorable: function($record) {
                            return $record;
                        })
                        ->maxLength(255),
                    Select::make('kepala_departemen')
                        ->relationship('pengurus', 'nama')
                        ->unique('departemens', 'kepala_departemen', ignorable: function ($record) {
                            return $record;
                        })
                        ->label('Kepala Departemen')
                        ->searchable()
                        ->preload()
                        ->required(),
                    Textarea::make('detail')->label('Detail Departemen')->rows(7),
                ])
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->searchable()
            ->recordTitleAttribute('departemen')
            ->columns([
                Tables\Columns\TextColumn::make('departemen')->searchable(),
                Tables\Columns\TextColumn::make('pengurus.nama')->label('Kepala Departemen')->searchable(),
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
