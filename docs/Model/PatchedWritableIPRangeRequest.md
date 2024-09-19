# # PatchedWritableIPRangeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_address** | **string** |  | [optional]
**end_address** | **string** |  | [optional]
**vrf** | [**\OpenAPI\Client\Model\BriefVRFRequest**](BriefVRFRequest.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenantRequest**](BriefTenantRequest.md) |  | [optional]
**status** | **string** | Operational status of this range  * &#x60;active&#x60; - Active * &#x60;reserved&#x60; - Reserved * &#x60;deprecated&#x60; - Deprecated | [optional]
**role** | [**\OpenAPI\Client\Model\BriefRoleRequest**](BriefRoleRequest.md) |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**mark_utilized** | **bool** | Treat as fully utilized | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
