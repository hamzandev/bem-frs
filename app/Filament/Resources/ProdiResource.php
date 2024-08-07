<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdiResource\Pages;
use App\Models\Prodi;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProdiResource extends Resource
{
    protected static ?string $model = Prodi::class;
    protected static ?string $navigationLabel = 'Program Studi';
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $modelLabel = 'Program Studi';

    protected static ?string $navigationGroup = 'Struktural';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Prodi')->schema([
                    TextInput::make('prodi')->columnSpan(2)->label('Nama Prodi')->required(),
                    TextInput::make('nama_kahim')
                        ->label('Ketua Himpunan')->required(),
                    TextInput::make('website')->nullable(),
                    MarkdownEditor::make('detail')->required()->columnSpan(2),
                ])->columns(2)->columnSpan(8),

                Section::make('Gambar')->schema([
                    FileUpload::make('logo'),
                    FileUpload::make('foto_kahim')->label('Foto Ketua Himpunan'),
                ])->columnSpan(4),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // ImageColumn::make('logo'),
                TextColumn::make('prodi')->label('Nama Prodi'),
                TextColumn::make('nama_kahim')->label('Ketua Himpunan'),
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
            'index' => Pages\ListProdis::route('/'),
            // 'create' => Pages\CreateProdi::route('/create'),
            // 'edit' => Pages\EditProdi::route('/{record}/edit'),
        ];
    }
}
