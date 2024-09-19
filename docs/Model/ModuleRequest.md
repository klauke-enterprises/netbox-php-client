# # ModuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**device** | [**\OpenAPI\Client\Model\BriefDeviceRequest**](BriefDeviceRequest.md) |  |
**module_bay** | [**\OpenAPI\Client\Model\NestedModuleBayRequest**](NestedModuleBayRequest.md) |  |
**module_type** | [**\OpenAPI\Client\Model\BriefModuleTypeRequest**](BriefModuleTypeRequest.md) |  |
**status** | **string** | * &#x60;offline&#x60; - Offline * &#x60;active&#x60; - Active * &#x60;planned&#x60; - Planned * &#x60;staged&#x60; - Staged * &#x60;failed&#x60; - Failed * &#x60;decommissioning&#x60; - Decommissioning | [optional]
**serial** | **string** |  | [optional]
**asset_tag** | **string** | A unique tag used to identify this device | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
