# # WritableClusterRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**type** | [**\OpenAPI\Client\Model\ClusterTypeRequest**](ClusterTypeRequest.md) |  |
**group** | [**\OpenAPI\Client\Model\ClusterGroupRequest**](ClusterGroupRequest.md) |  | [optional]
**status** | **string** | * &#x60;planned&#x60; - Planned * &#x60;staging&#x60; - Staging * &#x60;active&#x60; - Active * &#x60;decommissioning&#x60; - Decommissioning * &#x60;offline&#x60; - Offline | [optional]
**tenant** | [**\OpenAPI\Client\Model\TenantRequest**](TenantRequest.md) |  | [optional]
**site** | [**\OpenAPI\Client\Model\SiteRequest**](SiteRequest.md) |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
