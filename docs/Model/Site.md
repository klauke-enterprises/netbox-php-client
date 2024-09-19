# # Site

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** | Full name of the site |
**slug** | **string** |  |
**status** | [**\OpenAPI\Client\Model\LocationStatus**](LocationStatus.md) |  | [optional]
**region** | [**\OpenAPI\Client\Model\BriefRegion**](BriefRegion.md) |  | [optional]
**group** | [**\OpenAPI\Client\Model\BriefSiteGroup**](BriefSiteGroup.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**facility** | **string** | Local facility ID or description | [optional]
**time_zone** | **string** |  | [optional]
**description** | **string** |  | [optional]
**physical_address** | **string** | Physical location of the building | [optional]
**shipping_address** | **string** | If different from the physical address | [optional]
**latitude** | **float** | GPS coordinate in decimal format (xx.yyyyyy) | [optional]
**longitude** | **float** | GPS coordinate in decimal format (xx.yyyyyy) | [optional]
**comments** | **string** |  | [optional]
**asns** | [**\OpenAPI\Client\Model\ASN[]**](ASN.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**circuit_count** | **int** |  | [readonly]
**device_count** | **int** |  | [readonly]
**prefix_count** | **int** |  | [readonly]
**rack_count** | **int** |  | [readonly]
**virtualmachine_count** | **int** |  | [readonly]
**vlan_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
