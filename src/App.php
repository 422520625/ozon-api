<?php
/**
 * This file is part of ozon-api.
 *
 * @link     https://github.com/422520625/ozon-api
 * @document https://github.com/422520625/ozon-api/blob/master/README.md
 * @contact  422520625@qq.com
 */
namespace Trigold\OzonApi;

use Illuminate\Support\Facades\Http;

class App
{
    public function __construct()
    {
    }

    public function get(string $url, array $query = []): array
    {
        return Http::ozonApi()->get($url, $query)->json();
    }

    public function post(string $url, array $query = []): array
    {
        return Http::ozonApi()->post($url, $query)->json();
    }
}
