# # VLANRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**site** | [**\OpenAPI\Client\Model\BriefSiteRequest**](BriefSiteRequest.md) |  | [optional]
**group** | [**\OpenAPI\Client\Model\BriefVLANGroupRequest**](BriefVLANGroupRequest.md) |  | [optional]
**vid** | **int** | Numeric VLAN ID (1-4094) |
**name** | **string** |  |
**tenant** | [**\OpenAPI\Client\Model\BriefTenantRequest**](BriefTenantRequest.md) |  | [optional]
**status** | **string** | * &#x60;active&#x60; - Active * &#x60;reserved&#x60; - Reserved * &#x60;deprecated&#x60; - Deprecated | [optional]
**role** | [**\OpenAPI\Client\Model\BriefRoleRequest**](BriefRoleRequest.md) |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
