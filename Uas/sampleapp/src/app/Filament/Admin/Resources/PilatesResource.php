<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PilatesResource\Pages;
use App\Models\Pilates;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;

class PilatesResource extends Resource
{
    protected static ?string $model = Pilates::class;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\Textarea::make('description'),
            Forms\Components\DateTimePicker::make('schedule')->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->sortable(),
            Tables\Columns\TextColumn::make('description')->sortable(),
            Tables\Columns\TextColumn::make('schedule')->sortable(),
        ])->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPilates::route('/'),
            'create' => Pages\CreatePilates::route('/create'),
            'edit' => Pages\EditPilates::route('/{record}/edit'),
        ];
    }
}
