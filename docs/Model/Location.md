# # Location

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**slug** | **string** |  |
**site** | [**\OpenAPI\Client\Model\BriefSite**](BriefSite.md) |  |
**parent** | [**\OpenAPI\Client\Model\NestedLocation**](NestedLocation.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\LocationStatus**](LocationStatus.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**facility** | **string** | Local facility ID or description | [optional]
**description** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**rack_count** | **int** |  | [readonly] [default to 0]
**device_count** | **int** |  | [readonly] [default to 0]
**_depth** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
