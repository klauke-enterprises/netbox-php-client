# # DeviceType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**manufacturer** | [**\OpenAPI\Client\Model\BriefManufacturer**](BriefManufacturer.md) |  |
**default_platform** | [**\OpenAPI\Client\Model\BriefPlatform**](BriefPlatform.md) |  | [optional]
**model** | **string** |  |
**slug** | **string** |  |
**part_number** | **string** | Discrete part number (optional) | [optional]
**u_height** | **float** |  | [optional] [default to 1.0]
**exclude_from_utilization** | **bool** | Devices of this type are excluded when calculating rack utilization. | [optional]
**is_full_depth** | **bool** | Device consumes both front and rear rack faces. | [optional]
**subdevice_role** | [**\OpenAPI\Client\Model\DeviceTypeSubdeviceRole**](DeviceTypeSubdeviceRole.md) |  | [optional]
**airflow** | [**\OpenAPI\Client\Model\DeviceTypeAirflow**](DeviceTypeAirflow.md) |  | [optional]
**weight** | **float** |  | [optional]
**weight_unit** | [**\OpenAPI\Client\Model\DeviceTypeWeightUnit**](DeviceTypeWeightUnit.md) |  | [optional]
**front_image** | **string** |  | [optional]
**rear_image** | **string** |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**device_count** | **int** |  | [readonly]
**console_port_template_count** | **int** |  | [readonly]
**console_server_port_template_count** | **int** |  | [readonly]
**power_port_template_count** | **int** |  | [readonly]
**power_outlet_template_count** | **int** |  | [readonly]
**interface_template_count** | **int** |  | [readonly]
**front_port_template_count** | **int** |  | [readonly]
**rear_port_template_count** | **int** |  | [readonly]
**device_bay_template_count** | **int** |  | [readonly]
**module_bay_template_count** | **int** |  | [readonly]
**inventory_item_template_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
