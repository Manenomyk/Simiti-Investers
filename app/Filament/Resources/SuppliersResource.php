<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuppliersResource\Pages;
use App\Filament\Resources\SuppliersResource\RelationManagers;
use App\Models\Suppliers;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\FileUpload;

class SuppliersResource extends Resource
{
    protected static ?string $model = Suppliers::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Supplier Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('')
                ->description('Enter Supplier Details')
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
                ->description('Suspplier Location Details')
                ->schema([
                    Forms\Components\TextInput::make('location')->required(),
                    Forms\Components\TextInput::make('region')->required(),
                ])->columns(2),


                Forms\Components\Section::make('')
                ->description('Category Details')
                ->schema([
                    Select::make('category')->required()
                    ->options([
                         'Heavy machines' => 'Heavy machines',
                       'Drillings' => 'Drillings',
                        'Borehole' => 'Borehole',
                    ]),
                    Select::make('sub-category')->required()
                    ->options([
                         'Heavy machines' => 'Heavy machines',
                       'Drillings' => 'Drillings',
                        'Borehole' => 'Borehole',
                    ]),
                ])->columns(2),

                Forms\Components\Section::make('')
                ->description('Supplier Uploads')
                ->schema([
                    FileUpload::make('photo')
                    ->columns(1)
                    ->directory('suppImages')
                    ->storeFileNamesIn('photos'),
                    Forms\Components\TextInput::make('annual_turnover')->required(),
                Radio::make('boost')->required()
                ->options([
                    'Yes' => 'Yes',
                    'No' => 'No',
                ]),
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
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('annual_turnover'),

                
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
            'index' => Pages\ListSuppliers::route('/'),
            'create' => Pages\CreateSuppliers::route('/create'),
            'edit' => Pages\EditSuppliers::route('/{record}/edit'),
        ];
    }    
}
