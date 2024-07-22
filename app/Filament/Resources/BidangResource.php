<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BidangResource\Pages;
use App\Filament\Resources\BidangResource\RelationManagers\DepartemensRelationManager;
use App\Models\Bidang;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BidangResource extends Resource
{
    protected static ?string $model = Bidang::class;

    protected static ?string $navigationGroup = 'Struktural';
    protected static ?string $pluralModelLabel = 'Bidang';


    protected static ?string $navigationLabel = 'Bidang';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Bidang')->schema([
                    TextInput::make('bidang')
                        ->label('Nama Bidang')
                        ->required()->unique('bidangs', 'bidang', ignorable: function ($record) {
                            return $record;
                        }),
                    Select::make('kepala_bidang')
                        ->label('Kepala Bidang')
                        ->relationship('pengurus', 'nama')->required(),
                    Textarea::make('detail')->columnSpan(2)
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('bidang')->label('Nama Bidang'),
                TextColumn::make('pengurus.nama')->label('Kepala Bidang'),
                TextColumn::make('detail')->label('Detail')->limit(32),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            DepartemensRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBidangs::route('/'),
            // 'create' => Pages\CreateBidang::route('/create'),
            'edit' => Pages\EditBidang::route('/{record}/edit'),
        ];
    }
}
