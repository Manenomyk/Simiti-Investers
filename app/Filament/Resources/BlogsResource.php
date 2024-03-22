<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogsResource\Pages;
use App\Filament\Resources\BlogsResource\RelationManagers;
use App\Models\Blogs;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class BlogsResource extends Resource
{
    protected static ?string $model = Blogs::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Textarea::make('content1')->required(),
                FileUpload::make('image1')->required(),
                Textarea::make('content2')->nullable(),
                FileUpload::make('image2')->nullable(),
                Textarea::make('content3')->nullable(),
                FileUpload::make('video1')->nullable(),
                Textarea::make('about')->required(),
                FileUpload::make('video2')->nullable(),
                FileUpload::make('profile')->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content1'),
                Tables\Columns\TextColumn::make('image1'),
                Tables\Columns\TextColumn::make('content2'),
                Tables\Columns\TextColumn::make('image2'),
                Tables\Columns\TextColumn::make('content3'),
                Tables\Columns\TextColumn::make('video1'),
                Tables\Columns\TextColumn::make('about'),
                Tables\Columns\TextColumn::make('video2'),
                Tables\Columns\TextColumn::make('profile'),

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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlogs::route('/create'),
            'edit' => Pages\EditBlogs::route('/{record}/edit'),
        ];
    }    
}
