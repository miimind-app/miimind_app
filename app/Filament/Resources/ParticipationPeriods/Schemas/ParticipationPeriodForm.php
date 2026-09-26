<?php

namespace App\Filament\Resources\ParticipationPeriods\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ParticipationPeriodForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('participant_id')
                    ->relationship('participant', 'reference')
                    ->required(),
                Select::make('status')
  		  ->options([
		      'draft' => 'Draft',
		      'active' => 'Active',
		      'completed' => 'Completed',
		      ])
		      ->required()
                      ->default('draft'),
                DateTimePicker::make('started_at'),
                DateTimePicker::make('ended_at'),
            ]);
    }
}
