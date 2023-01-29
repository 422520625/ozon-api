<?php
/**
 * This file is part of ozon-api.
 *
 * @link     https://github.com/422520625/ozon-api
 * @document https://github.com/422520625/ozon-api/blob/master/README.md
 * @contact  422520625@qq.com
 */
namespace Trigold\OzonApi\Facades;

use Illuminate\Support\Facades\Facade;

class OzonApi extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return OzonApi::class;
    }
}
