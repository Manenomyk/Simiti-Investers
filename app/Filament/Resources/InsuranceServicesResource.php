<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InsuranceServicesResource\Pages;
use App\Filament\Resources\InsuranceServicesResource\RelationManagers;
use App\Models\InsuranceServices;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InsuranceServicesResource extends Resource
{
    protected static ?string $model = InsuranceServices::class;
    protected static ?string $navigationGroup = 'Additional Service Providers';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
            'index' => Pages\ListInsuranceServices::route('/'),
            'create' => Pages\CreateInsuranceServices::route('/create'),
            'edit' => Pages\EditInsuranceServices::route('/{record}/edit'),
        ];
    }    
}
