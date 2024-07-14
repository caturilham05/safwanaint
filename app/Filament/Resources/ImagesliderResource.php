<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImagesliderResource\Pages;
use App\Filament\Resources\ImagesliderResource\RelationManagers;
use App\Models\Imageslider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Select;

use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;

use App\Models\imagesliderCategory;

class ImagesliderResource extends Resource
{
    protected static ?string $model = Imageslider::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('imageslider_category_id')->label('Imageslider Category')->options(imagesliderCategory::all()->pluck('name', 'id'))->searchable(),
                Forms\Components\TextInput::make('title')->maxLength(255),
                Forms\Components\TextInput::make('intro')->maxLength(255),
                RichEditor::make('description')->columnSpanFull(),
                Checkbox::make('active')->inline(),
                SpatieMediaLibraryFileUpload::make('imageslider')->collection('imageslider')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('imagesliderCategory.name'),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('intro')->searchable(),
                TextColumn::make('description')->limit(50),
                SpatieMediaLibraryImageColumn::make('imageslider')->collection('imageslider')->stacked()->limit(1)->limitedRemainingText(isSeparate: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListImagesliders::route('/'),
            'create' => Pages\CreateImageslider::route('/create'),
            'edit' => Pages\EditImageslider::route('/{record}/edit'),
        ];
    }
}
