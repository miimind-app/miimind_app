<?php

namespace App\Filament\Resources\DesireBiographies\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DesireBiographyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

	Select::make('participation_period_id')
	    ->relationship(
        name: 'participationPeriod',
        titleAttribute: 'id',
        modifyQueryUsing: fn ($query) => $query->with('participant'),
   	 )
   	 ->getOptionLabelFromRecordUsing(
        fn ($record) => $record->participant->reference . ' — Period ' . $record->id
   	 )
   		    ->required(),
                Textarea::make('body')
                    ->default(null)
                    ->columnSpanFull(),
                DateTimePicker::make('submitted_at'),
            ]);
    }
}
