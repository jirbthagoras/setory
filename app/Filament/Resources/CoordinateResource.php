<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoordinateResource\Pages;
use App\Filament\Resources\CoordinateResource\RelationManagers;
use App\Models\Coordinate;
use App\Models\Subject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CoordinateResource extends Resource
{
    protected static ?string $model = Coordinate::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("name")
                ->label("Name")
                ->required(),
                Forms\Components\TextInput::make("lat")
                ->label("Latitude"),
                Forms\Components\TextInput::make("lng")
                ->label("Longitude"),
                Forms\Components\Select::make('subject_id')
                    ->label('Subject')->options(Subject::all()
                        ->pluck('name', 'id'))->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name")->label("Name"),
                TextColumn::make("lat")->label("Latitude"),
                TextColumn::make("lng")->label("Longitude"),
                TextColumn::make("subject.name")->label("Subject"),
                ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListCoordinates::route('/'),
            'create' => Pages\CreateCoordinate::route('/create'),
            'edit' => Pages\EditCoordinate::route('/{record}/edit'),
        ];
    }
}
