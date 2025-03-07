<?php

namespace App\Filament\Resources\PlayerResource\Pages;

use App\Filament\Resources\PlayerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Columns\TextColumn;
class CreatePlayer extends CreateRecord
{
    protected static string $resource = PlayerResource::class;
}
