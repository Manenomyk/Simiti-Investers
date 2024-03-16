<?php

namespace App\Filament\Resources\InsuranceServicesResource\Pages;

use App\Filament\Resources\InsuranceServicesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInsuranceServices extends ListRecords
{
    protected static string $resource = InsuranceServicesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
