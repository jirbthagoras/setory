<?php

namespace App\Filament\Resources\CoordinatsResource\Pages;

use App\Filament\Resources\CoordinatsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoordinats extends ListRecords
{
    protected static string $resource = CoordinatsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
