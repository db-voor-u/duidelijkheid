<?php

namespace App\Filament\Resources\CommentResource\Widgets;
use App\Filament\Resources\CommentResource;
use App\Models\Comment;

use Faker\Provider\ar_EG\Text;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestCommentsTable extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(function () {
                return Comment::whereDate('created_at', '>', now()->subDays(14)->startOfDay());

             })
            ->columns([
               TextColumn::make('user.name')->label('Naam'),
               TextColumn::make('post.title')->label('Post'),
               TextColumn::make('comment')->label('Reactie'),
               TextColumn::make('created_at')->date()->label('Datum'),

            ])
            ->actions([
               Action::make('Link')
               ->url(fn (Comment $record): string => CommentResource::getUrl('edit', ['record'=>$record]))
            ]);
    }
}
