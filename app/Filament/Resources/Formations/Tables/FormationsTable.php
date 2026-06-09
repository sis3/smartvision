<?php

namespace App\Filament\Resources\Formations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables;

class FormationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Exemple :
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->money('USD', true)
                    ->sortable(),

                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                // Exemple :
                Tables\Filters\Filter::make('price')
                    ->query(fn($query) => $query->whereNotNull('price')),
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
