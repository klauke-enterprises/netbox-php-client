# # RackReservation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**rack** | [**\OpenAPI\Client\Model\Rack**](Rack.md) |  |
**units** | **int[]** |  |
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**user** | [**\OpenAPI\Client\Model\User**](User.md) |  |
**tenant** | [**\OpenAPI\Client\Model\Tenant**](Tenant.md) |  | [optional]
**description** | **string** |  |
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
