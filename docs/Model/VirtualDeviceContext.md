# # VirtualDeviceContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**device** | [**\OpenAPI\Client\Model\BriefDevice**](BriefDevice.md) |  |
**identifier** | **int** |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**primary_ip** | [**\OpenAPI\Client\Model\BriefIPAddress**](BriefIPAddress.md) |  | [readonly]
**primary_ip4** | [**\OpenAPI\Client\Model\BriefIPAddress**](BriefIPAddress.md) |  | [optional]
**primary_ip6** | [**\OpenAPI\Client\Model\BriefIPAddress**](BriefIPAddress.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\VirtualDeviceContextStatus**](VirtualDeviceContextStatus.md) |  |
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**interface_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
