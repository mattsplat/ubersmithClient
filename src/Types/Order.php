<?php


namespace UbersmithClient\Types;


class Order extends Type
{
    // order.cancel - Cancel an Order
    public function cancel($params = [])
    {
        return $this->client('order.cancel', $params);
    }

    // order.client_respond - Post a Client/Lead Order Response
    public function client_respond($params = [])
    {
        return $this->client('order.client_respond', $params);
    }

    // order.coupon_get - Get Order Coupon Details
    public function coupon_get($params = [])
    {
        return $this->client('order.coupon_get', $params);
    }

    // order.create - Create a New Order
    public function create($params = [])
    {
        return $this->client('order.create', $params);
    }

    // order.get - Get Order Details
    public function get($params = [])
    {
        return $this->client('order.get', $params);
    }

    // order.list - List Orders
    public function list($params = [])
    {
        return $this->client('order.list', $params);
    }

    // order.process - Process an Order
    public function process($params = [])
    {
        return $this->client('order.process', $params);
    }

    // order.queue_list - List Order Queues
    public function queue_list($params = [])
    {
        return $this->client('order.queue_list', $params);
    }

    // order.respond - Post an Order Response
    public function respond($params = [])
    {
        return $this->client('order.respond', $params);
    }

    // order.submit - Submit An Order
    public function submit($params = [])
    {
        return $this->client('order.submit', $params);
    }

    // order.update - Update an Order
    public function update($params = [])
    {
        return $this->client('order.update', $params);
    }
}