<?php
namespace Trigold\OzonApi;

use Illuminate\Support\ServiceProvider;

class OzonApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/ozon-api.php' => config_path('ozon-api.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ozon-api.php', 'ozon-api');
    }
}