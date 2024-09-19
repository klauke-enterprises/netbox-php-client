# # Prefix

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**family** | [**\OpenAPI\Client\Model\AggregateFamily**](AggregateFamily.md) |  |
**prefix** | **string** |  |
**site** | [**\OpenAPI\Client\Model\Site**](Site.md) |  | [optional]
**vrf** | [**\OpenAPI\Client\Model\VRF**](VRF.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\Tenant**](Tenant.md) |  | [optional]
**vlan** | [**\OpenAPI\Client\Model\VLAN**](VLAN.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\PrefixStatus**](PrefixStatus.md) |  | [optional]
**role** | [**\OpenAPI\Client\Model\Role**](Role.md) |  | [optional]
**is_pool** | **bool** | All IP addresses within this prefix are considered usable | [optional]
**mark_utilized** | **bool** | Treat as fully utilized | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**children** | **int** |  | [readonly]
**_depth** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
