# # PatchedWritableVirtualDeviceContextRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**device** | [**\OpenAPI\Client\Model\DeviceRequest**](DeviceRequest.md) |  | [optional]
**identifier** | **int** |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\TenantRequest**](TenantRequest.md) |  | [optional]
**primary_ip4** | [**\OpenAPI\Client\Model\IPAddressRequest**](IPAddressRequest.md) |  | [optional]
**primary_ip6** | [**\OpenAPI\Client\Model\IPAddressRequest**](IPAddressRequest.md) |  | [optional]
**status** | **string** | * &#x60;active&#x60; - Active * &#x60;planned&#x60; - Planned * &#x60;offline&#x60; - Offline | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
