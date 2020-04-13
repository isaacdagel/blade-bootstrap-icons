<?php

namespace IsaacDagel\BladeBootstrapIcons;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeBootstrapIconsServiceProvider extends ServiceProvider
{
    private const PATH = __DIR__ . "/../resources/views/components";

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(self::PATH, 'bootstrap-icons');

        collect(scandir(self::PATH))->each(function ($component) {
            if ($iconName = strstr($component, '.blade.php', true) ?: null) {
                Blade::component("bootstrap-icons::$iconName", "bootstrap-icon-$iconName");
            }
        });
    }
}
