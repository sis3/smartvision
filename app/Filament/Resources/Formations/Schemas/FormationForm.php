<?php

namespace App\Filament\Resources\Formations\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class FormationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('title')->required(),

                Forms\Components\Textarea::make('description')->required(),

                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('formations'),

                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->nullable(),

                Forms\Components\DatePicker::make('start_date'),
            ]);
    }
}
