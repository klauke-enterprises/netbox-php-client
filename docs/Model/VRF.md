# # VRF

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**rd** | **string** | Unique route distinguisher (as defined in RFC 4364) | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**enforce_unique** | **bool** | Prevent duplicate prefixes/IP addresses within this VRF | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**import_targets** | [**\OpenAPI\Client\Model\RouteTarget[]**](RouteTarget.md) |  | [optional]
**export_targets** | [**\OpenAPI\Client\Model\RouteTarget[]**](RouteTarget.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**ipaddress_count** | **int** |  | [readonly]
**prefix_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
