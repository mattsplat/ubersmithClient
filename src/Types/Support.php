<?php


namespace UbersmithClient\Types;


class Support extends Type
{
    // support.department_get - Get Ticket Departments
    public function department_get($params = [])
    {
        return $this->client('support.department_get', $params);
    }

    // support.department_list - List Ticket Departments
    public function department_list($params = [])
    {
        return $this->client('support.department_list', $params);
    }

    // support.ticket_count - Count Support Tickets
    public function ticket_count($params = [])
    {
        return $this->client('support.ticket_count', $params);
    }

    // support.ticket_get - Get Support Ticket Details
    public function ticket_get($params = [])
    {
        return $this->client('support.ticket_get', $params);
    }

    // support.ticket_list - Get a List of Tickets
    public function ticket_list($params = [])
    {
        return $this->client('support.ticket_list', $params);
    }

    // support.ticket_merge - Merge Tickets
    public function ticket_merge($params = [])
    {
        return $this->client('support.ticket_merge', $params);
    }

    // support.ticket_post_client_response - Post a Client Response to a Ticket
    public function ticket_post_client_response($params = [])
    {
        return $this->client('support.ticket_post_client_response', $params);
    }

    // support.ticket_post_list - Get all Posts for a Ticket
    public function ticket_post_list($params = [])
    {
        return $this->client('support.ticket_post_list', $params);
    }

    // support.ticket_post_staff_response - Post a Staff Response to a Ticket
    public function ticket_post_staff_response($params = [])
    {
        return $this->client('support.ticket_post_staff_response', $params);
    }

    // support.ticket_submit - Submit a New Ticket
    public function ticket_submit($params = [])
    {
        return $this->client('support.ticket_submit', $params);
    }

    // support.ticket_submit_outgoing - Create a New Outgoing Ticket
    public function ticket_submit_outgoing($params = [])
    {
        return $this->client('support.ticket_submit_outgoing', $params);
    }

    // support.ticket_update - Update a Ticket
    public function ticket_update($params = [])
    {
        return $this->client('support.ticket_update', $params);
    }
}