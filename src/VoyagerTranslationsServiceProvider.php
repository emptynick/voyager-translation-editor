<?php

namespace Emptynick\VoyagerTranslations;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Manager\Plugins as PluginManager;

class VoyagerTranslationsServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\Emptynick\VoyagerTranslations\VoyagerTranslations::class);
    }
}