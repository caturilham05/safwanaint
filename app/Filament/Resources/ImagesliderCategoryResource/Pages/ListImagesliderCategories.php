<?php

namespace App\Filament\Resources\ImagesliderCategoryResource\Pages;

use App\Filament\Resources\ImagesliderCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImagesliderCategories extends ListRecords
{
    protected static string $resource = ImagesliderCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
