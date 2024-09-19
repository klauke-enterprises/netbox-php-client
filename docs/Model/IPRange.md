# # IPRange

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**family** | [**\OpenAPI\Client\Model\AggregateFamily**](AggregateFamily.md) |  |
**start_address** | **string** |  |
**end_address** | **string** |  |
**size** | **int** |  | [readonly]
**vrf** | [**\OpenAPI\Client\Model\BriefVRF**](BriefVRF.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\IPRangeStatus**](IPRangeStatus.md) |  | [optional]
**role** | [**\OpenAPI\Client\Model\BriefRole**](BriefRole.md) |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**mark_utilized** | **bool** | Treat as fully utilized | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
