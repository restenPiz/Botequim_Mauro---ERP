<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    'name' => env('APP_NAME', 'Laravel'),

    'env' => env('APP_ENV', 'production'),

    'debug' => (bool) env('APP_DEBUG', false),

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    'timezone' => 'UTC',

    'locale' => 'pt_BR',

    'fallback_locale' => 'pt_BR',

    'faker_locale' => 'en_US',

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    'maintenance' => [
        'driver' => 'file',
        // 'store' => 'redis',
    ],

    'providers' => ServiceProvider::defaultProviders()->merge([
      
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        Barryvdh\DomPDF\ServiceProvider::class,

        //*Inicio do import dos alertas do realrashid
        RealRashid\SweetAlert\SweetAlertServiceProvider::class,
        Laratrust\LaratrustServiceProvider::class,
    ])->toArray(),

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
        
        //*Inicio da extensao do RealRashid Alert
        'Alert' => RealRashid\SweetAlert\Facades\Alert::class,
        'Laratrust'   => Laratrust\LaratrustFacade::class,
        'PDF' => Barryvdh\DomPDF\Facade::class,

    ])->toArray(),

];
