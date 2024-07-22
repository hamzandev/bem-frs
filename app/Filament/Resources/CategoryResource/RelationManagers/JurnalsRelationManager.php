<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use App\Filament\Resources\JurnalResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JurnalsRelationManager extends RelationManager
{
    protected static string $relationship = 'jurnals';

    public function form(Form $form): Form
    {
        return JurnalResource::form($form);
    }

    public function table(Table $table): Table
    {
        return JurnalResource::table($table)->headerActions([
            Tables\Actions\CreateAction::make()->slideOver()->closeModalByClickingAway(false),
        ]);
    }
}
