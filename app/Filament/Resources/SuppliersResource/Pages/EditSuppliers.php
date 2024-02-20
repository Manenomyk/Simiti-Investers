<?php

namespace App\Filament\Resources\SuppliersResource\Pages;

use App\Filament\Resources\SuppliersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuppliers extends EditRecord
{
    protected static string $resource = SuppliersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
