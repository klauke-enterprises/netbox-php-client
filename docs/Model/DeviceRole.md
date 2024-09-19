# # DeviceRole

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**slug** | **string** |  |
**color** | **string** |  | [optional]
**vm_role** | **bool** | Virtual machines may be assigned to this role | [optional]
**config_template** | [**\OpenAPI\Client\Model\BriefConfigTemplate**](BriefConfigTemplate.md) |  | [optional]
**description** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**device_count** | **int** |  | [readonly]
**virtualmachine_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
