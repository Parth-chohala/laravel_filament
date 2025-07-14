<?php

namespace App\Filament\Resources\CeoResource\Pages;

use App\Filament\Resources\CeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCeos extends ListRecords
{
    protected static string $resource = CeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
