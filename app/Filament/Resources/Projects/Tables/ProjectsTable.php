<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables;

class ProjectsTable
{

public static function configure(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\ImageColumn::make('image')
                ->label('Image')
                ->disk('public')
                ->square(),

            Tables\Columns\TextColumn::make('title')
                ->label('Titre')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('year')
                ->label('Année')
                ->sortable(),

            Tables\Columns\TextColumn::make('description')
                ->label('Description')
                ->limit(50),
        ])
        ->filters([
            //
        ])
        ->recordActions([
            EditAction::make(),
        ])
        ->toolbarActions([
            BulkActionGroup::make([
                DeleteBulkAction::make(),
            ]),
        ]);
}
}
