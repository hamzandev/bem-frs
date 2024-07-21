<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AspirasiResource\Pages;
use App\Filament\Resources\AspirasiResource\RelationManagers;
use App\Models\Aspirasi;
use App\Models\AspirasiCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AspirasiResource extends Resource
{
    protected static ?string $model = Aspirasi::class;
    protected static ?string $navigationGroup = 'Jurnalistik';
    protected static ?string $navigationLabel = 'Aspirasi';

    protected static ?string $pluralModelLabel = 'aspirasi';

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
            ->searchable()
            ->columns([
                TextColumn::make('nama_mahasiswa')->label('Nama Pengirim')->searchable(),
                TextColumn::make('judul')
                    ->label('Judul Aspirasi')->searchable()
                    ->limit(50)->sortable(),
                TextColumn::make('created_at')
                    ->date(format: 'd M Y')
                    ->label('Tanggal')->sortable(),
                TextColumn::make('aspirasis_category.category')->badge()->label('Category'),
            ])
            ->actions([
                Tables\Actions\Action::make('Detail')
                    ->icon('heroicon-o-eye')
                    // This is the important part!
                    ->infolist([
                        // Inside, we can treat this as any info list and add all the fields we want!
                        Section::make('Informasi Pengirim')
                            ->schema([
                                TextEntry::make('nama_mahasiswa'),
                                TextEntry::make('telepon'),
                                TextEntry::make('created_at')->label('Dikirim Pada')->date(format: 'd M Y'),
                                TextEntry::make('aspirasis_category.category')->label('Category')->badge(),
                            ])
                            ->columns(),
                        Section::make('Informasi Aspirasi')
                            ->schema([
                                TextEntry::make('judul')->label('Judul Aspirasi'),
                                TextEntry::make('aspirasi')->label('Isi Aspirasi'),
                            ])
                            ->columns(),

                    ])->slideOver()->modalFooterActions(fn() => []),
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
            'index' => Pages\ListAspirasis::route('/'),
        ];
    }
}
