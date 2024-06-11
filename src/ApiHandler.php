<?php

namespace UbersmithClient;

use UbersmithClient\Clients\ApiClient;
use UbersmithClient\Types\Client;
use UbersmithClient\Types\Device;
use UbersmithClient\Types\Order;
use UbersmithClient\Types\Sales;
use UbersmithClient\Types\Support;
use UbersmithClient\Types\Type;
use UbersmithClient\Types\Uber;

class ApiHandler
{
    public $config = [
        'url' => "",
        "username" => "",
        "api_token" => ""
    ];

    protected ApiClient $apiClient;
    protected Device $_device;
    protected Client $_client;
    protected Order $_order;
    protected Sales $_sales;
    protected Support $_support;
    protected Uber $_uber;

    static protected $_instance;

    public function __construct()
    {
        $this->apiClient = new ApiClient($this->config['url'], $this->config['username'], $this->config['api_token']);
        $this->_client = new Client($this->apiClient);
        $this->_device = new Device($this->apiClient);
        $this->_order = new Order($this->apiClient);
        $this->_sales = new Sales($this->apiClient);
        $this->_support = new Support($this->apiClient);
        $this->_uber = new Uber($this->apiClient);
        $this->_device = new Device($this->apiClient);
    }

    static public function instance(): self
    {
        if (!self::$_instance) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    static public function device(): Device
    {
        return self::instance()->_device;
    }

    static public function client(): Client
    {
        return self::instance()->_client;
    }

    static public function order(): Order
    {
        return self::instance()->_order;
    }

    static public function sales(): Sales
    {
        return self::instance()->_sales;
    }

    static public function support(): Support
    {
        return self::instance()->_support
            ;
    }

    static public function uber(): Uber
    {
        return self::instance()->_uber;
    }

}