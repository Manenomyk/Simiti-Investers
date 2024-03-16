<?php

namespace App\Filament\Resources\LogisticServicesResource\Pages;

use App\Filament\Resources\LogisticServicesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLogisticServices extends ListRecords
{
    protected static string $resource = LogisticServicesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
