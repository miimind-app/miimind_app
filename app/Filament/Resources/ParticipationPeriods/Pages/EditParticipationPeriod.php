<?php

namespace App\Filament\Resources\ParticipationPeriods\Pages;

use App\Filament\Resources\ParticipationPeriods\ParticipationPeriodResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditParticipationPeriod extends EditRecord
{
    protected static string $resource = ParticipationPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
