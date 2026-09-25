<?php

namespace App\Filament\Resources\ParticipationPeriods;

use App\Filament\Resources\ParticipationPeriods\Pages\CreateParticipationPeriod;
use App\Filament\Resources\ParticipationPeriods\Pages\EditParticipationPeriod;
use App\Filament\Resources\ParticipationPeriods\Pages\ListParticipationPeriods;
use App\Filament\Resources\ParticipationPeriods\Schemas\ParticipationPeriodForm;
use App\Filament\Resources\ParticipationPeriods\Tables\ParticipationPeriodsTable;
use App\Models\ParticipationPeriod;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ParticipationPeriodResource extends Resource
{
    protected static ?string $model = ParticipationPeriod::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ParticipationPeriodForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ParticipationPeriodsTable::configure($table);
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
            'index' => ListParticipationPeriods::route('/'),
            'create' => CreateParticipationPeriod::route('/create'),
            'edit' => EditParticipationPeriod::route('/{record}/edit'),
        ];
    }
}
