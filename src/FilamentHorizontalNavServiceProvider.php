<?php

namespace MwakalingaJohn\FilamentHorizontalNav;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentHorizontalNavServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-horizontal-nav';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-horizontal-nav' => __DIR__.'/../resources/dist/filament-horizontal-nav.css',
    ];

    protected array $scripts = [
        'plugin-filament-horizontal-nav' => __DIR__.'/../resources/dist/filament-horizontal-nav.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-horizontal-nav' => __DIR__ . '/../resources/dist/filament-horizontal-nav.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
