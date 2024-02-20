<?php

namespace App\Filament\Resources\PendingSuppliersResource\Pages;

use App\Filament\Resources\PendingSuppliersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendingSuppliers extends EditRecord
{
    protected static string $resource = PendingSuppliersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
