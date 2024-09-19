# # Service

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**device** | [**\OpenAPI\Client\Model\Device**](Device.md) |  | [optional]
**virtual_machine** | [**\OpenAPI\Client\Model\VirtualMachine**](VirtualMachine.md) |  | [optional]
**name** | **string** |  |
**protocol** | [**\OpenAPI\Client\Model\ServiceProtocol**](ServiceProtocol.md) |  | [optional]
**ports** | **int[]** |  |
**ipaddresses** | [**\OpenAPI\Client\Model\IPAddress[]**](IPAddress.md) |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
