# # Module

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**device** | [**\OpenAPI\Client\Model\BriefDevice**](BriefDevice.md) |  |
**module_bay** | [**\OpenAPI\Client\Model\NestedModuleBay**](NestedModuleBay.md) |  |
**module_type** | [**\OpenAPI\Client\Model\BriefModuleType**](BriefModuleType.md) |  |
**status** | [**\OpenAPI\Client\Model\ModuleStatus**](ModuleStatus.md) |  | [optional]
**serial** | **string** |  | [optional]
**asset_tag** | **string** | A unique tag used to identify this device | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
