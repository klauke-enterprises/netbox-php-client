# # PatchedInventoryItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**device** | [**\OpenAPI\Client\Model\DeviceRequest**](DeviceRequest.md) |  | [optional]
**parent** | **int** |  | [optional]
**name** | **string** |  | [optional]
**label** | **string** | Physical label | [optional]
**role** | [**\OpenAPI\Client\Model\InventoryItemRoleRequest**](InventoryItemRoleRequest.md) |  | [optional]
**manufacturer** | [**\OpenAPI\Client\Model\ManufacturerRequest**](ManufacturerRequest.md) |  | [optional]
**part_id** | **string** | Manufacturer-assigned part identifier | [optional]
**serial** | **string** |  | [optional]
**asset_tag** | **string** | A unique tag used to identify this item | [optional]
**discovered** | **bool** | This item was automatically discovered | [optional]
**description** | **string** |  | [optional]
**component_type** | **string** |  | [optional]
**component_id** | **int** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
