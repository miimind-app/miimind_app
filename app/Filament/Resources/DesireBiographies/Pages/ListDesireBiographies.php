<?php

namespace App\Filament\Resources\DesireBiographies\Pages;

use App\Filament\Resources\DesireBiographies\DesireBiographyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDesireBiographies extends ListRecords
{
    protected static string $resource = DesireBiographyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
