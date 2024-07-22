<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BiroResource\Pages;
use App\Filament\Resources\BiroResource\RelationManagers;
use App\Models\Biro;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BiroResource extends Resource
{
    protected static ?string $model = Biro::class;
    protected static ?string $navigationGroup = 'Struktural';

    protected static ?string $navigationLabel = 'Biro';
    protected static ?string $pluralModelLabel = 'data biro';
    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Biro')->schema([
                    TextInput::make('biro'),
                    Select::make('kepala_biro')
                        ->label('Kepala Biro')
                        ->relationship('pengurus', 'nama')->required(),
                    Textarea::make('detail')
                        ->rows(7)
                        ->columnSpan(2),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->searchable()
            ->columns([
                TextColumn::make('biro')->label('Nama Biro')->searchable(),
                TextColumn::make('detail')->default('-')->label('Nama Biro')->searchable(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBiros::route('/'),
            // 'create' => Pages\CreateBiro::route('/create'),
            // 'edit' => Pages\EditBiro::route('/{record}/edit'),
        ];
    }
}
