<?php


namespace UbersmithClient\Types;


class Sales extends Type
{
    // sales.opportunity_add - Add an Opportunity
    public function opportunity_add($params = [])
    {
        return $this->client('sales.opportunity_add', $params);
    }

    // sales.opportunity_list - List Opportunities
    public function opportunity_list($params = [])
    {
        return $this->client('sales.opportunity_list', $params);
    }

    // sales.opportunity_stage_list - List Opportunity Stages
    public function opportunity_stage_list($params = [])
    {
        return $this->client('sales.opportunity_stage_list', $params);
    }

    // sales.opportunity_status_list - List Opportunity Statuses
    public function opportunity_status_list($params = [])
    {
        return $this->client('sales.opportunity_status_list', $params);
    }

    // sales.opportunity_type_list - List Opportunity Types
    public function opportunity_type_list($params = [])
    {
        return $this->client('sales.opportunity_type_list', $params);
    }

    // sales.opportunity_update - Update an Opportunity
    public function opportunity_update($params = [])
    {
        return $this->client('sales.opportunity_update', $params);
    }
}