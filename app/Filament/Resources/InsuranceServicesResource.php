<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Models\InsuranceServices;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InsuranceServicesResource\Pages;
use App\Filament\Resources\InsuranceServicesResource\RelationManagers;

class InsuranceServicesResource extends Resource
{
    protected static ?string $model = InsuranceServices::class;
    protected static ?string $navigationGroup = 'Additional Service Providers';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make('')
            ->description('Enter Logistic Services Details')
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('phone')->required(),
            
            Forms\Components\TextInput::make('comment')->required(),
            Radio::make('gender')->required()
            ->options([
                'Male' => 'Male',
                'Female' => 'Female',
            ]),
            ])->columns(3),

            Forms\Components\Section::make('')
            ->description('Logistic Services Location Details')
            ->schema([
                Forms\Components\TextInput::make('location')->required(),
                Forms\Components\TextInput::make('region')->required(),
            ])->columns(2),


            Forms\Components\Section::make('')
            ->description('Logistic Services Uploads')
            ->schema([
                FileUpload::make('photo')
                ->columns(1)
                    ->directory('suppImages')
                    ->storeFileNamesIn('photos'),
        
            ])->columns(3),
            

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('region'),
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
