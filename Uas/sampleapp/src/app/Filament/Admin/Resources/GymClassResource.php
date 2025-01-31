<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GymClassResource\Pages;
use App\Models\GymClass;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;

class GymClassResource extends Resource
{
    protected static ?string $model = GymClass::class;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\Textarea::make('description')->nullable(),
            Forms\Components\DateTimePicker::make('schedule')->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->sortable(),
            Tables\Columns\TextColumn::make('description')->sortable(),
            Tables\Columns\TextColumn::make('schedule')->sortable()->dateTime(),
        ])->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGymClasses::route('/'),
            'create' => Pages\CreateGymClass::route('/create'),
            'edit' => Pages\EditGymClass::route('/{record}/edit'),
        ];
    }
}
