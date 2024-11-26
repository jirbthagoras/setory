<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use App\Models\Image;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("name"),
                Forms\Components\Textarea::make("description"),
                Forms\Components\TextInput::make("location"),
                Forms\Components\Select::make('image_id')
                    ->label('Image')->options(Image::all()
                        ->pluck('name', 'id')),
                DatePicker::make('from')
                    ->label('From')
                    ->format('d/m/Y'),
                DatePicker::make('until')
                    ->label('Until')
                    ->format('d/m/Y')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name")->label("Name"),
                TextColumn::make("description")->label("Description"),
                TextColumn::make("location")->label("Location"),
                TextColumn::make("from")->label("From"),
                TextColumn::make("until")->label("Until"),
                ImageColumn::make("image.link")->label("Image")
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
