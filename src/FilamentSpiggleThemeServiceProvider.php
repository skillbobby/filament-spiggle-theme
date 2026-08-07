<?php

namespace Spiggle\FilamentSpiggleTheme;

use Filament\Panel;
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
            ->hasAssets();
    }

    public function packageBooted(): void
    {
        // 1. Inject the compiled CSS
        FilamentAsset::register([
            Css::make('spiggle-theme', __DIR__ . '/../resources/dist/theme.css'),
        ], 'spiggle/filament-spiggle-theme');

        // 2. Force layout settings onto ALL panels in the host application
        Panel::configureUsing(function (Panel $panel) {
            $panel
                ->sidebarCollapsibleOnDesktop()
                ->collapsedSidebarWidth('5rem');
        });
    }
}
