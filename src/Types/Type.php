<?php
namespace UbersmithClient\Types;

use UbersmithClient\Clients\ApiClient;

class Type
{
    protected ApiClient $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

}