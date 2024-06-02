<?php

namespace App\Filament\Resources\PostMakeResource\Pages;

use App\Filament\Resources\PostMakeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPostMake extends EditRecord
{
    protected static string $resource = PostMakeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
