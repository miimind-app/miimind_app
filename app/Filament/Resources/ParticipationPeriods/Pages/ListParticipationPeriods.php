<?php

namespace App\Filament\Resources\ParticipationPeriods\Pages;

use App\Filament\Resources\ParticipationPeriods\ParticipationPeriodResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListParticipationPeriods extends ListRecords
{
    protected static string $resource = ParticipationPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
