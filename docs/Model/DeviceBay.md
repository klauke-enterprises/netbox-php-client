# # DeviceBay

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**device** | [**\OpenAPI\Client\Model\BriefDevice**](BriefDevice.md) |  |
**name** | **string** |  |
**label** | **string** | Physical label | [optional]
**description** | **string** |  | [optional]
**installed_device** | [**\OpenAPI\Client\Model\BriefDevice**](BriefDevice.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
