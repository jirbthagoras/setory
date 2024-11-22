<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubjectResource\Pages;
use App\Filament\Resources\SubjectResource\RelationManagers;
use App\Filament\Resources\SubjectResource\RelationManagers\ExplanationsRelationManager;
use App\Models\Image;
use App\Models\Subject;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubjectResource extends Resource
{
    protected static ?string $model = Subject::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                TextInput::make('location')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\Select::make('category')
                    ->options(["building" => "building", "culinary" => "culinary"]),
                Forms\Components\Select::make('image_id')
                    ->label('Image')->options(Image::all()
                        ->pluck('name', 'id'))->required(),
                TextInput::make('video')->label("Video Link")
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("name")
                    ->label("Name")
                    ->searchable(),
                Tables\Columns\TextColumn::make("location")
                    ->label("Location"),
                Tables\Columns\TextColumn::make("description")
                    ->label("Description"),
                Tables\Columns\TextColumn::make("category")
                    ->label("Category"),
                Tables\Columns\TextColumn::make("video")
                    ->label("Video"),
                Tables\Columns\TextColumn::make("image.link")
                    ->label("Image Link"),
            ])
            ->filters([
                SelectFilter::make('category')
                ->options(["building" => "Building", "culinary" => "Culinary"])
                ->attribute("category"),
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
            ExplanationsRelationManager::class,
            RelationManagers\QuestionsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubjects::route('/'),
            'create' => Pages\CreateSubject::route('/create'),
            'edit' => Pages\EditSubject::route('/{record}/edit'),
        ];
    }
}
