<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartemenResource\RelationManagers\PengurusRelationManager;
use App\Filament\Resources\PengurusDetailResource\Pages;
use App\Filament\Resources\PengurusDetailResource\RelationManagers;
use App\Models\Pengurus;
use App\Models\PengurusDetail;
use Filament\Actions\ImportAction;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\CreateAction;
use Illuminate\Database\Eloquent\Model;

class PengurusDetailResource extends Resource
{
    protected static ?string $model = PengurusDetail::class;
    protected static ?string $navigationGroup = 'Kepengurusan';
    protected static ?string $title = 'Custom Page Heading';
    protected static ?string $navigationLabel = 'Profil Pengurus';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $pluralModelLabel = 'profil pengurus';

    public static function form(Form $form): Form
    {
        return $form
            // ->options(Pengurus::getAllNoProfile())
            ->schema([
                Section::make('Biodata Kepengurusan')->schema([
                    Select::make('pengurus_id')
                        ->label('Pilih Pengurus')
                        ->relationship('pengurus', 'nama', function (Builder $query) {
                            return $query->whereDoesntHave('pengurus_detail');
                        }),
                    Select::make('kabinet_id')->label('Anggota Kabinet')
                        ->relationship('kabinet', 'kabinet'),

                    // Toggle Deparemen
                    Toggle::make('active_departemen')->label('Memiliki Departemen?')
                        ->dehydrated(false)
                        ->live()
                        ->visible(fn (\Filament\Forms\Get $get): bool => !$get('active_biro')),

                    Group::make([
                        Select::make('departemen_id')->label('Pilih Departemen')
                            ->required()
                            ->relationship('departemen', 'departemen')
                    ])->visible(fn (\Filament\Forms\Get $get): bool => $get('active_departemen')),

                    // Toggle Biro
                    Toggle::make('active_biro')->label('Memiliki Biro?')
                        ->dehydrated(false)
                        ->live()
                        ->visible(fn (\Filament\Forms\Get $get): bool => !$get('active_departemen')),

                    Group::make([
                        Select::make('biro_id')->label('Pilih Biro')
                            ->required()
                            ->relationship('biro', 'biro')
                    ])->visible(fn (\Filament\Forms\Get $get): bool => $get('active_biro')),

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
            // ->headerActions([
            //     CreateAction::make()

            //         ->modalWidth('7xl')
            //         ->successRedirectUrl(route('filament.admin.resources.pengurus-details.index'))
            //         ->successNotification(
            //             Notification::make()
            //                 ->success()
            //                 ->title('Detail Pengurus disimpan!')
            //                 ->body('Biodata detail pengurus sudah berhasil disimpan.'),
            //         )
            // ])
            ->columns([
                ImageColumn::make('pengurus.foto')->label('Foto'),
                TextColumn::make('pengurus.nama')->label('Nama Lengkap'),
                TextColumn::make('pengurus.nim')->label('NIM'),
                TextColumn::make('pengurus.jabatan.jabatan')->label('Jabatan'),
                TextColumn::make('pengurus.prodi.prodi')->label('Prodi'),
                TextColumn::make('kabinet.kabinet')->label('Kabinet'),
                TextColumn::make('departemen.departemen')
                    ->label('Departemen')->default('-')->alignCenter(),
                TextColumn::make('biro.biro')
                    ->label('Biro')->default('-')->alignCenter(),
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
        ];
    }
}
