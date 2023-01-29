<?php
/**
 * This file is part of ozon-api.
 *
 * @link     https://github.com/422520625/ozon-api
 * @document https://github.com/422520625/ozon-api/blob/master/README.md
 * @contact  422520625@qq.com
 */
namespace Trigold\OzonApi;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class App
{
    private string $baseUri;

    private string $clientId;

    private string $apiKey;

    private PendingRequest $client;

    public function __construct(string $baseUri, string $clientId, string $apiKey)
    {
        $this->baseUri = $baseUri;
        $this->clientId = $clientId;
        $this->apiKey = $apiKey;
        $this->client = $this->initHttpClient();
    }

    protected function initHttpClient(): PendingRequest
    {
        return Http::baseUrl($this->baseUri)
            ->withOptions([
                'timeout' => 10,
            ])
            ->withHeaders([
                'Client-Id' => $this->clientId,
                'Api-Key' => $this->apiKey,
            ]);
    }

    public function get(string $url, array $query = []): array
    {
        return $this->client->get($url, $query)->json();
    }
}
