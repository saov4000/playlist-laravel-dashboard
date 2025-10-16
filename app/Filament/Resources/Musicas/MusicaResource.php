<?php

namespace App\Filament\Resources\Musicas;

use App\Filament\Resources\Musicas\Pages\CreateMusica;
use App\Filament\Resources\Musicas\Pages\EditMusica;
use App\Filament\Resources\Musicas\Pages\ListMusicas;
use App\Filament\Resources\Musicas\Pages\ViewMusica;
use App\Filament\Resources\Musicas\Schemas\MusicaForm;
use App\Filament\Resources\Musicas\Schemas\MusicaInfolist;
use App\Filament\Resources\Musicas\Tables\MusicasTable;
use App\Models\Musica;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MusicaResource extends Resource
{
    protected static ?string $model = Musica::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MusicaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MusicaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MusicasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMusicas::route('/'),
            'create' => CreateMusica::route('/create'),
            'view' => ViewMusica::route('/{record}'),
            'edit' => EditMusica::route('/{record}/edit'),
        ];
    }
}
