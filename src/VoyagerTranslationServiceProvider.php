<?php

namespace Emptynick\VoyagerTranslation;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Manager\Plugins as PluginManager;

class VoyagerTranslationServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\Emptynick\VoyagerTranslations\VoyagerTranslation::class);
    }
}