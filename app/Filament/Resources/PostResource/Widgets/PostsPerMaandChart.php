<?php

namespace App\Filament\Resources\PostResource\Widgets;

use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Post;

class PostsPerMaandChart extends ChartWidget
{
    protected static ?string $heading = 'Overzicht posts per maand';


    protected int | string | array $columnSpan = 'full';
    protected function getData(): array
    {
        $data = Trend::model(Post::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->dateColumn('published_at')
        ->count();

    return [
        'datasets' => [
            [
                'label' => 'Aantal posts per maand',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
