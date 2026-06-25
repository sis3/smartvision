<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
                // On ne met pas d'action de création
            ];
    }

    // Personnaliser le titre de la page
    protected function getHeaderWidgets(): array
    {
        return [
                // Vous pouvez ajouter des widgets ici si besoin
            ];
    }
}
