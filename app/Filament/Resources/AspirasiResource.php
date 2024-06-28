<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AspirasiResource\Pages;
use App\Filament\Resources\AspirasiResource\RelationManagers;
use App\Models\Aspirasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AspirasiResource extends Resource
{
    protected static ?string $model = Aspirasi::class;
    protected static ?string $navigationGroup = 'Jurnalistik';
    protected static ?string $navigationLabel = 'Aspirasi';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAspirasis::route('/'),
            'create' => Pages\CreateAspirasi::route('/create'),
            'edit' => Pages\EditAspirasi::route('/{record}/edit'),
        ];
    }
}
