<?php


namespace UbersmithClient\Types;


class Uber extends Type
{
    // uber.api_export - Export Data
    public function api_export($params = [])
    {
        return $this->client('uber.api_export', $params);
    }

    // uber.attachment_get - Get an attachment
    public function attachment_get($params = [])
    {
        return $this->client('uber.attachment_get', $params);
    }

    // uber.attachment_list - List Attachments
    public function attachment_list($params = [])
    {
        return $this->client('uber.attachment_list', $params);
    }

    // uber.check_login - Verify a login and password uber.client_welcome_stats - Display Client Statistics
    public function check_login($params = [])
    {
        return $this->client('uber.check_login', $params);
    }

    // uber.comment_add - Add Comment
    public function comment_add($params = [])
    {
        return $this->client('uber.comment_add', $params);
    }

    // uber.comment_delete - Delete Comment
    public function comment_delete($params = [])
    {
        return $this->client('uber.comment_delete', $params);
    }

    // uber.comment_get - Get Comments
    public function comment_get($params = [])
    {
        return $this->client('uber.comment_get', $params);
    }

    // uber.comment_list - List Comments
    public function comment_list($params = [])
    {
        return $this->client('uber.comment_list', $params);
    }

    // uber.comment_update - Update Comment uber.documentation - Download API Documentation
    public function comment_update($params = [])
    {
        return $this->client('uber.comment_update', $params);
    }

    // uber.event_list - Access the Event Log
    public function event_list($params = [])
    {
        return $this->client('uber.event_list', $params);
    }

    // uber.forgot_pass - Send a Password Reminder uber.login_list - List User Logins
    public function forgot_pass($params = [])
    {
        return $this->client('uber.forgot_pass', $params);
    }

    // uber.mail_get - Get an Email From the Log
    public function mail_get($params = [])
    {
        return $this->client('uber.mail_get', $params);
    }

    // uber.mail_list - Access the Mail Log
    public function mail_list($params = [])
    {
        return $this->client('uber.mail_list', $params);
    }

    // uber.message_list - List Message Board Messages uber.metadata_bulk_get - Bulk Get Metadata Values
    public function message_list($params = [])
    {
        return $this->client('uber.message_list', $params);
    }

    // uber.metadata_get - Get Metadata Values
    public function metadata_get($params = [])
    {
        return $this->client('uber.metadata_get', $params);
    }

    // uber.method_get - Get API Method Details uber.method_list - List Available API Methods
    public function method_get($params = [])
    {
        return $this->client('uber.method_get', $params);
    }

    // uber.quick_stats - Get Quick System Stats
    public function quick_stats($params = [])
    {
        return $this->client('uber.quick_stats', $params);
    }

    // uber.quick_stats_detail - Get Detailed System Stats
    public function quick_stats_detail($params = [])
    {
        return $this->client('uber.quick_stats_detail', $params);
    }

    // uber.service_plan_get - Get Service Plan Details
    public function service_plan_get($params = [])
    {
        return $this->client('uber.service_plan_get', $params);
    }

    // uber.service_plan_list - List Service Plans
    public function service_plan_list($params = [])
    {
        return $this->client('uber.service_plan_list', $params);
    }

    // uber.user_exists - Check whether a Client Exists
    public function user_exists($params = [])
    {
        return $this->client('uber.user_exists', $params);
    }

    // uber.username_exists - Check Whether a Username Exists
    public function username_exists($params = [])
    {
        return $this->client('uber.username_exists', $params);
    }
}