<?php
/**
 * This file is part of ozon-api.
 *
 * @link     https://github.com/422520625/ozon-api
 * @document https://github.com/422520625/ozon-api/blob/master/README.md
 * @contact  422520625@qq.com
 */
namespace Trigold\OzonApi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class OzonApiServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/e-commerce.php', 'e-commerce');
        $this->app->singleton(OzonApi::class, function ($app) {
            return new OzonApi(config('e-commerce.ozon'));
        });
    }
}
