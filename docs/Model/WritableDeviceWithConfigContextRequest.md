# # WritableDeviceWithConfigContextRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**device_type** | [**\OpenAPI\Client\Model\BriefDeviceTypeRequest**](BriefDeviceTypeRequest.md) |  |
**role** | [**\OpenAPI\Client\Model\BriefDeviceRoleRequest**](BriefDeviceRoleRequest.md) |  |
**tenant** | [**\OpenAPI\Client\Model\BriefTenantRequest**](BriefTenantRequest.md) |  | [optional]
**platform** | [**\OpenAPI\Client\Model\BriefPlatformRequest**](BriefPlatformRequest.md) |  | [optional]
**serial** | **string** | Chassis serial number, assigned by the manufacturer | [optional]
**asset_tag** | **string** | A unique tag used to identify this device | [optional]
**site** | [**\OpenAPI\Client\Model\BriefSiteRequest**](BriefSiteRequest.md) |  |
**location** | [**\OpenAPI\Client\Model\BriefLocationRequest**](BriefLocationRequest.md) |  | [optional]
**rack** | [**\OpenAPI\Client\Model\BriefRackRequest**](BriefRackRequest.md) |  | [optional]
**position** | **float** |  | [optional]
**face** | **string** | * &#x60;front&#x60; - Front * &#x60;rear&#x60; - Rear |
**latitude** | **float** | GPS coordinate in decimal format (xx.yyyyyy) | [optional]
**longitude** | **float** | GPS coordinate in decimal format (xx.yyyyyy) | [optional]
**status** | **string** | * &#x60;offline&#x60; - Offline * &#x60;active&#x60; - Active * &#x60;planned&#x60; - Planned * &#x60;staged&#x60; - Staged * &#x60;failed&#x60; - Failed * &#x60;inventory&#x60; - Inventory * &#x60;decommissioning&#x60; - Decommissioning | [optional]
**airflow** | **string** | * &#x60;front-to-rear&#x60; - Front to rear * &#x60;rear-to-front&#x60; - Rear to front * &#x60;left-to-right&#x60; - Left to right * &#x60;right-to-left&#x60; - Right to left * &#x60;side-to-rear&#x60; - Side to rear * &#x60;passive&#x60; - Passive * &#x60;mixed&#x60; - Mixed | [optional]
**primary_ip4** | [**\OpenAPI\Client\Model\BriefIPAddressRequest**](BriefIPAddressRequest.md) |  | [optional]
**primary_ip6** | [**\OpenAPI\Client\Model\BriefIPAddressRequest**](BriefIPAddressRequest.md) |  | [optional]
**oob_ip** | [**\OpenAPI\Client\Model\BriefIPAddressRequest**](BriefIPAddressRequest.md) |  | [optional]
**cluster** | [**\OpenAPI\Client\Model\BriefClusterRequest**](BriefClusterRequest.md) |  | [optional]
**virtual_chassis** | [**\OpenAPI\Client\Model\BriefVirtualChassisRequest**](BriefVirtualChassisRequest.md) |  | [optional]
**vc_position** | **int** |  | [optional]
**vc_priority** | **int** | Virtual chassis master election priority | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**config_template** | [**\OpenAPI\Client\Model\BriefConfigTemplateRequest**](BriefConfigTemplateRequest.md) |  | [optional]
**local_context_data** | **mixed** | Local config context data takes precedence over source contexts in the final rendered config context | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
