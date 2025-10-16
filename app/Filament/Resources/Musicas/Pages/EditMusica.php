<?php

namespace App\Filament\Resources\Musicas\Pages;

use App\Filament\Resources\Musicas\MusicaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMusica extends EditRecord
{
    protected static string $resource = MusicaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
