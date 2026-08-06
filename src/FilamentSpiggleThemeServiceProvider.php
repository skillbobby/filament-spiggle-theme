<?php

namespace Spiggle\FilamentSpiggleTheme;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentSpiggleThemeServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-spiggle-theme';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasAssets();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('spiggle-theme', __DIR__ . '/../resources/dist/theme.css'),
        ], 'spiggle/filament-spiggle-theme');
    }
}