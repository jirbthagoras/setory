<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Filament\Resources\QuestionResource\RelationManagers;
use App\Models\Image;
use App\Models\Question;
use App\Models\Subject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Name'),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->label("Description"),
                Forms\Components\Select::make('subject_id')
                    ->label('Subject')
                    ->options(
                        Subject::withCount('questions')
                            ->get()
                            ->filter(fn($subject) => $subject->questions_count < 5)
                            ->pluck('name', 'id')
                    )
                    ->required(),
                Forms\Components\Select::make('image_id')
                    ->label('Image')->options(Image::all()
                        ->pluck('name', 'id')),
                Forms\Components\Textarea::make('wrong_message')
                    ->required()
                    ->label('Wrong Message'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('wrong_message'),
                Tables\Columns\TextColumn::make('subject.name')
                ->label('Subject'),
                Tables\Columns\ImageColumn::make('image.link')
                ->label('Image'),
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
            RelationManagers\OptionsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
