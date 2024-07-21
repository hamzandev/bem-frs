<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JurnalResource\Pages;
use App\Models\Jurnal;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class JurnalResource extends Resource
{
    protected static ?string $model = Jurnal::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Jurnal';

    protected static ?string $navigationGroup = 'Jurnalistik';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Jurnal')->schema([
                    TextInput::make('judul')->required()->columnSpan(2),
                    TextInput::make('penulis')->required(),
                    DatePicker::make('tanggal_publish')->required(),
                    Select::make('category_id')->relationship('category', 'category')->required(),
                    Textarea::make('deskripsi')->columnSpan(2),
                ])->columns(2)->columnSpan(3),

                Section::make('File Jurnal')->schema([
                    FileUpload::make('file')->required(),
                ])->columnSpan(2),
            ])->columns(5);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->actions([
                Tables\Actions\Action::make('Lihat')
                    ->icon('heroicon-o-eye')
                    // This is the important part!
                    ->infolist([
                        // Inside, we can treat this as any info list and add all the fields we want!
                        Section::make('Informasi Pengirim')
                            ->schema([
                                TextEntry::make('judul'),
                                TextEntry::make('penulis'),
                                TextEntry::make('created_at')
                                ->label('Dipublish Pada')->date(format: 'd M Y'),
                                TextEntry::make('category.category')->label('Category')->badge(),
                                TextEntry::make('file'),
                                TextEntry::make('deskripsi'),
                            ])
                            ->columns(),
                    ])->slideOver()->modalFooterActions(fn () => []),
                Tables\Actions\DeleteAction::make(),
            ])

            ->columns([
                TextColumn::make('judul')->label('Judul Jurnal')
                    ->limit(20)
                    ->searchable(),
                TextColumn::make('penulis')->label('Penulis')->searchable(),
                TextColumn::make('category.category')->label('Category')->searchable(),
                TextColumn::make('created_at')->label('Dikirim Pada')->date(format: 'd M Y'),
                TextColumn::make('file')
                    ->limit(20)
                    ->label('File'),

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
            'index' => Pages\ListJurnals::route('/'),
        ];
    }
}
