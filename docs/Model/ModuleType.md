# # ModuleType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**manufacturer** | [**\OpenAPI\Client\Model\BriefManufacturer**](BriefManufacturer.md) |  |
**model** | **string** |  |
**part_number** | **string** | Discrete part number (optional) | [optional]
**airflow** | [**\OpenAPI\Client\Model\ModuleTypeAirflow**](ModuleTypeAirflow.md) |  | [optional]
**weight** | **float** |  | [optional]
**weight_unit** | [**\OpenAPI\Client\Model\DeviceTypeWeightUnit**](DeviceTypeWeightUnit.md) |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
