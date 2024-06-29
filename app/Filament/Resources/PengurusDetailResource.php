<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartemenResource\RelationManagers\PengurusRelationManager;
use App\Filament\Resources\PengurusDetailResource\Pages;
use App\Filament\Resources\PengurusDetailResource\RelationManagers;
use App\Models\PengurusDetail;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengurusDetailResource extends Resource
{
    protected static ?string $model = PengurusDetail::class;
    protected static ?string $navigationGroup = 'Kepengurusan';
    protected static ?string $title = 'Custom Page Heading';
    protected static ?string $navigationLabel = 'Detail Pengurus';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('pengurus_id')->label('Pilih Pengurus')
                    ->relationship('pengurus', 'nama')
                    ->columnSpan(2),
                Select::make('departemen_id')->label('Departemen')
                    ->relationship('departemen', 'departemen'),
                Select::make('biro_id')->label('Biro')
                    ->relationship('biro', 'biro'),

            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pengurus.nama')->label('Nama Lengkap'),
                TextColumn::make('kabinet.kabinet')->label('Kabinet'),
                TextColumn::make('departemen.departemen')
                    ->label('Departemen'),
                TextColumn::make('biro.biro')
                    ->label('Biro'),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            PengurusRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengurusDetails::route('/'),
            'create' => Pages\CreatePengurusDetail::route('/create'),
            'edit' => Pages\EditPengurusDetail::route('/{record}/edit'),
        ];
    }
}
