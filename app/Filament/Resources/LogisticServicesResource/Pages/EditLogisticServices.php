<?php

namespace App\Filament\Resources\LogisticServicesResource\Pages;

use App\Filament\Resources\LogisticServicesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLogisticServices extends EditRecord
{
    protected static string $resource = LogisticServicesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
