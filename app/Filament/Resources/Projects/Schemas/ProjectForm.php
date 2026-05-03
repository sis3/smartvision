<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                  Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),

            Forms\Components\FileUpload::make('image')
                ->image()
                ->directory('projects')
                ->nullable(),

            Forms\Components\Textarea::make('description')
                ->required()
                ->rows(5),

            Forms\Components\TextInput::make('link')
                ->url()
                ->nullable(),

            Forms\Components\TextInput::make('year')
                ->numeric()
                ->placeholder('2024')
                ->nullable(),
            ]);
    }
}
