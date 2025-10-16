<?php

namespace App\Filament\Resources\Musicas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class MusicaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nome')
                    ->required(),
                TimePicker::make('duracao')
                    ->required(),
                TextInput::make('compositor')
                    ->default(null),
                TextInput::make('estilo')
                    ->default(null),
                TextInput::make('foto')
                    ->default(null),
            ]);
    }
}
