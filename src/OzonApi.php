<?php
/**
 * This file is part of ozon-api.
 *
 * @link     https://github.com/422520625/ozon-api
 * @document https://github.com/422520625/ozon-api/blob/master/README.md
 * @contact  422520625@qq.com
 */
namespace Trigold\OzonApi;

class OzonApi
{
    protected array $config;

    private App $app;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->app = new App($config['base_uri'], $config['client_id'], $config['api_key']);
    }
    public function __call($method, $arguments)
    {
        return $this->app->{$method}(...$arguments);
    }
}
