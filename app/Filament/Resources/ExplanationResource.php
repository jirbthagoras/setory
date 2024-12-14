<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExplanationResource\Pages;
use App\Filament\Resources\ExplanationResource\RelationManagers;
use App\Models\Explanation;
use App\Models\Image;
use App\Models\Subject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExplanationResource extends Resource
{
    protected static ?string $model = Explanation::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\Select::make('image_id')
                    ->label('Image')->options(Image::all()
                        ->pluck('name', 'id')),
                Forms\Components\Select::make('subject_id')
                    ->label('Subject')->options(Subject::all()
                        ->pluck('name', 'id'))->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\ImageColumn::make('image.link')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('subject.name')
                ->label('Subject'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                ]),
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
            'index' => Pages\ListExplanations::route('/'),
            'create' => Pages\CreateExplanation::route('/create'),
            'edit' => Pages\EditExplanation::route('/{record}/edit'),
        ];
    }
}
