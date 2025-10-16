<?php

namespace App\Filament\Resources\Musicas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MusicaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nome'),
                TextEntry::make('duracao')
                    ->time(),
                TextEntry::make('compositor')
                    ->placeholder('-'),
                TextEntry::make('estilo')
                    ->placeholder('-'),
                TextEntry::make('foto')
                    ->placeholder('-'),
            ]);
    }
}
