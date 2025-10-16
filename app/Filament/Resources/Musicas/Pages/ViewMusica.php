<?php

namespace App\Filament\Resources\Musicas\Pages;

use App\Filament\Resources\Musicas\MusicaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMusica extends ViewRecord
{
    protected static string $resource = MusicaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
