# # DeviceWithConfigContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  | [optional]
**device_type** | [**\OpenAPI\Client\Model\DeviceType**](DeviceType.md) |  |
**role** | [**\OpenAPI\Client\Model\DeviceRole**](DeviceRole.md) |  |
**tenant** | [**\OpenAPI\Client\Model\Tenant**](Tenant.md) |  | [optional]
**platform** | [**\OpenAPI\Client\Model\Platform**](Platform.md) |  | [optional]
**serial** | **string** | Chassis serial number, assigned by the manufacturer | [optional]
**asset_tag** | **string** | A unique tag used to identify this device | [optional]
**site** | [**\OpenAPI\Client\Model\Site**](Site.md) |  |
**location** | [**\OpenAPI\Client\Model\Location**](Location.md) |  | [optional]
**rack** | [**\OpenAPI\Client\Model\Rack**](Rack.md) |  | [optional]
**position** | **float** |  | [optional]
**face** | [**\OpenAPI\Client\Model\DeviceFace**](DeviceFace.md) |  | [optional]
**latitude** | **float** | GPS coordinate in decimal format (xx.yyyyyy) | [optional]
**longitude** | **float** | GPS coordinate in decimal format (xx.yyyyyy) | [optional]
**parent_device** | [**\OpenAPI\Client\Model\NestedDevice**](NestedDevice.md) |  | [readonly]
**status** | [**\OpenAPI\Client\Model\DeviceStatus**](DeviceStatus.md) |  | [optional]
**airflow** | [**\OpenAPI\Client\Model\DeviceAirflow**](DeviceAirflow.md) |  | [optional]
**primary_ip** | [**\OpenAPI\Client\Model\IPAddress**](IPAddress.md) |  | [readonly]
**primary_ip4** | [**\OpenAPI\Client\Model\IPAddress**](IPAddress.md) |  | [optional]
**primary_ip6** | [**\OpenAPI\Client\Model\IPAddress**](IPAddress.md) |  | [optional]
**oob_ip** | [**\OpenAPI\Client\Model\IPAddress**](IPAddress.md) |  | [optional]
**cluster** | [**\OpenAPI\Client\Model\Cluster**](Cluster.md) |  | [optional]
**virtual_chassis** | [**\OpenAPI\Client\Model\VirtualChassis**](VirtualChassis.md) |  | [optional]
**vc_position** | **int** |  | [optional]
**vc_priority** | **int** | Virtual chassis master election priority | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**config_template** | [**\OpenAPI\Client\Model\ConfigTemplate**](ConfigTemplate.md) |  | [optional]
**config_context** | **mixed** |  | [readonly]
**local_context_data** | **mixed** | Local config context data takes precedence over source contexts in the final rendered config context | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**console_port_count** | **int** |  | [readonly]
**console_server_port_count** | **int** |  | [readonly]
**power_port_count** | **int** |  | [readonly]
**power_outlet_count** | **int** |  | [readonly]
**interface_count** | **int** |  | [readonly]
**front_port_count** | **int** |  | [readonly]
**rear_port_count** | **int** |  | [readonly]
**device_bay_count** | **int** |  | [readonly]
**module_bay_count** | **int** |  | [readonly]
**inventory_item_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
