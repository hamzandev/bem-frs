<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AspirasiCategoryResource\Pages;
use App\Filament\Resources\AspirasiCategoryResource\RelationManagers\AspirasisRelationManager;
use App\Models\AspirasiCategory;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AspirasiCategoryResource extends Resource
{
    protected static ?string $model = AspirasiCategory::class;

    protected static ?string $navigationGroup = 'Categories';
    protected static ?string $pluralModelLabel = 'kategori aspirasi';

    protected static ?string $navigationLabel = 'Kategori Aspirasi';
    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('category')->required()->label('Judul Kategori')
                    ->unique('aspirasi_categories', 'category', ignorable: function ($record) {
                        return $record;
                    }),
                Textarea::make('detail')->required()->label('Detail'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->searchable()
            ->columns([
                Tables\Columns\TextColumn::make('category')->label('Judul Kategori')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('detail')->default('-')->label('Detail'),
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
            AspirasisRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAspirasiCategories::route('/'),
            // 'create' => Pages\CreateAspirasiCategory::route('/create'),
            'edit' => Pages\EditAspirasiCategory::route('/{record}/edit'),
        ];
    }
}
