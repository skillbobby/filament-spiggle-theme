<?php

namespace Spiggle\FilamentSpiggleTheme;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentColor;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentSpiggleThemeServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-spiggle-theme';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasAssets();
    }

    public function packageBooted(): void
    {
        // 1. Inject the CSS globally to all Filament panels
        FilamentAsset::register([
            Css::make('spiggle-theme', __DIR__ . '/../resources/dist/theme.css'),
        ], 'spiggle/filament-spiggle-theme');

        // 2. Register the TailAdmin primary colors globally
        FilamentColor::register([
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
        ]);
    }
}
