<?php

namespace Emptynick\VoyagerTranslation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Voyager\Admin\Classes\UserMenuItem;
use Voyager\Admin\Contracts\Plugins\GenericPlugin;
use Voyager\Admin\Contracts\Plugins\Features\Provider\{MenuItems, JS, ProtectedRoutes};
use Voyager\Admin\Manager\Menu as MenuManager;

class VoyagerTranslation implements GenericPlugin, ProtectedRoutes, MenuItems, JS
{
    public $name = 'Voyager translation editor';
    public $description = 'Manage and edit translations in Voyager II';
    public $repository = 'emptynick/voyager-translation-editor';
    public $website = 'https://github.com/emptynick/voyager-translation-editor';

    public function provideProtectedRoutes(): void
    {
        Inertia::setRootView('voyager::app');

        Route::get('translations-editor', function () {
            return Inertia::render('voyager-translations-editor')->withViewData('title', 'Translations Editor');
        })->name('voyager-translations-editor');

        Route::post('translations-editor', function (Request $request) {
            
        });
    }

    public function provideJS(): string
    {
        return file_get_contents(realpath(dirname(__DIR__, 1).'/dist/voyager-translations-editor.umd.js'));
    }

    public function provideMenuItems(MenuManager $menumanager): void
    {
        $menumanager->addItems(
            (new UserMenuItem('Translations Editor'))->route('voyager.voyager-translations-editor')
        );
    }
}
