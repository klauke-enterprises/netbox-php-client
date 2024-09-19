# # SiteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Full name of the site |
**slug** | **string** |  |
**status** | **string** | * &#x60;planned&#x60; - Planned * &#x60;staging&#x60; - Staging * &#x60;active&#x60; - Active * &#x60;decommissioning&#x60; - Decommissioning * &#x60;retired&#x60; - Retired | [optional]
**region** | [**\OpenAPI\Client\Model\BriefRegionRequest**](BriefRegionRequest.md) |  | [optional]
**group** | [**\OpenAPI\Client\Model\BriefSiteGroupRequest**](BriefSiteGroupRequest.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenantRequest**](BriefTenantRequest.md) |  | [optional]
**facility** | **string** | Local facility ID or description | [optional]
**time_zone** | **string** |  | [optional]
**description** | **string** |  | [optional]
**physical_address** | **string** | Physical location of the building | [optional]
**shipping_address** | **string** | If different from the physical address | [optional]
**latitude** | **float** | GPS coordinate in decimal format (xx.yyyyyy) | [optional]
**longitude** | **float** | GPS coordinate in decimal format (xx.yyyyyy) | [optional]
**comments** | **string** |  | [optional]
**asns** | **int[]** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
