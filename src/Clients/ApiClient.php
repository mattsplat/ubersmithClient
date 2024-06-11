<?php
namespace UbersmithClient\Clients;

class ApiClient extends BaseClient
{
    public function __construct($url = null, $username = null, $api_token = null)
    {
        parent::__construct($url, $username, $api_token);
    }
}