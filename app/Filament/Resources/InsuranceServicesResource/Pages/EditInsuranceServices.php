<?php

namespace App\Filament\Resources\InsuranceServicesResource\Pages;

use App\Filament\Resources\InsuranceServicesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInsuranceServices extends EditRecord
{
    protected static string $resource = InsuranceServicesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
