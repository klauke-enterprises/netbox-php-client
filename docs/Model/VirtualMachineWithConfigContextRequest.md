# # VirtualMachineWithConfigContextRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** | * &#x60;offline&#x60; - Offline * &#x60;active&#x60; - Active * &#x60;planned&#x60; - Planned * &#x60;staged&#x60; - Staged * &#x60;failed&#x60; - Failed * &#x60;decommissioning&#x60; - Decommissioning | [optional]
**site** | [**\OpenAPI\Client\Model\BriefSiteRequest**](BriefSiteRequest.md) |  | [optional]
**cluster** | [**\OpenAPI\Client\Model\BriefClusterRequest**](BriefClusterRequest.md) |  | [optional]
**device** | [**\OpenAPI\Client\Model\BriefDeviceRequest**](BriefDeviceRequest.md) |  | [optional]
**serial** | **string** |  | [optional]
**role** | [**\OpenAPI\Client\Model\BriefDeviceRoleRequest**](BriefDeviceRoleRequest.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenantRequest**](BriefTenantRequest.md) |  | [optional]
**platform** | [**\OpenAPI\Client\Model\BriefPlatformRequest**](BriefPlatformRequest.md) |  | [optional]
**primary_ip4** | [**\OpenAPI\Client\Model\BriefIPAddressRequest**](BriefIPAddressRequest.md) |  | [optional]
**primary_ip6** | [**\OpenAPI\Client\Model\BriefIPAddressRequest**](BriefIPAddressRequest.md) |  | [optional]
**vcpus** | **float** |  | [optional]
**memory** | **int** |  | [optional]
**disk** | **int** |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**config_template** | [**\OpenAPI\Client\Model\BriefConfigTemplateRequest**](BriefConfigTemplateRequest.md) |  | [optional]
**local_context_data** | **mixed** | Local config context data takes precedence over source contexts in the final rendered config context | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
