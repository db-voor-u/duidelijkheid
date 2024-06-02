<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Filament\Resources\PostResource\RelationManagers\CommentsRelationManager;
use App\Models\Post;
use DateTime;
use Faker\Core\File;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

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
                Section::make('Meta')->schema(
                [
                    FileUpload::make('image')->image()->required()
                    ->directory('posts/thumbnails')
                    ->imageEditor()
                    ->maxSize(212288)
                    ->label('Afbeelding')->columnSpanFull(),
                    DateTimePicker::make('published_at')->nullable()->label('Gepubliceerd op'),

                    Select::make('user_id')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->label('Auteur')
                    ->required(),

                    Select::make('categories')
                    ->multiple()

                    ->relationship('categories', 'title')
                    ->searchable()
                    ->label('Categorieën'),



                ]
                )->columns(2),
                Section::make('checklist')->schema(
                [
                    Checkbox::make('featured')->label('Uitgelicht'),
                ]
                ),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Afbeelding'),
                TextColumn::make('title')->sortable()->searchable()->label('Titel'),
                TextColumn::make('slug')->sortable()->searchable(),
                TextColumn::make('author.name')->sortable()->searchable()->label('Auteur'),
                TextColumn::make('published_at')->date('Y-m-d')->sortable()->searchable()->label('Gepubliceerd op'),
                TextColumn::make('featured')->label('Uitgelicht'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
          CommentsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

}
