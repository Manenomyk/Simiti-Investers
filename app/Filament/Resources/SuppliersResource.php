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

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('location')->required(),
                Forms\Components\TextInput::make('region')->required(),
                Forms\Components\TextInput::make('phone')->required(),
                Select::make('category')->required()
                ->options([
                     'Heavy machines',
                   'Drillings',
                    'Borehole',
                ]),
                Select::make('sub-category')->required()
                ->options([
                     'Heavy machines',
                   'Drillings',
                    'Borehole',
                ]),
                Forms\Components\TextInput::make('annual-turnover')->required(),
                FileUpload::make('photo'),
                Forms\Components\TextInput::make('comment')->required(),
                Radio::make('gender')->required()
                ->options([
                    'Male',
                    'Female',
                ]),
                Radio::make('boost')->required()
                ->options([
                    'Yes',
                    'No',
                ]),

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
                Tables\Columns\TextColumn::make('annual-turnover'),

                
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
