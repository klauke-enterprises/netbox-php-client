# # PatchedWritablePrefixRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prefix** | **string** |  | [optional]
**site** | [**\OpenAPI\Client\Model\BriefSiteRequest**](BriefSiteRequest.md) |  | [optional]
**vrf** | [**\OpenAPI\Client\Model\BriefVRFRequest**](BriefVRFRequest.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenantRequest**](BriefTenantRequest.md) |  | [optional]
**vlan** | [**\OpenAPI\Client\Model\BriefVLANRequest**](BriefVLANRequest.md) |  | [optional]
**status** | **string** | Operational status of this prefix  * &#x60;container&#x60; - Container * &#x60;active&#x60; - Active * &#x60;reserved&#x60; - Reserved * &#x60;deprecated&#x60; - Deprecated | [optional]
**role** | [**\OpenAPI\Client\Model\BriefRoleRequest**](BriefRoleRequest.md) |  | [optional]
**is_pool** | **bool** | All IP addresses within this prefix are considered usable | [optional]
**mark_utilized** | **bool** | Treat as fully utilized | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
