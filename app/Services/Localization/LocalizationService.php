<?php


namespace App\Services\Localization;

use illuminate\Support\Facades\Facade;

class LocalizationService extends Facade
{
    protected static function getFacadeAccessor() {
        return "Localization";
    }
}
