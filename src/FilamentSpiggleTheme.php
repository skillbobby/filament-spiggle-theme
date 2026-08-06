<?php

namespace Spiggle\FilamentSpiggleTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;

class FilamentSpiggleTheme implements Plugin
{
    public function getId(): string
    {
        return 'filament-spiggle-theme';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->font('Outfit')
            ->colors([
                'primary' => [
                    50 => '#EEF2FF',
                    100 => '#E0EAFF',
                    200 => '#C7D7FE',
                    300 => '#A4BCFD',
                    400 => '#7A96FC',
                    500 => '#465FFF',
                    600 => '#3544E5',
                    700 => '#2A34B8',
                    800 => '#262D93',
                    900 => '#242B74',
                ],
                'gray' => Color::Slate,
            ])
            ->viteTheme('vendor/spiggle/filament-spiggle-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return new static();
    }
}