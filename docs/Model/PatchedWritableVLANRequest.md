# # PatchedWritableVLANRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**site** | [**\OpenAPI\Client\Model\SiteRequest**](SiteRequest.md) |  | [optional]
**group** | [**\OpenAPI\Client\Model\VLANGroupRequest**](VLANGroupRequest.md) |  | [optional]
**vid** | **int** | Numeric VLAN ID (1-4094) | [optional]
**name** | **string** |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\TenantRequest**](TenantRequest.md) |  | [optional]
**status** | **string** | Operational status of this VLAN  * &#x60;active&#x60; - Active * &#x60;reserved&#x60; - Reserved * &#x60;deprecated&#x60; - Deprecated | [optional]
**role** | [**\OpenAPI\Client\Model\RoleRequest**](RoleRequest.md) |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
