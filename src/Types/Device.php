<?php

namespace UbersmithClient\Types;

class Device extends Type
{
    // stub methods for device
    /**
     * device.add - Add a New Device
     *
     * Parameter Name Required Default Description
     * dev_desc Device Description Y
     * label Device Label
     * parent Parent Device ID 0
     * type_id Device Type ID 0
     * rack_id Rack ID 0
     * rack_pos Position Within
     * Rack
     * height Device Height 1
     * client_id Client ID
     * service_id Service ID
     * meta_* Custom Data Metadata items may be set by passing the values as
     * additional parameters matching the metadata items
     */
    public function add($params = []): array
    {
        return $this->client->call('device.add', $params);
    }

    // device.comment_list - List a Device's Comments
    public function comment_list(string $device_id): array
    {
        return $this->client->call('device.comment_list', compact('device_id'));
    }

    // device.cpanel_add - Add a cPanel Account
    public function cpanel_add(string $device_id): array
    {
        return $this->client->call('device.cpanel_add', []);
    }

    // device.delete - Delete a Device
    public function delete()
    {
        return $this->client('device.delete', []);
    }

    // device.event_list - List Device Events
    public function event_list()
    {
        return $this->client('device.event_list', []);
    }

    // device.facility_list - List Device Facilities
    public function facility_list()
    {
        return $this->client('device.facility_list', []);
    }

    // device.get - Get a Device
    public function get()
    {
        return $this->client('device.get', []);
    }

    // device.hostname_get - Get a Device Hostname
    public function hostname_get()
    {
        return $this->client('device.hostname_get', []);
    }

    // device.ip_assign - Assign an IP to a Device
    public function ip_assign()
    {
        return $this->client('device.ip_assign', []);
    }

    // device.ip_assignment_add - Create a New IP Assignment
    public function ip_assignment_add()
    {
        return $this->client('device.ip_assignment_add', []);
    }

    // device.ip_assignment_delete - Delete a Device IP Assignment
    public function ip_assignment_delete()
    {
        return $this->client('device.ip_assignment_delete', []);
    }

    // device.ip_assignment_list - List Device IP Assignments
    public function ip_assignment_list()
    {
        return $this->client('device.ip_assignment_list', []);
    }

    // device.ip_assignment_update - Update a Device IP Assignment
    public function ip_assignment_update()
    {
        return $this->client('device.ip_assignment_update', []);
    }

    // device.ip_get_available - List Available Device IPs
    public function ip_get_available()
    {
        return $this->client('device.ip_get_available', []);
    }

    // device.ip_get_unassigned - Get Unassigned Device IPs
    public function ip_get_unassigned()
    {
        return $this->client('device.ip_get_unassigned', []);
    }

    // device.ip_group_add - Add a Device IP Group
    public function ip_group_add()
    {
        return $this->client('device.ip_group_add', []);
    }

    // device.ip_group_delete - Delete a Device IP Group
    public function ip_group_delete()
    {
        return $this->client('device.ip_group_delete', []);
    }

    // device.ip_group_list - List a Device IP Group
    public function ip_group_list()
    {
        return $this->client('device.ip_group_list', []);
    }

    // device.ip_group_update - Update a Device IP Group
    public function ip_group_update()
    {
        return $this->client('device.ip_group_update', []);
    }

    // device.ip_lookup - Look Up a Device IP
    public function ip_lookup()
    {
        return $this->client('device.ip_lookup', []);
    }

    // device.ip_unassign - Unassign a Device IP device.list - List Devices
    public function ip_unassign()
    {
        return $this->client('device.ip_unassign', []);
    }

    // device.module_call - Call a Device Module Function
    public function module_call()
    {
        return $this->client('device.module_call', []);
    }

    // device.module_call_aggregate - Call an Aggregate Device Module Function
    public function module_call_aggregate()
    {
        return $this->client('device.module_call_aggregate', []);
    }

    // device.module_graph - Generate Device Module Graph
    public function module_graph()
    {
        return $this->client('device.module_graph', []);
    }

    // device.monitor_add - Add a New Device Monitor
    public function monitor_add()
    {
        return $this->client('device.monitor_add', []);
    }

    // device.monitor_delete - Delete a Device Monitor
    public function monitor_delete()
    {
        return $this->client('device.monitor_delete', []);
    }

    // device.monitor_disable - Disable a Device Monitor
    public function monitor_disable()
    {
        return $this->client('device.monitor_disable', []);
    }

    // device.monitor_enable - Enable a Device Monitor
    public function monitor_enable()
    {
        return $this->client('device.monitor_enable', []);
    }

    // device.monitor_list - List Device Monitors
    public function monitor_list()
    {
        return $this->client('device.monitor_list', []);
    }

    // device.monitor_update - Update a Device Monitor
    public function monitor_update()
    {
        return $this->client('device.monitor_update', []);
    }

    // device.reboot - Set a Device's Power State
    public function reboot()
    {
        return $this->client('device.reboot', []);
    }

    // device.reboot_graph - Get a Reboot Graph
    public function reboot_graph()
    {
        return $this->client('device.reboot_graph', []);
    }

    // device.tag - Tag a Device
    public function tag()
    {
        return $this->client('device.tag', []);
    }

    // device.type_list - List Device Types
    public function type_list()
    {
        return $this->client('device.type_list', []);
    }

    // device.untag - Untag a Device
    public function untag()
    {
        return $this->client('device.untag', []);
    }

    // device.update - Update a Device
    public function update()
    {
        return $this->client('device.update', []);
    }

    // device.vlan_get_available - List Available VLANs
    public function vlan_get_available()
    {
        return $this->client('device.vlan_get_available', []);
    }
}