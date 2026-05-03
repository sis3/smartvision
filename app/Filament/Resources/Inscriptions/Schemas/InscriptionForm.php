<?php

namespace App\Filament\Resources\Inscriptions\Schemas;

use Filament\Schemas\Schema;
use Filament\Tables;


class InscriptionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('formation.title'),
            ]);
    }
}
