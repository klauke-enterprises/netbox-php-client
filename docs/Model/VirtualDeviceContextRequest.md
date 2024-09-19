# # VirtualDeviceContextRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**device** | [**\OpenAPI\Client\Model\BriefDeviceRequest**](BriefDeviceRequest.md) |  |
**identifier** | **int** |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenantRequest**](BriefTenantRequest.md) |  | [optional]
**primary_ip4** | [**\OpenAPI\Client\Model\BriefIPAddressRequest**](BriefIPAddressRequest.md) |  | [optional]
**primary_ip6** | [**\OpenAPI\Client\Model\BriefIPAddressRequest**](BriefIPAddressRequest.md) |  | [optional]
**status** | **string** | * &#x60;active&#x60; - Active * &#x60;planned&#x60; - Planned * &#x60;offline&#x60; - Offline |
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
