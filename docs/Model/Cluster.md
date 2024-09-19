# # Cluster

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**type** | [**\OpenAPI\Client\Model\BriefClusterType**](BriefClusterType.md) |  |
**group** | [**\OpenAPI\Client\Model\BriefClusterGroup**](BriefClusterGroup.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\ClusterStatus**](ClusterStatus.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**site** | [**\OpenAPI\Client\Model\BriefSite**](BriefSite.md) |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**device_count** | **int** |  | [readonly]
**virtualmachine_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
