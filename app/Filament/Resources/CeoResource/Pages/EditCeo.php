<?php

namespace App\Filament\Resources\CeoResource\Pages;

use App\Filament\Resources\CeoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCeo extends EditRecord
{
    protected static string $resource = CeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
