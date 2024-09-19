# # VLANGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**slug** | **string** |  |
**scope_type** | **string** |  | [optional]
**scope_id** | **int** |  | [optional]
**scope** | **mixed** |  | [readonly]
**min_vid** | **int** | Lowest permissible ID of a child VLAN | [optional]
**max_vid** | **int** | Highest permissible ID of a child VLAN | [optional]
**description** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**vlan_count** | **int** |  | [readonly]
**utilization** | **string** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
