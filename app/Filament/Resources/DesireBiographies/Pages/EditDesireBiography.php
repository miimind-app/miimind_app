<?php

namespace App\Filament\Resources\DesireBiographies\Pages;

use App\Filament\Resources\DesireBiographies\DesireBiographyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDesireBiography extends EditRecord
{
    protected static string $resource = DesireBiographyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
