<?php

namespace App\Filament\Resources\PostMakeResource\Pages;

use App\Filament\Resources\PostMakeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPostMakes extends ListRecords
{
    protected static string $resource = PostMakeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
