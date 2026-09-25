<?php

namespace App\Filament\Resources\DesireBiographies;

use App\Filament\Resources\DesireBiographies\Pages\CreateDesireBiography;
use App\Filament\Resources\DesireBiographies\Pages\EditDesireBiography;
use App\Filament\Resources\DesireBiographies\Pages\ListDesireBiographies;
use App\Filament\Resources\DesireBiographies\Schemas\DesireBiographyForm;
use App\Filament\Resources\DesireBiographies\Tables\DesireBiographiesTable;
use App\Models\DesireBiography;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DesireBiographyResource extends Resource
{
    protected static ?string $model = DesireBiography::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DesireBiographyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DesireBiographiesTable::configure($table);
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
            'index' => ListDesireBiographies::route('/'),
            'create' => CreateDesireBiography::route('/create'),
            'edit' => EditDesireBiography::route('/{record}/edit'),
        ];
    }
}
