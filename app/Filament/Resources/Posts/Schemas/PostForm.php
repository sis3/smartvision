<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('slug')->required(),
                Forms\Components\RichEditor::make('content')->required(),
                Forms\Components\FileUpload::make('image'),
            ]);
    }
}
