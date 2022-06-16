<?php


namespace App\Services\Localization;
use illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider
{
    public function register() {
        $this->app->bind("Localization", 'App\Services\Localization\Localization');
    }
}
