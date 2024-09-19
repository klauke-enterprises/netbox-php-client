# # PrefixRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prefix** | **string** |  |
**site** | [**\OpenAPI\Client\Model\SiteRequest**](SiteRequest.md) |  | [optional]
**vrf** | [**\OpenAPI\Client\Model\VRFRequest**](VRFRequest.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\TenantRequest**](TenantRequest.md) |  | [optional]
**vlan** | [**\OpenAPI\Client\Model\VLANRequest**](VLANRequest.md) |  | [optional]
**status** | **string** | * &#x60;container&#x60; - Container * &#x60;active&#x60; - Active * &#x60;reserved&#x60; - Reserved * &#x60;deprecated&#x60; - Deprecated | [optional]
**role** | [**\OpenAPI\Client\Model\RoleRequest**](RoleRequest.md) |  | [optional]
**is_pool** | **bool** | All IP addresses within this prefix are considered usable | [optional]
**mark_utilized** | **bool** | Treat as fully utilized | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
