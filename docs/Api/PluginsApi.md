# OpenAPI\Client\PluginsApi

All URIs are relative to https://netbox.demodash.at/api/schema, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pluginsPrometheusSdDevicesList()**](PluginsApi.md#pluginsPrometheusSdDevicesList) | **GET** /api/plugins/prometheus-sd/devices/ |  |
| [**pluginsPrometheusSdIpAddressesList()**](PluginsApi.md#pluginsPrometheusSdIpAddressesList) | **GET** /api/plugins/prometheus-sd/ip-addresses/ |  |
| [**pluginsPrometheusSdServicesList()**](PluginsApi.md#pluginsPrometheusSdServicesList) | **GET** /api/plugins/prometheus-sd/services/ |  |
| [**pluginsPrometheusSdVirtualMachinesList()**](PluginsApi.md#pluginsPrometheusSdVirtualMachinesList) | **GET** /api/plugins/prometheus-sd/virtual-machines/ |  |


## `pluginsPrometheusSdDevicesList()`

```php
pluginsPrometheusSdDevicesList($airflow, $airflow__n, $asset_tag, $asset_tag__empty, $asset_tag__ic, $asset_tag__ie, $asset_tag__iew, $asset_tag__isw, $asset_tag__n, $asset_tag__nic, $asset_tag__nie, $asset_tag__niew, $asset_tag__nisw, $cluster_group, $cluster_group__n, $cluster_group_id, $cluster_group_id__n, $cluster_id, $cluster_id__n, $config_template_id, $config_template_id__n, $console_port_count, $console_port_count__empty, $console_port_count__gt, $console_port_count__gte, $console_port_count__lt, $console_port_count__lte, $console_port_count__n, $console_ports, $console_server_port_count, $console_server_port_count__empty, $console_server_port_count__gt, $console_server_port_count__gte, $console_server_port_count__lt, $console_server_port_count__lte, $console_server_port_count__n, $console_server_ports, $contact, $contact__n, $contact_group, $contact_group__n, $contact_role, $contact_role__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device_bay_count, $device_bay_count__empty, $device_bay_count__gt, $device_bay_count__gte, $device_bay_count__lt, $device_bay_count__lte, $device_bay_count__n, $device_bays, $device_type, $device_type__n, $device_type_id, $device_type_id__n, $face, $face__n, $front_port_count, $front_port_count__empty, $front_port_count__gt, $front_port_count__gte, $front_port_count__lt, $front_port_count__lte, $front_port_count__n, $has_oob_ip, $has_primary_ip, $has_virtual_device_context, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface_count, $interface_count__empty, $interface_count__gt, $interface_count__gte, $interface_count__lt, $interface_count__lte, $interface_count__n, $interfaces, $inventory_item_count, $inventory_item_count__empty, $inventory_item_count__gt, $inventory_item_count__gte, $inventory_item_count__lt, $inventory_item_count__lte, $inventory_item_count__n, $is_full_depth, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $latitude, $latitude__empty, $latitude__gt, $latitude__gte, $latitude__lt, $latitude__lte, $latitude__n, $local_context_data, $location_id, $location_id__n, $longitude, $longitude__empty, $longitude__gt, $longitude__gte, $longitude__lt, $longitude__lte, $longitude__n, $mac_address, $mac_address__ic, $mac_address__ie, $mac_address__iew, $mac_address__isw, $mac_address__n, $mac_address__nic, $mac_address__nie, $mac_address__niew, $mac_address__nisw, $manufacturer, $manufacturer__n, $manufacturer_id, $manufacturer_id__n, $model, $model__n, $modified_by_request, $module_bay_count, $module_bay_count__empty, $module_bay_count__gt, $module_bay_count__gte, $module_bay_count__lt, $module_bay_count__lte, $module_bay_count__n, $module_bays, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $oob_ip_id, $oob_ip_id__n, $ordering, $parent_bay_id, $parent_bay_id__n, $parent_device_id, $parent_device_id__n, $pass_through_ports, $platform, $platform__n, $platform_id, $platform_id__n, $position, $position__empty, $position__gt, $position__gte, $position__lt, $position__lte, $position__n, $power_outlet_count, $power_outlet_count__empty, $power_outlet_count__gt, $power_outlet_count__gte, $power_outlet_count__lt, $power_outlet_count__lte, $power_outlet_count__n, $power_outlets, $power_port_count, $power_port_count__empty, $power_port_count__gt, $power_port_count__gte, $power_port_count__lt, $power_port_count__lte, $power_port_count__n, $power_ports, $primary_ip4_id, $primary_ip4_id__n, $primary_ip6_id, $primary_ip6_id__n, $q, $rack_id, $rack_id__n, $rear_port_count, $rear_port_count__empty, $rear_port_count__gt, $rear_port_count__gte, $rear_port_count__lt, $rear_port_count__lte, $rear_port_count__n, $region, $region__n, $region_id, $region_id__n, $role, $role__n, $role_id, $role_id__n, $serial, $serial__empty, $serial__ic, $serial__ie, $serial__iew, $serial__isw, $serial__n, $serial__nic, $serial__nie, $serial__niew, $serial__nisw, $site, $site__n, $site_group, $site_group__n, $site_group_id, $site_group_id__n, $site_id, $site_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vc_position, $vc_position__empty, $vc_position__gt, $vc_position__gte, $vc_position__lt, $vc_position__lte, $vc_position__n, $vc_priority, $vc_priority__empty, $vc_priority__gt, $vc_priority__gte, $vc_priority__lt, $vc_priority__lte, $vc_priority__n, $virtual_chassis_id, $virtual_chassis_id__n, $virtual_chassis_member): \OpenAPI\Client\Model\PrometheusDevice[]
```



Get a list of device objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$airflow = 'airflow_example'; // string | * `front-to-rear` - Front to rear * `rear-to-front` - Rear to front * `left-to-right` - Left to right * `right-to-left` - Right to left * `side-to-rear` - Side to rear * `passive` - Passive * `mixed` - Mixed
$airflow__n = 'airflow__n_example'; // string | * `front-to-rear` - Front to rear * `rear-to-front` - Rear to front * `left-to-right` - Left to right * `right-to-left` - Right to left * `side-to-rear` - Side to rear * `passive` - Passive * `mixed` - Mixed
$asset_tag = array('asset_tag_example'); // string[]
$asset_tag__empty = True; // bool
$asset_tag__ic = array('asset_tag__ic_example'); // string[]
$asset_tag__ie = array('asset_tag__ie_example'); // string[]
$asset_tag__iew = array('asset_tag__iew_example'); // string[]
$asset_tag__isw = array('asset_tag__isw_example'); // string[]
$asset_tag__n = array('asset_tag__n_example'); // string[]
$asset_tag__nic = array('asset_tag__nic_example'); // string[]
$asset_tag__nie = array('asset_tag__nie_example'); // string[]
$asset_tag__niew = array('asset_tag__niew_example'); // string[]
$asset_tag__nisw = array('asset_tag__nisw_example'); // string[]
$cluster_group = array('cluster_group_example'); // string[] | Cluster group (slug)
$cluster_group__n = array('cluster_group__n_example'); // string[] | Cluster group (slug)
$cluster_group_id = array(56); // int[] | Cluster group (ID)
$cluster_group_id__n = array(56); // int[] | Cluster group (ID)
$cluster_id = array(56); // int[] | VM cluster (ID)
$cluster_id__n = array(56); // int[] | VM cluster (ID)
$config_template_id = array(56); // int[] | Config template (ID)
$config_template_id__n = array(56); // int[] | Config template (ID)
$console_port_count = array(56); // int[]
$console_port_count__empty = True; // bool
$console_port_count__gt = array(56); // int[]
$console_port_count__gte = array(56); // int[]
$console_port_count__lt = array(56); // int[]
$console_port_count__lte = array(56); // int[]
$console_port_count__n = array(56); // int[]
$console_ports = True; // bool | Has console ports
$console_server_port_count = array(56); // int[]
$console_server_port_count__empty = True; // bool
$console_server_port_count__gt = array(56); // int[]
$console_server_port_count__gte = array(56); // int[]
$console_server_port_count__lt = array(56); // int[]
$console_server_port_count__lte = array(56); // int[]
$console_server_port_count__n = array(56); // int[]
$console_server_ports = True; // bool | Has console server ports
$contact = array(56); // int[] | Contact
$contact__n = array(56); // int[] | Contact
$contact_group = array(56); // int[] | Contact group
$contact_group__n = array(56); // int[] | Contact group
$contact_role = array(56); // int[] | Contact Role
$contact_role__n = array(56); // int[] | Contact Role
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
$description = array('description_example'); // string[]
$description__empty = True; // bool
$description__ic = array('description__ic_example'); // string[]
$description__ie = array('description__ie_example'); // string[]
$description__iew = array('description__iew_example'); // string[]
$description__isw = array('description__isw_example'); // string[]
$description__n = array('description__n_example'); // string[]
$description__nic = array('description__nic_example'); // string[]
$description__nie = array('description__nie_example'); // string[]
$description__niew = array('description__niew_example'); // string[]
$description__nisw = array('description__nisw_example'); // string[]
$device_bay_count = array(56); // int[]
$device_bay_count__empty = True; // bool
$device_bay_count__gt = array(56); // int[]
$device_bay_count__gte = array(56); // int[]
$device_bay_count__lt = array(56); // int[]
$device_bay_count__lte = array(56); // int[]
$device_bay_count__n = array(56); // int[]
$device_bays = True; // bool | Has device bays
$device_type = array('device_type_example'); // string[] | Device type (slug)
$device_type__n = array('device_type__n_example'); // string[] | Device type (slug)
$device_type_id = array(56); // int[] | Device type (ID)
$device_type_id__n = array(56); // int[] | Device type (ID)
$face = 'face_example'; // string | * `front` - Front * `rear` - Rear
$face__n = 'face__n_example'; // string | * `front` - Front * `rear` - Rear
$front_port_count = array(56); // int[]
$front_port_count__empty = True; // bool
$front_port_count__gt = array(56); // int[]
$front_port_count__gte = array(56); // int[]
$front_port_count__lt = array(56); // int[]
$front_port_count__lte = array(56); // int[]
$front_port_count__n = array(56); // int[]
$has_oob_ip = True; // bool | Has an out-of-band IP
$has_primary_ip = True; // bool | Has a primary IP
$has_virtual_device_context = True; // bool | Has virtual device context
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$interface_count = array(56); // int[]
$interface_count__empty = True; // bool
$interface_count__gt = array(56); // int[]
$interface_count__gte = array(56); // int[]
$interface_count__lt = array(56); // int[]
$interface_count__lte = array(56); // int[]
$interface_count__n = array(56); // int[]
$interfaces = True; // bool | Has interfaces
$inventory_item_count = array(56); // int[]
$inventory_item_count__empty = True; // bool
$inventory_item_count__gt = array(56); // int[]
$inventory_item_count__gte = array(56); // int[]
$inventory_item_count__lt = array(56); // int[]
$inventory_item_count__lte = array(56); // int[]
$inventory_item_count__n = array(56); // int[]
$is_full_depth = True; // bool | Is full depth
$last_updated = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$latitude = array(3.4); // float[]
$latitude__empty = True; // bool
$latitude__gt = array(3.4); // float[]
$latitude__gte = array(3.4); // float[]
$latitude__lt = array(3.4); // float[]
$latitude__lte = array(3.4); // float[]
$latitude__n = array(3.4); // float[]
$local_context_data = True; // bool | Has local config context data
$location_id = array(56); // int[] | Location (ID)
$location_id__n = array(56); // int[] | Location (ID)
$longitude = array(3.4); // float[]
$longitude__empty = True; // bool
$longitude__gt = array(3.4); // float[]
$longitude__gte = array(3.4); // float[]
$longitude__lt = array(3.4); // float[]
$longitude__lte = array(3.4); // float[]
$longitude__n = array(3.4); // float[]
$mac_address = array('mac_address_example'); // string[]
$mac_address__ic = array('mac_address__ic_example'); // string[]
$mac_address__ie = array('mac_address__ie_example'); // string[]
$mac_address__iew = array('mac_address__iew_example'); // string[]
$mac_address__isw = array('mac_address__isw_example'); // string[]
$mac_address__n = array('mac_address__n_example'); // string[]
$mac_address__nic = array('mac_address__nic_example'); // string[]
$mac_address__nie = array('mac_address__nie_example'); // string[]
$mac_address__niew = array('mac_address__niew_example'); // string[]
$mac_address__nisw = array('mac_address__nisw_example'); // string[]
$manufacturer = array('manufacturer_example'); // string[] | Manufacturer (slug)
$manufacturer__n = array('manufacturer__n_example'); // string[] | Manufacturer (slug)
$manufacturer_id = array(56); // int[] | Manufacturer (ID)
$manufacturer_id__n = array(56); // int[] | Manufacturer (ID)
$model = array('model_example'); // string[] | Device model (slug)
$model__n = array('model__n_example'); // string[] | Device model (slug)
$modified_by_request = 'modified_by_request_example'; // string
$module_bay_count = array(56); // int[]
$module_bay_count__empty = True; // bool
$module_bay_count__gt = array(56); // int[]
$module_bay_count__gte = array(56); // int[]
$module_bay_count__lt = array(56); // int[]
$module_bay_count__lte = array(56); // int[]
$module_bay_count__n = array(56); // int[]
$module_bays = True; // bool | Has module bays
$name = array('name_example'); // string[]
$name__empty = True; // bool
$name__ic = array('name__ic_example'); // string[]
$name__ie = array('name__ie_example'); // string[]
$name__iew = array('name__iew_example'); // string[]
$name__isw = array('name__isw_example'); // string[]
$name__n = array('name__n_example'); // string[]
$name__nic = array('name__nic_example'); // string[]
$name__nie = array('name__nie_example'); // string[]
$name__niew = array('name__niew_example'); // string[]
$name__nisw = array('name__nisw_example'); // string[]
$oob_ip_id = array(56); // int[] | OOB IP (ID)
$oob_ip_id__n = array(56); // int[] | OOB IP (ID)
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$parent_bay_id = array(56); // int[] | Parent bay (ID)
$parent_bay_id__n = array(56); // int[] | Parent bay (ID)
$parent_device_id = array(56); // int[] | Parent Device (ID)
$parent_device_id__n = array(56); // int[] | Parent Device (ID)
$pass_through_ports = True; // bool | Has pass-through ports
$platform = array('platform_example'); // string[] | Platform (slug)
$platform__n = array('platform__n_example'); // string[] | Platform (slug)
$platform_id = array(56); // int[] | Platform (ID)
$platform_id__n = array(56); // int[] | Platform (ID)
$position = array(3.4); // float[]
$position__empty = True; // bool
$position__gt = array(3.4); // float[]
$position__gte = array(3.4); // float[]
$position__lt = array(3.4); // float[]
$position__lte = array(3.4); // float[]
$position__n = array(3.4); // float[]
$power_outlet_count = array(56); // int[]
$power_outlet_count__empty = True; // bool
$power_outlet_count__gt = array(56); // int[]
$power_outlet_count__gte = array(56); // int[]
$power_outlet_count__lt = array(56); // int[]
$power_outlet_count__lte = array(56); // int[]
$power_outlet_count__n = array(56); // int[]
$power_outlets = True; // bool | Has power outlets
$power_port_count = array(56); // int[]
$power_port_count__empty = True; // bool
$power_port_count__gt = array(56); // int[]
$power_port_count__gte = array(56); // int[]
$power_port_count__lt = array(56); // int[]
$power_port_count__lte = array(56); // int[]
$power_port_count__n = array(56); // int[]
$power_ports = True; // bool | Has power ports
$primary_ip4_id = array(56); // int[] | Primary IPv4 (ID)
$primary_ip4_id__n = array(56); // int[] | Primary IPv4 (ID)
$primary_ip6_id = array(56); // int[] | Primary IPv6 (ID)
$primary_ip6_id__n = array(56); // int[] | Primary IPv6 (ID)
$q = 'q_example'; // string | Search
$rack_id = array(56); // int[] | Rack (ID)
$rack_id__n = array(56); // int[] | Rack (ID)
$rear_port_count = array(56); // int[]
$rear_port_count__empty = True; // bool
$rear_port_count__gt = array(56); // int[]
$rear_port_count__gte = array(56); // int[]
$rear_port_count__lt = array(56); // int[]
$rear_port_count__lte = array(56); // int[]
$rear_port_count__n = array(56); // int[]
$region = array(56); // int[] | Region (slug)
$region__n = array(56); // int[] | Region (slug)
$region_id = array(56); // int[] | Region (ID)
$region_id__n = array(56); // int[] | Region (ID)
$role = array('role_example'); // string[] | Role (slug)
$role__n = array('role__n_example'); // string[] | Role (slug)
$role_id = array(56); // int[] | Role (ID)
$role_id__n = array(56); // int[] | Role (ID)
$serial = array('serial_example'); // string[]
$serial__empty = True; // bool
$serial__ic = array('serial__ic_example'); // string[]
$serial__ie = array('serial__ie_example'); // string[]
$serial__iew = array('serial__iew_example'); // string[]
$serial__isw = array('serial__isw_example'); // string[]
$serial__n = array('serial__n_example'); // string[]
$serial__nic = array('serial__nic_example'); // string[]
$serial__nie = array('serial__nie_example'); // string[]
$serial__niew = array('serial__niew_example'); // string[]
$serial__nisw = array('serial__nisw_example'); // string[]
$site = array('site_example'); // string[] | Site name (slug)
$site__n = array('site__n_example'); // string[] | Site name (slug)
$site_group = array(56); // int[] | Site group (slug)
$site_group__n = array(56); // int[] | Site group (slug)
$site_group_id = array(56); // int[] | Site group (ID)
$site_group_id__n = array(56); // int[] | Site group (ID)
$site_id = array(56); // int[] | Site (ID)
$site_id__n = array(56); // int[] | Site (ID)
$status = array('status_example'); // string[]
$status__n = array('status__n_example'); // string[]
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string
$vc_position = array(56); // int[]
$vc_position__empty = True; // bool
$vc_position__gt = array(56); // int[]
$vc_position__gte = array(56); // int[]
$vc_position__lt = array(56); // int[]
$vc_position__lte = array(56); // int[]
$vc_position__n = array(56); // int[]
$vc_priority = array(56); // int[]
$vc_priority__empty = True; // bool
$vc_priority__gt = array(56); // int[]
$vc_priority__gte = array(56); // int[]
$vc_priority__lt = array(56); // int[]
$vc_priority__lte = array(56); // int[]
$vc_priority__n = array(56); // int[]
$virtual_chassis_id = array(56); // int[] | Virtual chassis (ID)
$virtual_chassis_id__n = array(56); // int[] | Virtual chassis (ID)
$virtual_chassis_member = True; // bool | Is a virtual chassis member

try {
    $result = $apiInstance->pluginsPrometheusSdDevicesList($airflow, $airflow__n, $asset_tag, $asset_tag__empty, $asset_tag__ic, $asset_tag__ie, $asset_tag__iew, $asset_tag__isw, $asset_tag__n, $asset_tag__nic, $asset_tag__nie, $asset_tag__niew, $asset_tag__nisw, $cluster_group, $cluster_group__n, $cluster_group_id, $cluster_group_id__n, $cluster_id, $cluster_id__n, $config_template_id, $config_template_id__n, $console_port_count, $console_port_count__empty, $console_port_count__gt, $console_port_count__gte, $console_port_count__lt, $console_port_count__lte, $console_port_count__n, $console_ports, $console_server_port_count, $console_server_port_count__empty, $console_server_port_count__gt, $console_server_port_count__gte, $console_server_port_count__lt, $console_server_port_count__lte, $console_server_port_count__n, $console_server_ports, $contact, $contact__n, $contact_group, $contact_group__n, $contact_role, $contact_role__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device_bay_count, $device_bay_count__empty, $device_bay_count__gt, $device_bay_count__gte, $device_bay_count__lt, $device_bay_count__lte, $device_bay_count__n, $device_bays, $device_type, $device_type__n, $device_type_id, $device_type_id__n, $face, $face__n, $front_port_count, $front_port_count__empty, $front_port_count__gt, $front_port_count__gte, $front_port_count__lt, $front_port_count__lte, $front_port_count__n, $has_oob_ip, $has_primary_ip, $has_virtual_device_context, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface_count, $interface_count__empty, $interface_count__gt, $interface_count__gte, $interface_count__lt, $interface_count__lte, $interface_count__n, $interfaces, $inventory_item_count, $inventory_item_count__empty, $inventory_item_count__gt, $inventory_item_count__gte, $inventory_item_count__lt, $inventory_item_count__lte, $inventory_item_count__n, $is_full_depth, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $latitude, $latitude__empty, $latitude__gt, $latitude__gte, $latitude__lt, $latitude__lte, $latitude__n, $local_context_data, $location_id, $location_id__n, $longitude, $longitude__empty, $longitude__gt, $longitude__gte, $longitude__lt, $longitude__lte, $longitude__n, $mac_address, $mac_address__ic, $mac_address__ie, $mac_address__iew, $mac_address__isw, $mac_address__n, $mac_address__nic, $mac_address__nie, $mac_address__niew, $mac_address__nisw, $manufacturer, $manufacturer__n, $manufacturer_id, $manufacturer_id__n, $model, $model__n, $modified_by_request, $module_bay_count, $module_bay_count__empty, $module_bay_count__gt, $module_bay_count__gte, $module_bay_count__lt, $module_bay_count__lte, $module_bay_count__n, $module_bays, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $oob_ip_id, $oob_ip_id__n, $ordering, $parent_bay_id, $parent_bay_id__n, $parent_device_id, $parent_device_id__n, $pass_through_ports, $platform, $platform__n, $platform_id, $platform_id__n, $position, $position__empty, $position__gt, $position__gte, $position__lt, $position__lte, $position__n, $power_outlet_count, $power_outlet_count__empty, $power_outlet_count__gt, $power_outlet_count__gte, $power_outlet_count__lt, $power_outlet_count__lte, $power_outlet_count__n, $power_outlets, $power_port_count, $power_port_count__empty, $power_port_count__gt, $power_port_count__gte, $power_port_count__lt, $power_port_count__lte, $power_port_count__n, $power_ports, $primary_ip4_id, $primary_ip4_id__n, $primary_ip6_id, $primary_ip6_id__n, $q, $rack_id, $rack_id__n, $rear_port_count, $rear_port_count__empty, $rear_port_count__gt, $rear_port_count__gte, $rear_port_count__lt, $rear_port_count__lte, $rear_port_count__n, $region, $region__n, $region_id, $region_id__n, $role, $role__n, $role_id, $role_id__n, $serial, $serial__empty, $serial__ic, $serial__ie, $serial__iew, $serial__isw, $serial__n, $serial__nic, $serial__nie, $serial__niew, $serial__nisw, $site, $site__n, $site_group, $site_group__n, $site_group_id, $site_group_id__n, $site_id, $site_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vc_position, $vc_position__empty, $vc_position__gt, $vc_position__gte, $vc_position__lt, $vc_position__lte, $vc_position__n, $vc_priority, $vc_priority__empty, $vc_priority__gt, $vc_priority__gte, $vc_priority__lt, $vc_priority__lte, $vc_priority__n, $virtual_chassis_id, $virtual_chassis_id__n, $virtual_chassis_member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->pluginsPrometheusSdDevicesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **airflow** | **string**| * &#x60;front-to-rear&#x60; - Front to rear * &#x60;rear-to-front&#x60; - Rear to front * &#x60;left-to-right&#x60; - Left to right * &#x60;right-to-left&#x60; - Right to left * &#x60;side-to-rear&#x60; - Side to rear * &#x60;passive&#x60; - Passive * &#x60;mixed&#x60; - Mixed | [optional] |
| **airflow__n** | **string**| * &#x60;front-to-rear&#x60; - Front to rear * &#x60;rear-to-front&#x60; - Rear to front * &#x60;left-to-right&#x60; - Left to right * &#x60;right-to-left&#x60; - Right to left * &#x60;side-to-rear&#x60; - Side to rear * &#x60;passive&#x60; - Passive * &#x60;mixed&#x60; - Mixed | [optional] |
| **asset_tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **asset_tag__empty** | **bool**|  | [optional] |
| **asset_tag__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **asset_tag__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **asset_tag__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **asset_tag__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **asset_tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **asset_tag__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **asset_tag__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **asset_tag__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **asset_tag__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **cluster_group** | [**string[]**](../Model/string.md)| Cluster group (slug) | [optional] |
| **cluster_group__n** | [**string[]**](../Model/string.md)| Cluster group (slug) | [optional] |
| **cluster_group_id** | [**int[]**](../Model/int.md)| Cluster group (ID) | [optional] |
| **cluster_group_id__n** | [**int[]**](../Model/int.md)| Cluster group (ID) | [optional] |
| **cluster_id** | [**int[]**](../Model/int.md)| VM cluster (ID) | [optional] |
| **cluster_id__n** | [**int[]**](../Model/int.md)| VM cluster (ID) | [optional] |
| **config_template_id** | [**int[]**](../Model/int.md)| Config template (ID) | [optional] |
| **config_template_id__n** | [**int[]**](../Model/int.md)| Config template (ID) | [optional] |
| **console_port_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_port_count__empty** | **bool**|  | [optional] |
| **console_port_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_port_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_port_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_port_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_port_count__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_ports** | **bool**| Has console ports | [optional] |
| **console_server_port_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_server_port_count__empty** | **bool**|  | [optional] |
| **console_server_port_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_server_port_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_server_port_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_server_port_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_server_port_count__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **console_server_ports** | **bool**| Has console server ports | [optional] |
| **contact** | [**int[]**](../Model/int.md)| Contact | [optional] |
| **contact__n** | [**int[]**](../Model/int.md)| Contact | [optional] |
| **contact_group** | [**int[]**](../Model/int.md)| Contact group | [optional] |
| **contact_group__n** | [**int[]**](../Model/int.md)| Contact group | [optional] |
| **contact_role** | [**int[]**](../Model/int.md)| Contact Role | [optional] |
| **contact_role__n** | [**int[]**](../Model/int.md)| Contact Role | [optional] |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
| **description** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__empty** | **bool**|  | [optional] |
| **description__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **device_bay_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **device_bay_count__empty** | **bool**|  | [optional] |
| **device_bay_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **device_bay_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **device_bay_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **device_bay_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **device_bay_count__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **device_bays** | **bool**| Has device bays | [optional] |
| **device_type** | [**string[]**](../Model/string.md)| Device type (slug) | [optional] |
| **device_type__n** | [**string[]**](../Model/string.md)| Device type (slug) | [optional] |
| **device_type_id** | [**int[]**](../Model/int.md)| Device type (ID) | [optional] |
| **device_type_id__n** | [**int[]**](../Model/int.md)| Device type (ID) | [optional] |
| **face** | **string**| * &#x60;front&#x60; - Front * &#x60;rear&#x60; - Rear | [optional] |
| **face__n** | **string**| * &#x60;front&#x60; - Front * &#x60;rear&#x60; - Rear | [optional] |
| **front_port_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **front_port_count__empty** | **bool**|  | [optional] |
| **front_port_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **front_port_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **front_port_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **front_port_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **front_port_count__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **has_oob_ip** | **bool**| Has an out-of-band IP | [optional] |
| **has_primary_ip** | **bool**| Has a primary IP | [optional] |
| **has_virtual_device_context** | **bool**| Has virtual device context | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count__empty** | **bool**|  | [optional] |
| **interface_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **interfaces** | **bool**| Has interfaces | [optional] |
| **inventory_item_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **inventory_item_count__empty** | **bool**|  | [optional] |
| **inventory_item_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **inventory_item_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **inventory_item_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **inventory_item_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **inventory_item_count__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **is_full_depth** | **bool**| Is full depth | [optional] |
| **last_updated** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **latitude** | [**float[]**](../Model/float.md)|  | [optional] |
| **latitude__empty** | **bool**|  | [optional] |
| **latitude__gt** | [**float[]**](../Model/float.md)|  | [optional] |
| **latitude__gte** | [**float[]**](../Model/float.md)|  | [optional] |
| **latitude__lt** | [**float[]**](../Model/float.md)|  | [optional] |
| **latitude__lte** | [**float[]**](../Model/float.md)|  | [optional] |
| **latitude__n** | [**float[]**](../Model/float.md)|  | [optional] |
| **local_context_data** | **bool**| Has local config context data | [optional] |
| **location_id** | [**int[]**](../Model/int.md)| Location (ID) | [optional] |
| **location_id__n** | [**int[]**](../Model/int.md)| Location (ID) | [optional] |
| **longitude** | [**float[]**](../Model/float.md)|  | [optional] |
| **longitude__empty** | **bool**|  | [optional] |
| **longitude__gt** | [**float[]**](../Model/float.md)|  | [optional] |
| **longitude__gte** | [**float[]**](../Model/float.md)|  | [optional] |
| **longitude__lt** | [**float[]**](../Model/float.md)|  | [optional] |
| **longitude__lte** | [**float[]**](../Model/float.md)|  | [optional] |
| **longitude__n** | [**float[]**](../Model/float.md)|  | [optional] |
| **mac_address** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **manufacturer** | [**string[]**](../Model/string.md)| Manufacturer (slug) | [optional] |
| **manufacturer__n** | [**string[]**](../Model/string.md)| Manufacturer (slug) | [optional] |
| **manufacturer_id** | [**int[]**](../Model/int.md)| Manufacturer (ID) | [optional] |
| **manufacturer_id__n** | [**int[]**](../Model/int.md)| Manufacturer (ID) | [optional] |
| **model** | [**string[]**](../Model/string.md)| Device model (slug) | [optional] |
| **model__n** | [**string[]**](../Model/string.md)| Device model (slug) | [optional] |
| **modified_by_request** | **string**|  | [optional] |
| **module_bay_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **module_bay_count__empty** | **bool**|  | [optional] |
| **module_bay_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **module_bay_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **module_bay_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **module_bay_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **module_bay_count__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **module_bays** | **bool**| Has module bays | [optional] |
| **name** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__empty** | **bool**|  | [optional] |
| **name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **oob_ip_id** | [**int[]**](../Model/int.md)| OOB IP (ID) | [optional] |
| **oob_ip_id__n** | [**int[]**](../Model/int.md)| OOB IP (ID) | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **parent_bay_id** | [**int[]**](../Model/int.md)| Parent bay (ID) | [optional] |
| **parent_bay_id__n** | [**int[]**](../Model/int.md)| Parent bay (ID) | [optional] |
| **parent_device_id** | [**int[]**](../Model/int.md)| Parent Device (ID) | [optional] |
| **parent_device_id__n** | [**int[]**](../Model/int.md)| Parent Device (ID) | [optional] |
| **pass_through_ports** | **bool**| Has pass-through ports | [optional] |
| **platform** | [**string[]**](../Model/string.md)| Platform (slug) | [optional] |
| **platform__n** | [**string[]**](../Model/string.md)| Platform (slug) | [optional] |
| **platform_id** | [**int[]**](../Model/int.md)| Platform (ID) | [optional] |
| **platform_id__n** | [**int[]**](../Model/int.md)| Platform (ID) | [optional] |
| **position** | [**float[]**](../Model/float.md)|  | [optional] |
| **position__empty** | **bool**|  | [optional] |
| **position__gt** | [**float[]**](../Model/float.md)|  | [optional] |
| **position__gte** | [**float[]**](../Model/float.md)|  | [optional] |
| **position__lt** | [**float[]**](../Model/float.md)|  | [optional] |
| **position__lte** | [**float[]**](../Model/float.md)|  | [optional] |
| **position__n** | [**float[]**](../Model/float.md)|  | [optional] |
| **power_outlet_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_outlet_count__empty** | **bool**|  | [optional] |
| **power_outlet_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_outlet_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_outlet_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_outlet_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_outlet_count__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_outlets** | **bool**| Has power outlets | [optional] |
| **power_port_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_port_count__empty** | **bool**|  | [optional] |
| **power_port_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_port_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_port_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_port_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_port_count__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **power_ports** | **bool**| Has power ports | [optional] |
| **primary_ip4_id** | [**int[]**](../Model/int.md)| Primary IPv4 (ID) | [optional] |
| **primary_ip4_id__n** | [**int[]**](../Model/int.md)| Primary IPv4 (ID) | [optional] |
| **primary_ip6_id** | [**int[]**](../Model/int.md)| Primary IPv6 (ID) | [optional] |
| **primary_ip6_id__n** | [**int[]**](../Model/int.md)| Primary IPv6 (ID) | [optional] |
| **q** | **string**| Search | [optional] |
| **rack_id** | [**int[]**](../Model/int.md)| Rack (ID) | [optional] |
| **rack_id__n** | [**int[]**](../Model/int.md)| Rack (ID) | [optional] |
| **rear_port_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **rear_port_count__empty** | **bool**|  | [optional] |
| **rear_port_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **rear_port_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **rear_port_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **rear_port_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **rear_port_count__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **region** | [**int[]**](../Model/int.md)| Region (slug) | [optional] |
| **region__n** | [**int[]**](../Model/int.md)| Region (slug) | [optional] |
| **region_id** | [**int[]**](../Model/int.md)| Region (ID) | [optional] |
| **region_id__n** | [**int[]**](../Model/int.md)| Region (ID) | [optional] |
| **role** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **role__n** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **role_id** | [**int[]**](../Model/int.md)| Role (ID) | [optional] |
| **role_id__n** | [**int[]**](../Model/int.md)| Role (ID) | [optional] |
| **serial** | [**string[]**](../Model/string.md)|  | [optional] |
| **serial__empty** | **bool**|  | [optional] |
| **serial__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **serial__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **serial__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **serial__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **serial__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **serial__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **serial__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **serial__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **serial__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **site** | [**string[]**](../Model/string.md)| Site name (slug) | [optional] |
| **site__n** | [**string[]**](../Model/string.md)| Site name (slug) | [optional] |
| **site_group** | [**int[]**](../Model/int.md)| Site group (slug) | [optional] |
| **site_group__n** | [**int[]**](../Model/int.md)| Site group (slug) | [optional] |
| **site_group_id** | [**int[]**](../Model/int.md)| Site group (ID) | [optional] |
| **site_group_id__n** | [**int[]**](../Model/int.md)| Site group (ID) | [optional] |
| **site_id** | [**int[]**](../Model/int.md)| Site (ID) | [optional] |
| **site_id__n** | [**int[]**](../Model/int.md)| Site (ID) | [optional] |
| **status** | [**string[]**](../Model/string.md)|  | [optional] |
| **status__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **vc_position** | [**int[]**](../Model/int.md)|  | [optional] |
| **vc_position__empty** | **bool**|  | [optional] |
| **vc_position__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **vc_position__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **vc_position__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **vc_position__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **vc_position__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **vc_priority** | [**int[]**](../Model/int.md)|  | [optional] |
| **vc_priority__empty** | **bool**|  | [optional] |
| **vc_priority__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **vc_priority__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **vc_priority__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **vc_priority__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **vc_priority__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **virtual_chassis_id** | [**int[]**](../Model/int.md)| Virtual chassis (ID) | [optional] |
| **virtual_chassis_id__n** | [**int[]**](../Model/int.md)| Virtual chassis (ID) | [optional] |
| **virtual_chassis_member** | **bool**| Is a virtual chassis member | [optional] |

### Return type

[**\OpenAPI\Client\Model\PrometheusDevice[]**](../Model/PrometheusDevice.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pluginsPrometheusSdIpAddressesList()`

```php
pluginsPrometheusSdIpAddressesList($address, $assigned, $assigned_object_id, $assigned_object_id__empty, $assigned_object_id__gt, $assigned_object_id__gte, $assigned_object_id__lt, $assigned_object_id__lte, $assigned_object_id__n, $assigned_object_type, $assigned_object_type__n, $assigned_to_interface, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device, $device_id, $dns_name, $dns_name__empty, $dns_name__ic, $dns_name__ie, $dns_name__iew, $dns_name__isw, $dns_name__n, $dns_name__nic, $dns_name__nie, $dns_name__niew, $dns_name__nisw, $family, $fhrpgroup_id, $fhrpgroup_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface, $interface__n, $interface_id, $interface_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $mask_length, $mask_length__gte, $mask_length__lte, $modified_by_request, $nat_inside_id, $nat_inside_id__n, $ordering, $parent, $present_in_vrf, $present_in_vrf_id, $q, $role, $role__n, $service_id, $service_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $virtual_machine, $virtual_machine_id, $vminterface, $vminterface__n, $vminterface_id, $vminterface_id__n, $vrf, $vrf__n, $vrf_id, $vrf_id__n): \OpenAPI\Client\Model\PrometheusIPAddress[]
```



Get a list of IP address objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = array('address_example'); // string[]
$assigned = True; // bool | Is assigned
$assigned_object_id = array(56); // int[]
$assigned_object_id__empty = True; // bool
$assigned_object_id__gt = array(56); // int[]
$assigned_object_id__gte = array(56); // int[]
$assigned_object_id__lt = array(56); // int[]
$assigned_object_id__lte = array(56); // int[]
$assigned_object_id__n = array(56); // int[]
$assigned_object_type = 56; // int
$assigned_object_type__n = 56; // int
$assigned_to_interface = True; // bool | Is assigned to an interface
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
$description = array('description_example'); // string[]
$description__empty = True; // bool
$description__ic = array('description__ic_example'); // string[]
$description__ie = array('description__ie_example'); // string[]
$description__iew = array('description__iew_example'); // string[]
$description__isw = array('description__isw_example'); // string[]
$description__n = array('description__n_example'); // string[]
$description__nic = array('description__nic_example'); // string[]
$description__nie = array('description__nie_example'); // string[]
$description__niew = array('description__niew_example'); // string[]
$description__nisw = array('description__nisw_example'); // string[]
$device = array('device_example'); // string[]
$device_id = array(56); // int[]
$dns_name = array('dns_name_example'); // string[]
$dns_name__empty = True; // bool
$dns_name__ic = array('dns_name__ic_example'); // string[]
$dns_name__ie = array('dns_name__ie_example'); // string[]
$dns_name__iew = array('dns_name__iew_example'); // string[]
$dns_name__isw = array('dns_name__isw_example'); // string[]
$dns_name__n = array('dns_name__n_example'); // string[]
$dns_name__nic = array('dns_name__nic_example'); // string[]
$dns_name__nie = array('dns_name__nie_example'); // string[]
$dns_name__niew = array('dns_name__niew_example'); // string[]
$dns_name__nisw = array('dns_name__nisw_example'); // string[]
$family = 3.4; // float
$fhrpgroup_id = array(56); // int[] | FHRP group (ID)
$fhrpgroup_id__n = array(56); // int[] | FHRP group (ID)
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$interface = array('interface_example'); // string[] | Interface (name)
$interface__n = array('interface__n_example'); // string[] | Interface (name)
$interface_id = array(56); // int[] | Interface (ID)
$interface_id__n = array(56); // int[] | Interface (ID)
$last_updated = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$mask_length = array(56); // int[]
$mask_length__gte = 3.4; // float
$mask_length__lte = 3.4; // float
$modified_by_request = 'modified_by_request_example'; // string
$nat_inside_id = array(56); // int[] | NAT inside IP address (ID)
$nat_inside_id__n = array(56); // int[] | NAT inside IP address (ID)
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$parent = array('parent_example'); // string[]
$present_in_vrf = 'present_in_vrf_example'; // string
$present_in_vrf_id = 'present_in_vrf_id_example'; // string
$q = 'q_example'; // string | Search
$role = array('role_example'); // string[] | The functional role of this IP
$role__n = array('role__n_example'); // string[] | The functional role of this IP
$service_id = array(56); // int[] | Service (ID)
$service_id__n = array(56); // int[] | Service (ID)
$status = array('status_example'); // string[] | The operational status of this IP
$status__n = array('status__n_example'); // string[] | The operational status of this IP
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string
$virtual_machine = array('virtual_machine_example'); // string[]
$virtual_machine_id = array(56); // int[]
$vminterface = array('vminterface_example'); // string[] | VM interface (name)
$vminterface__n = array('vminterface__n_example'); // string[] | VM interface (name)
$vminterface_id = array(56); // int[] | VM interface (ID)
$vminterface_id__n = array(56); // int[] | VM interface (ID)
$vrf = array('vrf_example'); // string[] | VRF (RD)
$vrf__n = array('vrf__n_example'); // string[] | VRF (RD)
$vrf_id = array(56); // int[] | VRF
$vrf_id__n = array(56); // int[] | VRF

try {
    $result = $apiInstance->pluginsPrometheusSdIpAddressesList($address, $assigned, $assigned_object_id, $assigned_object_id__empty, $assigned_object_id__gt, $assigned_object_id__gte, $assigned_object_id__lt, $assigned_object_id__lte, $assigned_object_id__n, $assigned_object_type, $assigned_object_type__n, $assigned_to_interface, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device, $device_id, $dns_name, $dns_name__empty, $dns_name__ic, $dns_name__ie, $dns_name__iew, $dns_name__isw, $dns_name__n, $dns_name__nic, $dns_name__nie, $dns_name__niew, $dns_name__nisw, $family, $fhrpgroup_id, $fhrpgroup_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface, $interface__n, $interface_id, $interface_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $mask_length, $mask_length__gte, $mask_length__lte, $modified_by_request, $nat_inside_id, $nat_inside_id__n, $ordering, $parent, $present_in_vrf, $present_in_vrf_id, $q, $role, $role__n, $service_id, $service_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $virtual_machine, $virtual_machine_id, $vminterface, $vminterface__n, $vminterface_id, $vminterface_id__n, $vrf, $vrf__n, $vrf_id, $vrf_id__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->pluginsPrometheusSdIpAddressesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | [**string[]**](../Model/string.md)|  | [optional] |
| **assigned** | **bool**| Is assigned | [optional] |
| **assigned_object_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__empty** | **bool**|  | [optional] |
| **assigned_object_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_type** | **int**|  | [optional] |
| **assigned_object_type__n** | **int**|  | [optional] |
| **assigned_to_interface** | **bool**| Is assigned to an interface | [optional] |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
| **description** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__empty** | **bool**|  | [optional] |
| **description__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **device** | [**string[]**](../Model/string.md)|  | [optional] |
| **device_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **dns_name** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__empty** | **bool**|  | [optional] |
| **dns_name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **family** | **float**|  | [optional] |
| **fhrpgroup_id** | [**int[]**](../Model/int.md)| FHRP group (ID) | [optional] |
| **fhrpgroup_id__n** | [**int[]**](../Model/int.md)| FHRP group (ID) | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface** | [**string[]**](../Model/string.md)| Interface (name) | [optional] |
| **interface__n** | [**string[]**](../Model/string.md)| Interface (name) | [optional] |
| **interface_id** | [**int[]**](../Model/int.md)| Interface (ID) | [optional] |
| **interface_id__n** | [**int[]**](../Model/int.md)| Interface (ID) | [optional] |
| **last_updated** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **mask_length** | [**int[]**](../Model/int.md)|  | [optional] |
| **mask_length__gte** | **float**|  | [optional] |
| **mask_length__lte** | **float**|  | [optional] |
| **modified_by_request** | **string**|  | [optional] |
| **nat_inside_id** | [**int[]**](../Model/int.md)| NAT inside IP address (ID) | [optional] |
| **nat_inside_id__n** | [**int[]**](../Model/int.md)| NAT inside IP address (ID) | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **parent** | [**string[]**](../Model/string.md)|  | [optional] |
| **present_in_vrf** | **string**|  | [optional] |
| **present_in_vrf_id** | **string**|  | [optional] |
| **q** | **string**| Search | [optional] |
| **role** | [**string[]**](../Model/string.md)| The functional role of this IP | [optional] |
| **role__n** | [**string[]**](../Model/string.md)| The functional role of this IP | [optional] |
| **service_id** | [**int[]**](../Model/int.md)| Service (ID) | [optional] |
| **service_id__n** | [**int[]**](../Model/int.md)| Service (ID) | [optional] |
| **status** | [**string[]**](../Model/string.md)| The operational status of this IP | [optional] |
| **status__n** | [**string[]**](../Model/string.md)| The operational status of this IP | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **virtual_machine** | [**string[]**](../Model/string.md)|  | [optional] |
| **virtual_machine_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **vminterface** | [**string[]**](../Model/string.md)| VM interface (name) | [optional] |
| **vminterface__n** | [**string[]**](../Model/string.md)| VM interface (name) | [optional] |
| **vminterface_id** | [**int[]**](../Model/int.md)| VM interface (ID) | [optional] |
| **vminterface_id__n** | [**int[]**](../Model/int.md)| VM interface (ID) | [optional] |
| **vrf** | [**string[]**](../Model/string.md)| VRF (RD) | [optional] |
| **vrf__n** | [**string[]**](../Model/string.md)| VRF (RD) | [optional] |
| **vrf_id** | [**int[]**](../Model/int.md)| VRF | [optional] |
| **vrf_id__n** | [**int[]**](../Model/int.md)| VRF | [optional] |

### Return type

[**\OpenAPI\Client\Model\PrometheusIPAddress[]**](../Model/PrometheusIPAddress.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pluginsPrometheusSdServicesList()`

```php
pluginsPrometheusSdServicesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device, $device__n, $device_id, $device_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $ip_address, $ip_address__n, $ip_address_id, $ip_address_id__n, $ipaddress, $ipaddress__n, $ipaddress_id, $ipaddress_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $ordering, $port, $ports, $protocol, $protocol__n, $q, $tag, $tag__n, $tenant, $tenant_id, $updated_by_request, $virtual_machine, $virtual_machine__n, $virtual_machine_id, $virtual_machine_id__n): \OpenAPI\Client\Model\PrometheusService[]
```



Get a list of service objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
$description = array('description_example'); // string[]
$description__empty = True; // bool
$description__ic = array('description__ic_example'); // string[]
$description__ie = array('description__ie_example'); // string[]
$description__iew = array('description__iew_example'); // string[]
$description__isw = array('description__isw_example'); // string[]
$description__n = array('description__n_example'); // string[]
$description__nic = array('description__nic_example'); // string[]
$description__nie = array('description__nie_example'); // string[]
$description__niew = array('description__niew_example'); // string[]
$description__nisw = array('description__nisw_example'); // string[]
$device = array('device_example'); // string[] | Device (name)
$device__n = array('device__n_example'); // string[] | Device (name)
$device_id = array(56); // int[] | Device (ID)
$device_id__n = array(56); // int[] | Device (ID)
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$ip_address = array('ip_address_example'); // string[] | IP address
$ip_address__n = array('ip_address__n_example'); // string[] | IP address
$ip_address_id = array(56); // int[] | IP address (ID)
$ip_address_id__n = array(56); // int[] | IP address (ID)
$ipaddress = array('ipaddress_example'); // string[] | IP address
$ipaddress__n = array('ipaddress__n_example'); // string[] | IP address
$ipaddress_id = array(56); // int[] | IP address (ID)
$ipaddress_id__n = array(56); // int[] | IP address (ID)
$last_updated = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$modified_by_request = 'modified_by_request_example'; // string
$name = array('name_example'); // string[]
$name__empty = True; // bool
$name__ic = array('name__ic_example'); // string[]
$name__ie = array('name__ie_example'); // string[]
$name__iew = array('name__iew_example'); // string[]
$name__isw = array('name__isw_example'); // string[]
$name__n = array('name__n_example'); // string[]
$name__nic = array('name__nic_example'); // string[]
$name__nie = array('name__nie_example'); // string[]
$name__niew = array('name__niew_example'); // string[]
$name__nisw = array('name__nisw_example'); // string[]
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$port = 3.4; // float
$ports = 3.4; // float
$protocol = 'protocol_example'; // string | * `tcp` - TCP * `udp` - UDP * `sctp` - SCTP
$protocol__n = 'protocol__n_example'; // string | * `tcp` - TCP * `udp` - UDP * `sctp` - SCTP
$q = 'q_example'; // string | Search
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[]
$tenant_id = array(56); // int[]
$updated_by_request = 'updated_by_request_example'; // string
$virtual_machine = array('virtual_machine_example'); // string[] | Virtual machine (name)
$virtual_machine__n = array('virtual_machine__n_example'); // string[] | Virtual machine (name)
$virtual_machine_id = array(56); // int[] | Virtual machine (ID)
$virtual_machine_id__n = array(56); // int[] | Virtual machine (ID)

try {
    $result = $apiInstance->pluginsPrometheusSdServicesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device, $device__n, $device_id, $device_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $ip_address, $ip_address__n, $ip_address_id, $ip_address_id__n, $ipaddress, $ipaddress__n, $ipaddress_id, $ipaddress_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $ordering, $port, $ports, $protocol, $protocol__n, $q, $tag, $tag__n, $tenant, $tenant_id, $updated_by_request, $virtual_machine, $virtual_machine__n, $virtual_machine_id, $virtual_machine_id__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->pluginsPrometheusSdServicesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
| **description** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__empty** | **bool**|  | [optional] |
| **description__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **device** | [**string[]**](../Model/string.md)| Device (name) | [optional] |
| **device__n** | [**string[]**](../Model/string.md)| Device (name) | [optional] |
| **device_id** | [**int[]**](../Model/int.md)| Device (ID) | [optional] |
| **device_id__n** | [**int[]**](../Model/int.md)| Device (ID) | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **ip_address** | [**string[]**](../Model/string.md)| IP address | [optional] |
| **ip_address__n** | [**string[]**](../Model/string.md)| IP address | [optional] |
| **ip_address_id** | [**int[]**](../Model/int.md)| IP address (ID) | [optional] |
| **ip_address_id__n** | [**int[]**](../Model/int.md)| IP address (ID) | [optional] |
| **ipaddress** | [**string[]**](../Model/string.md)| IP address | [optional] |
| **ipaddress__n** | [**string[]**](../Model/string.md)| IP address | [optional] |
| **ipaddress_id** | [**int[]**](../Model/int.md)| IP address (ID) | [optional] |
| **ipaddress_id__n** | [**int[]**](../Model/int.md)| IP address (ID) | [optional] |
| **last_updated** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **modified_by_request** | **string**|  | [optional] |
| **name** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__empty** | **bool**|  | [optional] |
| **name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **port** | **float**|  | [optional] |
| **ports** | **float**|  | [optional] |
| **protocol** | **string**| * &#x60;tcp&#x60; - TCP * &#x60;udp&#x60; - UDP * &#x60;sctp&#x60; - SCTP | [optional] |
| **protocol__n** | **string**| * &#x60;tcp&#x60; - TCP * &#x60;udp&#x60; - UDP * &#x60;sctp&#x60; - SCTP | [optional] |
| **q** | **string**| Search | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **virtual_machine** | [**string[]**](../Model/string.md)| Virtual machine (name) | [optional] |
| **virtual_machine__n** | [**string[]**](../Model/string.md)| Virtual machine (name) | [optional] |
| **virtual_machine_id** | [**int[]**](../Model/int.md)| Virtual machine (ID) | [optional] |
| **virtual_machine_id__n** | [**int[]**](../Model/int.md)| Virtual machine (ID) | [optional] |

### Return type

[**\OpenAPI\Client\Model\PrometheusService[]**](../Model/PrometheusService.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pluginsPrometheusSdVirtualMachinesList()`

```php
pluginsPrometheusSdVirtualMachinesList($cluster, $cluster__n, $cluster_group, $cluster_group__n, $cluster_group_id, $cluster_group_id__n, $cluster_id, $cluster_id__n, $cluster_type, $cluster_type__n, $cluster_type_id, $cluster_type_id__n, $config_template_id, $config_template_id__n, $contact, $contact__n, $contact_group, $contact_group__n, $contact_role, $contact_role__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device, $device__n, $device_id, $device_id__n, $disk, $disk__empty, $disk__gt, $disk__gte, $disk__lt, $disk__lte, $disk__n, $has_primary_ip, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface_count, $interface_count__empty, $interface_count__gt, $interface_count__gte, $interface_count__lt, $interface_count__lte, $interface_count__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $local_context_data, $mac_address, $mac_address__ic, $mac_address__ie, $mac_address__iew, $mac_address__isw, $mac_address__n, $mac_address__nic, $mac_address__nie, $mac_address__niew, $mac_address__nisw, $memory, $memory__empty, $memory__gt, $memory__gte, $memory__lt, $memory__lte, $memory__n, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $ordering, $platform, $platform__n, $platform_id, $platform_id__n, $primary_ip4_id, $primary_ip4_id__n, $primary_ip6_id, $primary_ip6_id__n, $q, $region, $region__n, $region_id, $region_id__n, $role, $role__n, $role_id, $role_id__n, $site, $site__n, $site_group, $site_group__n, $site_group_id, $site_group_id__n, $site_id, $site_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vcpus, $vcpus__empty, $vcpus__gt, $vcpus__gte, $vcpus__lt, $vcpus__lte, $vcpus__n, $virtual_disk_count, $virtual_disk_count__empty, $virtual_disk_count__gt, $virtual_disk_count__gte, $virtual_disk_count__lt, $virtual_disk_count__lte, $virtual_disk_count__n): \OpenAPI\Client\Model\PrometheusVirtualMachine[]
```



Get a list of virtual machine objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster = array('cluster_example'); // string[] | Cluster
$cluster__n = array('cluster__n_example'); // string[] | Cluster
$cluster_group = array('cluster_group_example'); // string[] | Cluster group (slug)
$cluster_group__n = array('cluster_group__n_example'); // string[] | Cluster group (slug)
$cluster_group_id = array(56); // int[] | Cluster group (ID)
$cluster_group_id__n = array(56); // int[] | Cluster group (ID)
$cluster_id = array(56); // int[] | Cluster (ID)
$cluster_id__n = array(56); // int[] | Cluster (ID)
$cluster_type = array('cluster_type_example'); // string[] | Cluster type (slug)
$cluster_type__n = array('cluster_type__n_example'); // string[] | Cluster type (slug)
$cluster_type_id = array(56); // int[] | Cluster type (ID)
$cluster_type_id__n = array(56); // int[] | Cluster type (ID)
$config_template_id = array(56); // int[] | Config template (ID)
$config_template_id__n = array(56); // int[] | Config template (ID)
$contact = array(56); // int[] | Contact
$contact__n = array(56); // int[] | Contact
$contact_group = array(56); // int[] | Contact group
$contact_group__n = array(56); // int[] | Contact group
$contact_role = array(56); // int[] | Contact Role
$contact_role__n = array(56); // int[] | Contact Role
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
$description = array('description_example'); // string[]
$description__empty = True; // bool
$description__ic = array('description__ic_example'); // string[]
$description__ie = array('description__ie_example'); // string[]
$description__iew = array('description__iew_example'); // string[]
$description__isw = array('description__isw_example'); // string[]
$description__n = array('description__n_example'); // string[]
$description__nic = array('description__nic_example'); // string[]
$description__nie = array('description__nie_example'); // string[]
$description__niew = array('description__niew_example'); // string[]
$description__nisw = array('description__nisw_example'); // string[]
$device = array('device_example'); // string[] | Device
$device__n = array('device__n_example'); // string[] | Device
$device_id = array(56); // int[] | Device (ID)
$device_id__n = array(56); // int[] | Device (ID)
$disk = array(56); // int[]
$disk__empty = True; // bool
$disk__gt = array(56); // int[]
$disk__gte = array(56); // int[]
$disk__lt = array(56); // int[]
$disk__lte = array(56); // int[]
$disk__n = array(56); // int[]
$has_primary_ip = True; // bool | Has a primary IP
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$interface_count = array(56); // int[]
$interface_count__empty = True; // bool
$interface_count__gt = array(56); // int[]
$interface_count__gte = array(56); // int[]
$interface_count__lt = array(56); // int[]
$interface_count__lte = array(56); // int[]
$interface_count__n = array(56); // int[]
$last_updated = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$local_context_data = True; // bool | Has local config context data
$mac_address = array('mac_address_example'); // string[]
$mac_address__ic = array('mac_address__ic_example'); // string[]
$mac_address__ie = array('mac_address__ie_example'); // string[]
$mac_address__iew = array('mac_address__iew_example'); // string[]
$mac_address__isw = array('mac_address__isw_example'); // string[]
$mac_address__n = array('mac_address__n_example'); // string[]
$mac_address__nic = array('mac_address__nic_example'); // string[]
$mac_address__nie = array('mac_address__nie_example'); // string[]
$mac_address__niew = array('mac_address__niew_example'); // string[]
$mac_address__nisw = array('mac_address__nisw_example'); // string[]
$memory = array(56); // int[]
$memory__empty = True; // bool
$memory__gt = array(56); // int[]
$memory__gte = array(56); // int[]
$memory__lt = array(56); // int[]
$memory__lte = array(56); // int[]
$memory__n = array(56); // int[]
$modified_by_request = 'modified_by_request_example'; // string
$name = array('name_example'); // string[]
$name__empty = True; // bool
$name__ic = array('name__ic_example'); // string[]
$name__ie = array('name__ie_example'); // string[]
$name__iew = array('name__iew_example'); // string[]
$name__isw = array('name__isw_example'); // string[]
$name__n = array('name__n_example'); // string[]
$name__nic = array('name__nic_example'); // string[]
$name__nie = array('name__nie_example'); // string[]
$name__niew = array('name__niew_example'); // string[]
$name__nisw = array('name__nisw_example'); // string[]
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$platform = array('platform_example'); // string[] | Platform (slug)
$platform__n = array('platform__n_example'); // string[] | Platform (slug)
$platform_id = array(56); // int[] | Platform (ID)
$platform_id__n = array(56); // int[] | Platform (ID)
$primary_ip4_id = array(56); // int[] | Primary IPv4 (ID)
$primary_ip4_id__n = array(56); // int[] | Primary IPv4 (ID)
$primary_ip6_id = array(56); // int[] | Primary IPv6 (ID)
$primary_ip6_id__n = array(56); // int[] | Primary IPv6 (ID)
$q = 'q_example'; // string | Search
$region = array(56); // int[] | Region (slug)
$region__n = array(56); // int[] | Region (slug)
$region_id = array(56); // int[] | Region (ID)
$region_id__n = array(56); // int[] | Region (ID)
$role = array('role_example'); // string[] | Role (slug)
$role__n = array('role__n_example'); // string[] | Role (slug)
$role_id = array(56); // int[] | Role (ID)
$role_id__n = array(56); // int[] | Role (ID)
$site = array('site_example'); // string[] | Site (slug)
$site__n = array('site__n_example'); // string[] | Site (slug)
$site_group = array(56); // int[] | Site group (slug)
$site_group__n = array(56); // int[] | Site group (slug)
$site_group_id = array(56); // int[] | Site group (ID)
$site_group_id__n = array(56); // int[] | Site group (ID)
$site_id = array(56); // int[] | Site (ID)
$site_id__n = array(56); // int[] | Site (ID)
$status = array('status_example'); // string[]
$status__n = array('status__n_example'); // string[]
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string
$vcpus = array(3.4); // float[]
$vcpus__empty = True; // bool
$vcpus__gt = array(3.4); // float[]
$vcpus__gte = array(3.4); // float[]
$vcpus__lt = array(3.4); // float[]
$vcpus__lte = array(3.4); // float[]
$vcpus__n = array(3.4); // float[]
$virtual_disk_count = array(56); // int[]
$virtual_disk_count__empty = True; // bool
$virtual_disk_count__gt = array(56); // int[]
$virtual_disk_count__gte = array(56); // int[]
$virtual_disk_count__lt = array(56); // int[]
$virtual_disk_count__lte = array(56); // int[]
$virtual_disk_count__n = array(56); // int[]

try {
    $result = $apiInstance->pluginsPrometheusSdVirtualMachinesList($cluster, $cluster__n, $cluster_group, $cluster_group__n, $cluster_group_id, $cluster_group_id__n, $cluster_id, $cluster_id__n, $cluster_type, $cluster_type__n, $cluster_type_id, $cluster_type_id__n, $config_template_id, $config_template_id__n, $contact, $contact__n, $contact_group, $contact_group__n, $contact_role, $contact_role__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device, $device__n, $device_id, $device_id__n, $disk, $disk__empty, $disk__gt, $disk__gte, $disk__lt, $disk__lte, $disk__n, $has_primary_ip, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface_count, $interface_count__empty, $interface_count__gt, $interface_count__gte, $interface_count__lt, $interface_count__lte, $interface_count__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $local_context_data, $mac_address, $mac_address__ic, $mac_address__ie, $mac_address__iew, $mac_address__isw, $mac_address__n, $mac_address__nic, $mac_address__nie, $mac_address__niew, $mac_address__nisw, $memory, $memory__empty, $memory__gt, $memory__gte, $memory__lt, $memory__lte, $memory__n, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $ordering, $platform, $platform__n, $platform_id, $platform_id__n, $primary_ip4_id, $primary_ip4_id__n, $primary_ip6_id, $primary_ip6_id__n, $q, $region, $region__n, $region_id, $region_id__n, $role, $role__n, $role_id, $role_id__n, $site, $site__n, $site_group, $site_group__n, $site_group_id, $site_group_id__n, $site_id, $site_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vcpus, $vcpus__empty, $vcpus__gt, $vcpus__gte, $vcpus__lt, $vcpus__lte, $vcpus__n, $virtual_disk_count, $virtual_disk_count__empty, $virtual_disk_count__gt, $virtual_disk_count__gte, $virtual_disk_count__lt, $virtual_disk_count__lte, $virtual_disk_count__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->pluginsPrometheusSdVirtualMachinesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster** | [**string[]**](../Model/string.md)| Cluster | [optional] |
| **cluster__n** | [**string[]**](../Model/string.md)| Cluster | [optional] |
| **cluster_group** | [**string[]**](../Model/string.md)| Cluster group (slug) | [optional] |
| **cluster_group__n** | [**string[]**](../Model/string.md)| Cluster group (slug) | [optional] |
| **cluster_group_id** | [**int[]**](../Model/int.md)| Cluster group (ID) | [optional] |
| **cluster_group_id__n** | [**int[]**](../Model/int.md)| Cluster group (ID) | [optional] |
| **cluster_id** | [**int[]**](../Model/int.md)| Cluster (ID) | [optional] |
| **cluster_id__n** | [**int[]**](../Model/int.md)| Cluster (ID) | [optional] |
| **cluster_type** | [**string[]**](../Model/string.md)| Cluster type (slug) | [optional] |
| **cluster_type__n** | [**string[]**](../Model/string.md)| Cluster type (slug) | [optional] |
| **cluster_type_id** | [**int[]**](../Model/int.md)| Cluster type (ID) | [optional] |
| **cluster_type_id__n** | [**int[]**](../Model/int.md)| Cluster type (ID) | [optional] |
| **config_template_id** | [**int[]**](../Model/int.md)| Config template (ID) | [optional] |
| **config_template_id__n** | [**int[]**](../Model/int.md)| Config template (ID) | [optional] |
| **contact** | [**int[]**](../Model/int.md)| Contact | [optional] |
| **contact__n** | [**int[]**](../Model/int.md)| Contact | [optional] |
| **contact_group** | [**int[]**](../Model/int.md)| Contact group | [optional] |
| **contact_group__n** | [**int[]**](../Model/int.md)| Contact group | [optional] |
| **contact_role** | [**int[]**](../Model/int.md)| Contact Role | [optional] |
| **contact_role__n** | [**int[]**](../Model/int.md)| Contact Role | [optional] |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
| **description** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__empty** | **bool**|  | [optional] |
| **description__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **device** | [**string[]**](../Model/string.md)| Device | [optional] |
| **device__n** | [**string[]**](../Model/string.md)| Device | [optional] |
| **device_id** | [**int[]**](../Model/int.md)| Device (ID) | [optional] |
| **device_id__n** | [**int[]**](../Model/int.md)| Device (ID) | [optional] |
| **disk** | [**int[]**](../Model/int.md)|  | [optional] |
| **disk__empty** | **bool**|  | [optional] |
| **disk__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **disk__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **disk__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **disk__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **disk__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **has_primary_ip** | **bool**| Has a primary IP | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count__empty** | **bool**|  | [optional] |
| **interface_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_count__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **last_updated** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **local_context_data** | **bool**| Has local config context data | [optional] |
| **mac_address** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **mac_address__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **memory** | [**int[]**](../Model/int.md)|  | [optional] |
| **memory__empty** | **bool**|  | [optional] |
| **memory__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **memory__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **memory__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **memory__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **memory__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **modified_by_request** | **string**|  | [optional] |
| **name** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__empty** | **bool**|  | [optional] |
| **name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **platform** | [**string[]**](../Model/string.md)| Platform (slug) | [optional] |
| **platform__n** | [**string[]**](../Model/string.md)| Platform (slug) | [optional] |
| **platform_id** | [**int[]**](../Model/int.md)| Platform (ID) | [optional] |
| **platform_id__n** | [**int[]**](../Model/int.md)| Platform (ID) | [optional] |
| **primary_ip4_id** | [**int[]**](../Model/int.md)| Primary IPv4 (ID) | [optional] |
| **primary_ip4_id__n** | [**int[]**](../Model/int.md)| Primary IPv4 (ID) | [optional] |
| **primary_ip6_id** | [**int[]**](../Model/int.md)| Primary IPv6 (ID) | [optional] |
| **primary_ip6_id__n** | [**int[]**](../Model/int.md)| Primary IPv6 (ID) | [optional] |
| **q** | **string**| Search | [optional] |
| **region** | [**int[]**](../Model/int.md)| Region (slug) | [optional] |
| **region__n** | [**int[]**](../Model/int.md)| Region (slug) | [optional] |
| **region_id** | [**int[]**](../Model/int.md)| Region (ID) | [optional] |
| **region_id__n** | [**int[]**](../Model/int.md)| Region (ID) | [optional] |
| **role** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **role__n** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **role_id** | [**int[]**](../Model/int.md)| Role (ID) | [optional] |
| **role_id__n** | [**int[]**](../Model/int.md)| Role (ID) | [optional] |
| **site** | [**string[]**](../Model/string.md)| Site (slug) | [optional] |
| **site__n** | [**string[]**](../Model/string.md)| Site (slug) | [optional] |
| **site_group** | [**int[]**](../Model/int.md)| Site group (slug) | [optional] |
| **site_group__n** | [**int[]**](../Model/int.md)| Site group (slug) | [optional] |
| **site_group_id** | [**int[]**](../Model/int.md)| Site group (ID) | [optional] |
| **site_group_id__n** | [**int[]**](../Model/int.md)| Site group (ID) | [optional] |
| **site_id** | [**int[]**](../Model/int.md)| Site (ID) | [optional] |
| **site_id__n** | [**int[]**](../Model/int.md)| Site (ID) | [optional] |
| **status** | [**string[]**](../Model/string.md)|  | [optional] |
| **status__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **vcpus** | [**float[]**](../Model/float.md)|  | [optional] |
| **vcpus__empty** | **bool**|  | [optional] |
| **vcpus__gt** | [**float[]**](../Model/float.md)|  | [optional] |
| **vcpus__gte** | [**float[]**](../Model/float.md)|  | [optional] |
| **vcpus__lt** | [**float[]**](../Model/float.md)|  | [optional] |
| **vcpus__lte** | [**float[]**](../Model/float.md)|  | [optional] |
| **vcpus__n** | [**float[]**](../Model/float.md)|  | [optional] |
| **virtual_disk_count** | [**int[]**](../Model/int.md)|  | [optional] |
| **virtual_disk_count__empty** | **bool**|  | [optional] |
| **virtual_disk_count__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **virtual_disk_count__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **virtual_disk_count__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **virtual_disk_count__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **virtual_disk_count__n** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PrometheusVirtualMachine[]**](../Model/PrometheusVirtualMachine.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
