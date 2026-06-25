<?php

use App\Filament\Resources\Contacts\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\TextEntry;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    public function getHeading(): string
    {
        return "Message de {$this->record->name}";
    }

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
                    TextEntry::make("name")->label("Nom"),

                    TextEntry::make("email")->label("Email"),

                    TextEntry::make("phone")->label("Téléphone"),

                    TextEntry::make("formation.title")->label("Service"),

                    TextEntry::make("created_at")
                        ->label("Date de réception")
                        ->dateTime(),
                ])
                ->columns(2),

            Section::make("Message")->schema([
                TextEntry::make("message")->columnSpanFull(),
            ]),
        ]);
    }
}
