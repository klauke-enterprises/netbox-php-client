# # InventoryItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**device** | [**\OpenAPI\Client\Model\BriefDevice**](BriefDevice.md) |  |
**parent** | **int** |  | [optional]
**name** | **string** |  |
**label** | **string** | Physical label | [optional]
**role** | [**\OpenAPI\Client\Model\BriefInventoryItemRole**](BriefInventoryItemRole.md) |  | [optional]
**manufacturer** | [**\OpenAPI\Client\Model\BriefManufacturer**](BriefManufacturer.md) |  | [optional]
**part_id** | **string** | Manufacturer-assigned part identifier | [optional]
**serial** | **string** |  | [optional]
**asset_tag** | **string** | A unique tag used to identify this item | [optional]
**discovered** | **bool** | This item was automatically discovered | [optional]
**description** | **string** |  | [optional]
**component_type** | **string** |  | [optional]
**component_id** | **int** |  | [optional]
**component** | **mixed** |  | [readonly]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**_depth** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
