<?php

namespace App\Filament\Resources\Contacts\ContactResource\Pages;

use App\Filament\Resources\Contacts\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Text;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label("Supprimer"),

            Actions\Action::make("reply")
                ->label("Répondre")
                ->icon("heroicon-o-reply")
                ->url(
                    fn() => "mailto:{$this->record->email}?subject=Réponse à votre message",
                )
                ->openUrlInNewTab(),
        ];
    }

    protected function getInfolist(Schema $schema): Schema
    {
        return $schema->schema([
            Section::make("Informations du contact")
                ->schema([
                    Text::make("name")->label("Nom"),

                    Text::make("email")->label("Email"),

                    Text::make("phone")->label("Téléphone"),

                    Text::make("formation.title")->label("Service"),

                    Text::make("created_at")->label("Date")->dateTime(),
                ])
                ->columns(2),

            Section::make("Message")->schema([Text::make("message")]),
        ]);
    }

    public function getTitle(): string
    {
        return "Message de {$this->record->name}";
    }
}
