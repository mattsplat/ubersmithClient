<?php


namespace UbersmithClient\Types;


class Client extends Type
{
    // client.ach_add - Add a New Bank Account client.ach_delete - Delete a Bank Account
    public function ach_add($params = [])
    {
        return $this->client('client.ach_add', $params);
    }

    // client.ach_update - Update a Bank Account client.add - Add a New Client
    public function ach_update($params = [])
    {
        return $this->client('client.ach_update', $params);
    }

    // client.cc_add - Add a New Credit Card client.cc_delete - Delete a Credit Card
    public function cc_add($params = [])
    {
        return $this->client('client.cc_add', $params);
    }

    // client.cc_update - Update a Credit Card
    public function cc_update($params = [])
    {
        return $this->client('client.cc_update', $params);
    }

    // client.comment_list - List a Client's Comments client.contact_add - Add a New Contact
    public function comment_list($params = [])
    {
        return $this->client('client.comment_list', $params);
    }

    // client.contact_delete - Delete a Contact client.contact_get - Get Contact Details
    public function contact_delete($params = [])
    {
        return $this->client('client.contact_delete', $params);
    }

    // client.contact_list - List a Client's Contacts client.contact_update - Update a Contact
    public function contact_list($params = [])
    {
        return $this->client('client.contact_list', $params);
    }

    // client.count - Count Active Clients
    public function count($params = [])
    {
        return $this->client('client.count', $params);
    }

    // client.credit_add - Add an Account Credit client.credit_comment_list - List a Credit's Comments
    public function credit_add($params = [])
    {
        return $this->client('client.credit_add', $params);
    }

    // client.credit_deactivate - Deactivate an Account Credit
    public function credit_deactivate($params = [])
    {
        return $this->client('client.credit_deactivate', $params);
    }

    // client.credit_list - List a Client's Credits client.deactivate - Deactivate a Client
    public function credit_list($params = [])
    {
        return $this->client('client.credit_list', $params);
    }

    // client.domain_add - Add a Domain
    public function domain_add($params = [])
    {
        return $this->client('client.domain_add', $params);
    }

    // client.domain_list - List a Client's Domains client.domain_lookup - Look Up a Domain
    public function domain_list($params = [])
    {
        return $this->client('client.domain_list', $params);
    }

    // client.domain_register - Register a Domain client.domain_transfer - Transfer a Domain
    public function domain_register($params = [])
    {
        return $this->client('client.domain_register', $params);
    }

    // client.get - Get Client Details
    public function get($params = [])
    {
        return $this->client('client.get', $params);
    }

    // client.invoice_charge - Charge an Invoice client.invoice_count - Count Invoices
    public function invoice_charge($params = [])
    {
        return $this->client('client.invoice_charge', $params);
    }

    // client.invoice_disregard - Disregard an Invoice
    public function invoice_disregard($params = [])
    {
        return $this->client('client.invoice_disregard', $params);
    }

    // client.invoice_generate - Generate an Invoice
    public function invoice_generate($params = [])
    {
        return $this->client('client.invoice_generate', $params);
    }

    // client.invoice_get - Get an Invoice
    public function invoice_get($params = [])
    {
        return $this->client('client.invoice_get', $params);
    }

    // client.invoice_list - List a Client's Invoices
    public function invoice_list($params = [])
    {
        return $this->client('client.invoice_list', $params);
    }

    // client.invoice_payments - List an Invoice's Payments
    public function invoice_payments($params = [])
    {
        return $this->client('client.invoice_payments', $params);
    }

    // client.invoice_post_gw_payment - Record a Payment
    public function invoice_post_gw_payment($params = [])
    {
        return $this->client('client.invoice_post_gw_payment', $params);
    }

    // client.latest_client - Get the Latest Client
    public function latest_client($params = [])
    {
        return $this->client('client.latest_client', $params);
    }

    // client.list - List Clients
    public function list($params = [])
    {
        return $this->client('client.list', $params);
    }

    // client.lookup - Look Up a Client
    public function lookup($params = [])
    {
        return $this->client('client.lookup', $params);
    }

    // client.metadata_get - Get a Client's Metadata
    public function metadata_get($params = [])
    {
        return $this->client('client.metadata_get', $params);
    }

    // client.metadata_single - Get a Client's Metadata Value
    public function metadata_single($params = [])
    {
        return $this->client('client.metadata_single', $params);
    }

    // client.payment_method_list - List a Client's Payment Methods
    public function payment_method_list($params = [])
    {
        return $this->client('client.payment_method_list', $params);
    }

    // client.reactivate - Reactivate a Client
    public function reactivate($params = [])
    {
        return $this->client('client.reactivate', $params);
    }

    // client.renewal_list - List Services for Renewal
    public function renewal_list($params = [])
    {
        return $this->client('client.renewal_list', $params);
    }

    // client.send_welcome - Send a Welcome Letter
    public function send_welcome($params = [])
    {
        return $this->client('client.send_welcome', $params);
    }

    // client.service_add - Add a New Service
    public function service_add($params = [])
    {
        return $this->client('client.service_add', $params);
    }

    // client.service_comment_list - List a Service's Comments
    public function service_comment_list($params = [])
    {
        return $this->client('client.service_comment_list', $params);
    }

    // client.service_deactivate - Deactivate a Service
    public function service_deactivate($params = [])
    {
        return $this->client('client.service_deactivate', $params);
    }

    // client.service_get - Get a Service
    public function service_get($params = [])
    {
        return $this->client('client.service_get', $params);
    }

    // client.service_list - List a Client's Services
    public function service_list($params = [])
    {
        return $this->client('client.service_list', $params);
    }

    // client.service_metadata_get - Get a Service's Metadata
    public function service_metadata_get($params = [])
    {
        return $this->client('client.service_metadata_get', $params);
    }

    // client.service_metadata_single - Get a Service's Metadata Value
    public function service_metadata_single($params = [])
    {
        return $this->client('client.service_metadata_single', $params);
    }

    // client.service_module_call - Call a Service Module Function
    public function service_module_call($params = [])
    {
        return $this->client('client.service_module_call', $params);
    }

    // client.service_prorate - Prorate a Service
    public function service_prorate($params = [])
    {
        return $this->client('client.service_prorate', $params);
    }

    // client.service_update - Update a Service
    public function service_update($params = [])
    {
        return $this->client('client.service_update', $params);
    }

    // client.set_login - Set a Client's Login
    public function set_login($params = [])
    {
        return $this->client('client.set_login', $params);
    }

    // client.update - Update a Client
    public function update($params = [])
    {
        return $this->client('client.update', $params);
    }
}