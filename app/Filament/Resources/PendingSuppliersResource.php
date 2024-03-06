<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendingSuppliersResource\Pages;
use App\Filament\Resources\PendingSuppliersResource\RelationManagers;
use App\Models\PendingSuppliers;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendingSuppliersResource extends Resource
{
    protected static ?string $model = PendingSuppliers::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Supplier Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPendingSuppliers::route('/'),
            'create' => Pages\CreatePendingSuppliers::route('/create'),
            'edit' => Pages\EditPendingSuppliers::route('/{record}/edit'),
        ];
    }    
}
