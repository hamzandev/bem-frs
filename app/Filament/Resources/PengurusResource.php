<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengurusResource\Pages;
use App\Filament\Resources\PengurusResource\RelationManagers;
use App\Models\Departemen;
use App\Models\Pengurus;
use App\Models\Prodi;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengurusResource extends Resource
{
    protected static ?string $model = Pengurus::class;
    protected static ?string $navigationLabel = 'Pengurus';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
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
                    Select::make('departemen_id')
                        ->label('Departemen')
                        ->required()
                        ->relationship('departemen', 'nama')
                        ->searchable(),
                    TextInput::make('jabatan')->required(),
                    TextInput::make('tahun_kepengurusan')
                        ->required()
                        ->numeric(),
                ])->columns(2)
                ->columnSpan(2),
                Section::make('foto')->schema([
                    FileUpload::make('foto')->nullable(),
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('foto'),
                TextColumn::make('nim')->sortable(),
                TextColumn::make('nama')->sortable(),
                TextColumn::make('gender'),
                TextColumn::make('departemen.nama'),
            ])
            ->searchable()
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
            'index' => Pages\ListPenguruses::route('/'),
            'create' => Pages\CreatePengurus::route('/create'),
            'edit' => Pages\EditPengurus::route('/{record}/edit'),
        ];
    }
}
