<?php

namespace App\Filament\Resources\UserResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;

class UserStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Totaal aantal gebruikers', User::count()),
            Stat::make('Totaal aantal Admin', User::where('role', User::ROLE_ADMIN)->count()),
            Stat::make('Totaal aantal Editor', User::where('role', User::ROLE_EDITOR)->count()),
        ];
    }
}
