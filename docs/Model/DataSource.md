# # DataSource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**type** | [**\OpenAPI\Client\Model\DataSourceType**](DataSourceType.md) |  |
**source_url** | **string** |  |
**enabled** | **bool** |  | [optional]
**status** | [**\OpenAPI\Client\Model\DataSourceStatus**](DataSourceStatus.md) |  |
**description** | **string** |  | [optional]
**parameters** | **mixed** |  | [optional]
**ignore_rules** | **string** | Patterns (one per line) matching files to ignore when syncing | [optional]
**comments** | **string** |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**last_synced** | **\DateTime** |  | [readonly]
**file_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
