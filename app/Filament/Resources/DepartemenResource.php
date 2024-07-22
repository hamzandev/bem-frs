<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartemenResource\Pages;
use App\Filament\Resources\DepartemenResource\RelationManagers\PengurusRelationManager;
use App\Models\Bidang;
use App\Models\Departemen;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DepartemenResource extends Resource
{
    protected static ?string $model = Departemen::class;

    protected static ?string $navigationGroup = 'Struktural';

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    protected static ?string $navigationLabel = 'Departemen';


    protected ?string $heading = 'Custom Page Heading';
    protected ?string $subheading = 'Custom Page Subheading';
    protected static ?string $title = 'Custom Page Title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Departemen')->schema([
                    TextInput::make('departemen')
                        ->required()->unique('departemens', 'departemen', ignorable: function($record) {
                            return $record;
                        })
                        ->columnSpan(2),
                    Select::make('bidang_id')->relationship('bidang', 'bidang')
                        ->required()->label('Pilih Bidang'),
                    Select::make('kepala_departemen')->relationship('pengurus', 'nama')
                        ->required()->unique('departemens', 'kepala_departemen')
                        ->label('Kepala Departemen'),
                    Textarea::make('detail')->rows(7)->columnSpan(2),
                ])->columns(2),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->searchable()
            ->columns([
                TextColumn::make('departemen')->searchable()->sortable(),
                TextColumn::make('bidang.bidang')->label('Bidang')->searchable()->sortable(),
                TextColumn::make('pengurus.nama')->label('Kepala Departemen')->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('bidang.bidang')
                    ->label('Bidang')
                    ->relationship('bidang', 'bidang'),
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
            'index' => Pages\ListDepartemens::route('/'),
            // 'create' => Pages\CreateDepartemen::route('/create'),
            // 'edit' => Pages\EditDepartemen::route('/{record}/edit'),
        ];
    }
}
