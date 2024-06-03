<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostMakeResource\Pages;
use App\Filament\Resources\PostMakeResource\RelationManagers;
use App\Models\PostMake;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Str;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostMakeResource extends Resource
{
    protected static ?string $model = PostMake::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Main Content')->schema(
                    [
                        TextInput::make('title')->live()->required()->minLength(1)->maxLength(150)->label('Titel')
                        ->afterStateUpdated(function (string $operation ,$state, Forms\Set $set) {
                         if ($operation === 'edit'){
                             return;
                         }
                         $set('slug', Str::slug($state));


                        }),
                        TextInput::make('slug')->required()->unique(ignoreRecord: true)->minLength(1)->maxLength(150),
                        RichEditor::make('body')->required()->fileAttachmentsDirectory('posts/images')->columnSpanFull(),

                    ]
                )->columns(2),
                Section::make('Content')->schema(
                    [
                        FileUpload::make('image')->image()
                        ->directory('posts/thumbnails')
                        ->imageEditor()
                        ->maxSize(212288)
                        ->label('Afbeelding')->columnSpanFull(),

                    // Select::make('user_id')
                    // ->relationship('author', 'name')
                    // ->searchable()
                    // ->label('Auteur')
                    // ->required(),
                    ]
                )->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Afbeelding'),
                TextColumn::make('title')->sortable()->searchable()->label('Titel'),
                TextColumn::make('slug')->sortable()->searchable(),
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
            // CommentsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPostMakes::route('/'),
            'create' => Pages\CreatePostMake::route('/create'),
            'edit' => Pages\EditPostMake::route('/{record}/edit'),
        ];
    }
}
