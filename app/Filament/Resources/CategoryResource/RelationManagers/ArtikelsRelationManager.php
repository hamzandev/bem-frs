<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use App\Filament\Resources\ArtikelResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtikelsRelationManager extends RelationManager
{
    protected static string $relationship = 'artikels';

    public function form(Form $form): Form
    {
        return ArtikelResource::form($form);
    }

    public function table(Table $table): Table
    {
        return ArtikelResource::table($table)->headerActions([
            Tables\Actions\CreateAction::make()->slideOver()->closeModalByClickingAway(false),
        ]);
    }
}
