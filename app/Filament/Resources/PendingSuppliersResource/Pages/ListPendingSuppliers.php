<?php

namespace App\Filament\Resources\PendingSuppliersResource\Pages;

use App\Filament\Resources\PendingSuppliersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPendingSuppliers extends ListRecords
{
    protected static string $resource = PendingSuppliersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
