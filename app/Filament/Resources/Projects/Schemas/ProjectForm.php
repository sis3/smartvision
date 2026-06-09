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
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('slug')->required(),
                Forms\Components\TextInput::make('link')->nullable(),
                Forms\Components\TextInput::make('year')->required(),
                Forms\Components\RichEditor::make('content')->nullable(),
                Forms\Components\FileUpload::make('image')->required(),
            ]);
    }
}
