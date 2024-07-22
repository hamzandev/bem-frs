<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartemenResource\RelationManagers\PengurusRelationManager;
use App\Filament\Resources\PengurusDetailResource\Pages;
use App\Models\PengurusDetail;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Infolists\Components\Section as InfolistSection;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PengurusDetailResource extends Resource
{
    protected static ?string $model = PengurusDetail::class;
    protected static ?string $navigationGroup = 'Kepengurusan';
    protected static ?string $title = 'Custom Page Heading';
    protected static ?string $navigationLabel = 'Profil Pengurus';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-identification';
    protected static ?string $pluralModelLabel = 'profil pengurus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Biodata Kepengurusan')->schema([
                    Select::make('pengurus_id')
                        ->label('Pilih Pengurus')
                        ->disabledOn('edit')
                        ->hiddenOn('edit')
                        ->relationship('pengurus', 'nama', function (Builder $query) {
                            return $query->whereDoesntHave('pengurus_detail');
                        }),
                    TextInput::make('placeholder_nama_pengurus')
                        ->label('Nama Lengkap')
                        ->placeholder(isset($form->getRecord()->pengurus->nama) ? $form->getRecord()->pengurus->nama : '')
                        ->disabledOn('create')
                        ->readOnlyOn('edit')
                        ->hiddenOn('create'),

                    Select::make('kabinet_id')->label('Anggota Kabinet')
                        ->relationship('kabinet', 'kabinet'),

                    // Toggle Deparemen
                    Toggle::make('active_departemen')->label('Memiliki Departemen?')

                        ->dehydrated(false)
                        ->hidden(isset($form->getRecord()->departemen_id))
                        ->live()
                        ->visible(fn (\Filament\Forms\Get $get): bool => !$get('active_biro') || isset($form->getRecord()->departemen_id)),

                    Group::make([
                        Select::make('departemen_id')->label('Pilih Departemen')
                            ->required()
                            ->relationship('departemen', 'departemen')
                    ])->hidden(fn (\Filament\Forms\Get $get): bool => $get('active_biro'))
                        ->visible(fn (\Filament\Forms\Get $get): bool => $get('active_departemen') || isset($form->getRecord()->departemen_id)),

                    // Toggle Biro
                    Toggle::make('active_biro')->label('Memiliki Biro?')

                        ->dehydrated(false)
                        ->live()
                        ->hidden(isset($form->getRecord()->biro_id))

                        ->visible(fn (\Filament\Forms\Get $get): bool => !$get('active_departemen') || isset($form->getRecord()->biro_id)),

                    Group::make([
                        Select::make('biro_id')->label('Pilih Biro')
                            ->required()
                            ->relationship('biro', 'biro')
                    ])->hidden(fn (\Filament\Forms\Get $get): bool => $get('active_departemen'))
                        ->visible(fn (\Filament\Forms\Get $get): bool => $get('active_biro') || isset($form->getRecord()->biro_id)),

                ])->columnSpan(1),

                Section::make('Biodata Pribadi')->schema([
                    TextInput::make('telepon')->label('No Telepon'),
                    TextInput::make('tanggal_lahir')->type('date'),
                    TextInput::make('umur')->type('number'),
                    Select::make('gender')->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ]),
                    Textarea::make('alamat')->rows(4)->columnSpan(2),
                ])->columnSpan(1)->columns(2),

            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // ImageColumn::make('pengurus.foto')->label('Foto'),
                TextColumn::make('pengurus.nama')->label('Nama Lengkap'),
                TextColumn::make('pengurus.nim')->label('NIM'),
                TextColumn::make('pengurus.jabatan.jabatan')->label('Jabatan'),
                TextColumn::make('pengurus.prodi.prodi')->label('Prodi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Detail')
                    ->icon('heroicon-o-eye')
                    ->infolist([
                        InfolistSection::make('Biodata Pribadi')
                            ->schema([
                                ImageEntry::make('pengurus.foto')->label('Foto')
                                ->square()
                                ->height(200)
                                ->circular()
                                ->defaultImageUrl(url('default.png')),
                                TextEntry::make('pengurus.nama')->label('Nama Lengkap'),
                                TextEntry::make('pengurus.nim')->label('NIM')->badge()->color('success'),
                                TextEntry::make('pengurus.prodi.prodi')->label('Program Studi'),
                                TextEntry::make('tanggal_lahir')->default('-')->date('d M Y'),
                                TextEntry::make('umur')->default('-'),
                                TextEntry::make('telepon')->default('-'),
                                TextEntry::make('alamat')->default('-'),
                            ])
                            ->columns(),
                        InfolistSection::make('Biodata Kepengurusan')
                            ->schema([
                                TextEntry::make('pengurus.jabatan.jabatan')->label('Jabatan'),
                                TextEntry::make('kabinet.kabinet')->label('Anggota dari Kabinet : '),
                                TextEntry::make('departemen.departemen')->default('-')->badge(),
                                TextEntry::make('biro.biro')->default('-')->badge(),
                            ])
                            ->columns(),

                    ])->slideOver()->modalFooterActions(fn () => [])->color('light'),
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
        ];
    }
}
