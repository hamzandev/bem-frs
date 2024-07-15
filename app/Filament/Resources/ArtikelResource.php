<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class ArtikelResource extends Resource
{
    protected ?string $heading = 'Custom Page Heading';
    protected ?string $subheading = 'Custom Page Subheading';
    protected static ?string $title = 'Custom Page Title';
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationGroup = 'Jurnalistik';

    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $navigationLabel = 'Artikel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Artikel')->schema([
                    Hidden::make('user_id')
                        ->default(auth()->id()),
                    TextInput::make('judul')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (Set $set, $state) {
                            $set('slug', Str::slug($state));
                        }),
                    Hidden::make('slug')
                        ->required(),
                    RichEditor::make('konten'),
                ]),

                Section::make('Informasi Tambahan')->schema([
                    FileUpload::make('gambar')
                        ->image()
                        ->imagePreviewHeight(200)
                        ->label('Gambar'),
                    Select::make('category_id')
                        ->relationship('category', 'category')
                        ->options(fn () => \App\Models\Category::pluck('category', 'id'))
                        ->label('Kategori')
                ])->columns(2),

                Toggle::make('is_published')
                    ->label('Terbitkan')
                    ->default(0)
                    ->afterStateUpdated(function ($state, Set $set) {
                        $set('published_at', Carbon::now()->format('Y-m-d H:i'));
                    }),
                Hidden::make('published_at')
                    ->label('Tanggal Terbit')
                    ->disabled(fn (?Artikel $record): bool => !$record->is_published)
                    ->reactive()
                    ->dehydrated(fn (?string $state): ?string => $state ? Carbon::parse($state)->format('Y-m-d H:i') : null)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5);
                    })->sortable(),
                Tables\Columns\TextColumn::make('category.category'),
                Tables\Columns\TextColumn::make('created_at')->date()->sortable(),
                TextColumn::make('is_published')
                    ->badge()
                    ->label('Status')
                    ->color(fn ($record) => $record->is_published ? 'success' : 'info')
                    ->formatStateUsing(fn ($record) => $record->is_published ? 'Published' : 'Draft'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Lihat')
                    ->url(fn (Artikel $record): string => route('artikel.show', $record))
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-eye')
                    ->iconButton(),
                Tables\Actions\EditAction::make()->iconButton(),
                Tables\Actions\DeleteAction::make()->iconButton(),
            ])
            ->searchable()
            ->filters([
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Status')
                    ->options([
                        '1' => 'Published',
                        '0' => 'Draft',
                    ])
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
